<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 *************************************************************************************
 * @ASCOOS-NAME        : ASCOOS CMS 24'                                              *
 * @ASCOOS-VERSION     : 24.0.0                                                      *
 * @ASCOOS-CATEGORY    : Kernel (Frontend and Administration Side)                   *
 * @ASCOOS-CREATOR     : Drogidis Christos                                           *
 * @ASCOOS-SITE        : www.ascoos.com                                              *
 * @ASCOOS-LICENSE     : [Commercial] http://docs.ascoos.com/lics/ascoos/AGL-F.html  *
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2023, AlexSoft Software.               *
 *************************************************************************************
 *
 * @package            : ASCOOS CMS - phpBCL
 * @subpackage         : Core Compatibilities Manager for PHP < 8.2.0
 * @source             : /phpBCL/src/compat/compat_php82x.php
 * @version            : 1.1.3
 * @created            : 2023-06-22 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * @since 1.0.8
 */
//if (version_compare(PHP_VERSION, '8.1.0', '='))  {
//  include_once($cms_path."/phpBCL/src/compat/82/random.php");
//}



/**
 * If the function [ mysqli_execute_query ] does not exist then we create it.
 * ++ 8.2.0 ---- https://www.php.net/manual/en/mysqli.execute-query.php
 */
if (!function_exists('mysqli_execute_query'))
{
  /**
   * Prepares, binds parameters, and executes SQL statement
   * Prepares the SQL query, binds parameters, and executes it. 
   * The mysqli::execute_query() method is a shortcut for mysqli::prepare(), mysqli_stmt::bind_param(), mysqli_stmt::execute(), 
   * and mysqli_stmt::get_result().
   * 
   * The statement template can contain zero or more question mark (?) parameter markers⁠—also called placeholders. 
   * The parameter values must be provided as an array using params parameter.
   * 
   * A prepared statement is created under the hood but it's never exposed outside of the function. 
   * It's impossible to access properties of the statement as one would do with the mysqli_stmt object. 
   * Due to this limitation, the status information is copied to the mysqli object and is available using its methods, 
   * e.g. mysqli_affected_rows() or mysqli_error(). 
   * 
   *  Note:
   * ------
   * In the case where a statement is passed to mysqli_execute_query() that is longer than max_allowed_packet of the server, 
   * the returned error codes are different depending on the operating system. The behavior is as follows:
   *         On Linux returns an error code of 1153. The error message means "got a packet bigger than max_allowed_packet bytes".
   *         On Windows returns an error code 2006. This error message means "server has gone away".
   * 
   * @link https://www.php.net/manual/en/mysqli.execute-query.php
   * 
   * @param     mysqli  $mysql      Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()
   * @param     string  $query      The query, as a string. It must consist of a single SQL statement.
   *                                The SQL statement may contain zero or more parameter markers represented by question mark (?) characters 
   *                                at the appropriate positions. 
   *                                    Note:
   *                                    The markers are legal only in certain places in SQL statements. 
   *                                    For example, they are permitted in the VALUES() list of an INSERT statement 
   *                                    (to specify column values for a row), or in a comparison with a column in a WHERE clause 
   *                                    to specify a comparison value. However, they are not permitted for identifiers 
   *                                    (such as table or column names).

   * @param     array|null  $params An optional list array with as many elements as there are bound parameters in the SQL statement 
   *                                being executed. Each value is treated as a string. 
   * 
   * @return    mysqli_result|bool  Returns false on failure. For successful queries which produce a result set, 
   *                                such as SELECT, SHOW, DESCRIBE or EXPLAIN, returns a mysqli_result object. 
   *                                For other successful queries, returns true. 
   * 
   */
//  function mysqli_execute_query(mysqli $mysql, string $query, ?array $params = null): mysqli_result|bool {
  function mysqli_execute_query($mysql, $query, $params = null)
  {
    $errors = [
      'mysqli_execute_query(): expects parameter 1 to be mysqli resource, '.gettype($mysql).' given',
      'mysqli_execute_query(): expects parameter 2 to be string, '.gettype($query).' given',
      'mysqli_execute_query(): expects parameter 3 to be array or NULL, '.gettype($params).' given'
    ];

    /*******************************
     *  CHECK FOR ERRORS PARAMETERS
     ******************************/
    /* @param 1 */
     if (!is_resource($mysql)) {
      trigger_error($errors[0], E_USER_WARNING);
      return false;
    }

    /* @param 2 */
    if (!is_string($query)) {
      trigger_error($errors[1], E_USER_WARNING);
      return false;
    }

    /* @param 3 */
    if (!is_null($params) && !is_array($params)) {
      trigger_error($errors[2], E_USER_WARNING);
      return false;
    }

    //
    $stmt = $mysql::prepare($query);
    //$stmt = mysqli_prepare($mysql, $query);

    if (!mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT) && $mysql::error) return false;
//    if (!mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT) && mysqli_error($mysql)) return false;
    
      /** 
     * Binds variables to a prepared statement as parameters
     * @link https://www.php.net/manual/en/mysqli-stmt.bind-param.php */
    mysqli_stmt_bind_param($stmt, str_repeat('s', count($params)), ...$params);  
    if (!mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT) && $stmt->error) return false;   

    //
    $stmt->execute($params);
    if (!mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT) && $stmt->error) return false;
  
    //
    return $stmt->get_result();
  }
}





