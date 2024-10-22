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
 * @subpackage         : Core Compatibilities Manager for PHP < 7.4.0
 * @source             : /phpBCL/src/compat/compat_php74x.php
 * @version            : 1.1.3
 * @created            : 2021-12-07 01:20:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * If the function [ password_algos ] does not exist then we create it.
 * ++ 7.4.0  ---- https://www.php.net/manual/en/function.password-algos.php
 */
if (!function_exists('password_algos')) 
{
  /**
   * Get available password hashing algorithm IDs
   * 
   * DESCRIPT: Returns a complete list of all registered password hashing algorithm IDs as an array of strings.
   * 
   * @link https://www.php.net/manual/en/function.password-algos.php
   * 
   * @return array    Returns the available password hashing algorithm IDs.
   */
  function password_algos()
  {
      $algos = [PASSWORD_BCRYPT];
      defined('PASSWORD_ARGON2I')  && $algos[] = PASSWORD_ARGON2I;
      defined('PASSWORD_ARGON2ID') && $algos[] = PASSWORD_ARGON2ID;
      return (array) $algos;
  }
}


/**
 * If the function [ mb_str_split ] does not exist then we create it.
 * ++ 7.4.0  ---- https://www.php.net/manual/en/function.mb-str-split.php
 */
if (!function_exists('mb_str_split') )
{
  /**
   * Given a multibyte string, return an array of its characters
   * 
   * This function will return an array of strings, it is a version of str_split() with support for encodings of variable character size 
   * as well as fixed-size encodings of 1,2 or 4 byte characters. 
   * If the length parameter is specified, the string is broken down into chunks of the specified length in characters (not bytes). 
   * The encoding parameter can be optionally specified and it is good practice to do so. 
   * 
   * @link https://www.php.net/manual/en/function.mb-str-split.php
   * 
   * @param   string        $string       The string to split into characters or chunks. 
   * 
   * @param   int|null      $length       If specified, each element of the returned array will be composed 
   *                                      of multiple characters instead of a single character. 
   * @param   string|null   $encoding     The encoding parameter is the character encoding. 
   *                                      If it is omitted or null, the internal character encoding value will be used.
   *                                      A string specifying one of the supported encodings.

   * 
   * @return  array   returns an array of strings.
   */
  function mb_str_split($string, $length = 1, $encoding = null)
  {
    $errors = array (
      'mb_str_split(): expects parameter 1 to be string, '.gettype($string).' given',
      'mb_str_split(): expects parameter 2 to be int, '.gettype($length).' given',
      'mb_str_split(): The length of each segment must be greater than zero',
      'mb_str_split(): Unknown encoding "'.$encoding.'"'
    );

    // Chack parameter 1 [$string]
    if (!is_string($string) && !is_scalar($string) && !(is_object($string) && method_exists($string, '__toString'))) {
      trigger_error($errors[0], E_USER_WARNING);
      return array();
    }
  
    // Chack parameter 2 [$length]
    if (!is_null($length) && !is_int($length)) {
      trigger_error($errors[1], E_USER_WARNING);
      return array();
    }
    
    if (null === $length) $length = 1;
    $length = (int) $length;
    if (1 > $length) {
      trigger_error($errors[2], E_USER_WARNING);
      return array();
    }
      
    if (null === $encoding) {
      $encoding = mb_internal_encoding();
    } else {
      $encoding = (string) $encoding;
    }
      
    if (!in_array($encoding, mb_list_encodings(), true)) {
      static $aliases;
      if ($aliases === null) {
        $aliases = [];
        
        foreach (mb_list_encodings() as $encoding) {
          $encoding_aliases = mb_encoding_aliases($encoding);
          
          if ($encoding_aliases) {
            foreach ($encoding_aliases as $alias) {
              $aliases[] = $alias;
            }
          }
        }
      }
      
      if (!in_array($encoding, $aliases, true)) {
        trigger_error($errors[3], E_USER_WARNING);
        return array();
      }
    }
      
    $result = [];
    $len = mb_strlen($string, $encoding);
    for ($i = 0; $i < $len; $i += $length) {
      $result[] = mb_substr($string, $i, $length, $encoding);
    }
    return $result;
  }  
}
?>
