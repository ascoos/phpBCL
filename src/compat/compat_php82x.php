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
 * @version            : **** - $release: 1.0 - $revision: 3 - $build: ****
 * @created            : 2023-06-22 07:00:00 UTC+3
 * @updated            : 2023-07-11 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


// Run on ASCOOS CMS only. Marked as comment if you want run this script with other cms.
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

//include_once($cms_path."/phpBCL/src/compat/82/random.php");





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

   * @param     ?array  $params     An optional list array with as many elements as there are bound parameters in the SQL statement 
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
    $stmt = $mysql->prepare($query);
    if (!mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT) && $mysql->error) return false;
    
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
?>