/**
 * If the function [ ini_parse_quantity ] does not exist then we create it.
 * ++ 8.2.0 ---- https://www.php.net/manual/en/function.ini-parse-quantity
 */
if (!function_exists('ini_parse_quantity'))
{
  /**
   * Get interpreted size from ini shorthand syntax 
   * 
   * Returns the interpreted size in bytes on success from an ini shorthand.
   * 
   * @see https://www.php.net/manual/function.ini-parse-quantity.php
   * 
   * @param $shorthand: Ini shorthand to parse, must be a number followed by an optional multiplier. 
   *                    The following multipliers are supported: k/ K (1024), m/ M (1048576), g/ G (1073741824). 
   *                    The number can be a decimal, hex (prefixed with 0x or 0X), octal (prefixed with 0o, 0O or 0) 
   *                    or binary (prefixed with 0b or 0B)
   * 
   * @return int        Returns the interpreted size in bytes as an int.
   * 
   */
  function ini_parse_quantity($shorthand) {
    $original_shorthand = $shorthand;
    $multiplier = 1;
    $sign = '';
    $return_value = 0;

    $shorthand = trim($shorthand);

    // Return 0 for empty strings.
    if ($shorthand === '') {
      return 0;
    }

    // Accept + and - as the sign.
    if ($shorthand[0] === '-' || $shorthand[0] === '+') {
      if ($shorthand[0] === '-') {
          $multiplier = -1;
          $sign = '-';
      }
      $shorthand = substr($shorthand, 1);
    }

    // If there is no suffix, return the integer value with the sign.
    if (preg_match('/^\d+$/', $shorthand, $matches)) {
      return $multiplier * $matches[0];
    }

    // Return 0 with a warning if there are no leading digits
    if (preg_match('/^\d/', $shorthand) === 0) {
      trigger_error(sprintf('Invalid quantity "%s": no valid leading digits, interpreting as "0" for backwards compatibility', $original_shorthand), E_USER_WARNING);
      return $return_value;
    }

    // Removing whitespace characters.
    $shorthand = preg_replace('/\s/', '', $shorthand);

    $suffix = strtoupper(substr($shorthand, -1));
    switch ($suffix) {
      case 'K':
          $multiplier *= 1024;
          break;
      case 'M':
          $multiplier *= 1024 * 1024;
          break;
      case 'G':
          $multiplier *= 1024 * 1024 * 1024;
          break;
      default:
          preg_match('/\d+/', $shorthand, $matches);
          trigger_error(sprintf('Invalid quantity "%s": unknown multiplier "%s", interpreting as "%d" for backwards compatibility', $original_shorthand, $suffix, $sign . $matches[0]), E_USER_WARNING        );
          return $matches[0] * $multiplier;
    }

    $stripped_shorthand = preg_replace('/^(\d+)(\D.*)([kKmMgG])$/', '$1$3', $shorthand, -1, $count);
    if ($count > 0) {
      trigger_error(sprintf('Invalid quantity "%s", interpreting as "%s" for backwards compatibility', $original_shorthand, $sign . $stripped_shorthand), E_USER_WARNING);
    }

    preg_match('/\d+/', $shorthand, $matches);

    $multiplied = $matches[0] * $multiplier;
    if (is_float($multiplied)) {
      trigger_error(sprintf('Invalid quantity "%s": value is out of range, using overflow result for backwards compatibility', $original_shorthand), E_USER_WARNING);
    }

    return (int) ($matches[0] * $multiplier);
  }
}




/**
 * If the function [ openssl_cipher_key_length ] does not exist then we create it.
 * ++ 8.2.0 ---- https://www.php.net/manual/en/function.openssl-cipher-key-length.php
 */
if (!function_exists('openssl_cipher_key_length'))
{
  /**
   * Gets the cipher key length.
   * 
   * @link https://www.php.net/manual/function.openssl-cipher-key-length.php
   * 
   * @param string $cipher_algo : The cipher method, see openssl_get_cipher_methods() 
   *                              for a list of potential values.
   * @return bool|int Returns the cipher length on success, or false on failure.
   */
  function openssl_cipher_key_length($cipher_algo)
  {
    switch (strtolower($cipher_algo))
    {
      case 'aes-128-cbc' : $return =  16; break;
      case 'aes-128-cbc-hmac-sha1' : $return =  16; break;
      case 'aes-128-cbc-hmac-sha256' : $return =  16; break;
      case 'aes-128-ccm' : $return =  16; break;
      case 'aes-128-cfb' : $return =  16; break;
      case 'aes-128-cfb1' : $return =  16; break;
      case 'aes-128-cfb8' : $return =  16; break;
      case 'aes-128-ctr' : $return =  16; break;
      case 'aes-128-ecb' : $return =  16; break;
      case 'aes-128-gcm' : $return =  16; break;
      case 'aes-128-ocb' : $return =  16; break;
      case 'aes-128-ofb' : $return =  16; break;
      case 'aes-128-wrap' : $return =  16; break;
      case 'aes-128-wrap-pad' : $return =  16; break;
      case 'aes-128-xts' : $return =  32; break;
      case 'aes-192-cbc' : $return =  24; break;
      case 'aes-192-ccm' : $return =  24; break;
      case 'aes-192-cfb' : $return =  24; break;
      case 'aes-192-cfb1' : $return =  24; break;
      case 'aes-192-cfb8' : $return =  24; break;
      case 'aes-192-ctr' : $return =  24; break;
      case 'aes-192-ecb' : $return =  24; break;
      case 'aes-192-gcm' : $return =  24; break;
      case 'aes-192-ocb' : $return =  24; break;
      case 'aes-192-ofb' : $return =  24; break;
      case 'aes-192-wrap' : $return =  24; break;
      case 'aes-192-wrap-pad' : $return =  24; break;
      case 'aes-256-cbc' : $return =  32; break;
      case 'aes-256-cbc-hmac-sha1' : $return =  32; break;
      case 'aes-256-cbc-hmac-sha256' : $return =  32; break;
      case 'aes-256-ccm' : $return =  32; break;
      case 'aes-256-cfb' : $return =  32; break;
      case 'aes-256-cfb1' : $return =  32; break;
      case 'aes-256-cfb8' : $return =  32; break;
      case 'aes-256-ctr' : $return =  32; break;
      case 'aes-256-ecb' : $return =  32; break;
      case 'aes-256-gcm' : $return =  32; break;
      case 'aes-256-ocb' : $return =  32; break;
      case 'aes-256-ofb' : $return =  32; break;
      case 'aes-256-wrap' : $return =  32; break;
      case 'aes-256-wrap-pad' : $return =  32; break;
      case 'aes-256-xts' : $return =  64; break;
      case 'aria-128-cbc' : $return =  16; break;
      case 'aria-128-ccm' : $return =  16; break;
      case 'aria-128-cfb' : $return =  16; break;
      case 'aria-128-cfb1' : $return =  16; break;
      case 'aria-128-cfb8' : $return =  16; break;
      case 'aria-128-ctr' : $return =  16; break;
      case 'aria-128-ecb' : $return =  16; break;
      case 'aria-128-gcm' : $return =  16; break;
      case 'aria-128-ofb' : $return =  16; break;
      case 'aria-192-cbc' : $return =  24; break;
      case 'aria-192-ccm' : $return =  24; break;
      case 'aria-192-cfb' : $return =  24; break;
      case 'aria-192-cfb1' : $return =  24; break;
      case 'aria-192-cfb8' : $return =  24; break;
      case 'aria-192-ctr' : $return =  24; break;
      case 'aria-192-ecb' : $return =  24; break;
      case 'aria-192-gcm' : $return =  24; break;
      case 'aria-192-ofb' : $return =  24; break;
      case 'aria-256-cbc' : $return =  32; break;
      case 'aria-256-ccm' : $return =  32; break;
      case 'aria-256-cfb' : $return =  32; break;
      case 'aria-256-cfb1' : $return =  32; break;
      case 'aria-256-cfb8' : $return =  32; break;
      case 'aria-256-ctr' : $return =  32; break;
      case 'aria-256-ecb' : $return =  32; break;
      case 'aria-256-gcm' : $return =  32; break;
      case 'aria-256-ofb' : $return =  32; break;
      case 'camellia-128-cbc' : $return =  16; break;
      case 'camellia-128-cfb' : $return =  16; break;
      case 'camellia-128-cfb1' : $return =  16; break;
      case 'camellia-128-cfb8' : $return =  16; break;
      case 'camellia-128-ctr' : $return =  16; break;
      case 'camellia-128-ecb' : $return =  16; break;
      case 'camellia-128-ofb' : $return =  16; break;
      case 'camellia-192-cbc' : $return =  24; break;
      case 'camellia-192-cfb' : $return =  24; break;
      case 'camellia-192-cfb1' : $return =  24; break;
      case 'camellia-192-cfb8' : $return =  24; break;
      case 'camellia-192-ctr' : $return =  24; break;
      case 'camellia-192-ecb' : $return =  24; break;
      case 'camellia-192-ofb' : $return =  24; break;
      case 'camellia-256-cbc' : $return =  32; break;
      case 'camellia-256-cfb' : $return =  32; break;
      case 'camellia-256-cfb1' : $return =  32; break;
      case 'camellia-256-cfb8' : $return =  32; break;
      case 'camellia-256-ctr' : $return =  32; break;
      case 'camellia-256-ecb' : $return =  32; break;
      case 'camellia-256-ofb' : $return =  32; break;
      case 'chacha20' : $return =  32; break;
      case 'chacha20-poly1305' : $return =  32; break;
      case 'des-ede-cbc' : $return =  16; break;
      case 'des-ede-cfb' : $return =  16; break;
      case 'des-ede-ecb' : $return =  16; break;
      case 'des-ede-ofb' : $return =  16; break;
      case 'des-ede3-cbc' : $return =  24; break;
      case 'des-ede3-cfb' : $return =  24; break;
      case 'des-ede3-cfb1' : $return =  24; break;
      case 'des-ede3-cfb8' : $return =  24; break;
      case 'des-ede3-ecb' : $return =  24; break;
      case 'des-ede3-ofb' : $return =  24; break;
      case 'des3-wrap' : $return =  24; break;
      case 'sm4-cbc' : $return =  16; break;
      case 'sm4-cfb' : $return =  16; break;
      case 'sm4-ctr' : $return =  16; break;
      case 'sm4-ecb' : $return =  16; break;
      case 'sm4-ofb' : $return =  16; break;
      default: $return =  false;
    }

    if ($return === false) {
      trigger_error('openssl_cipher_key_length(): Unknown cipher algorithm', E_USER_WARNING);
      return false;
    }

    return $return;
  }
}
?>