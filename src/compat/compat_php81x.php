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
 * @subpackage         : Core Compatibilities Manager for PHP < 8.0.0
 * @source             : /phpBCL/src/compat/compat_php81x.php
 * @version            : 1.1.3
 * @created            : 2021-12-07 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * If the function [ array_is_list ] does not exist then we create it.
 * ++ 8.1.0  ---- https://www.php.net/manual/en/function.array-is-list.php
 */
if (!function_exists('array_is_list'))
{
  /**
   * Checks whether a given array is a list
   * 
   * DESCRIPT : Determines if the given array is a list. 
   *            An array is considered a list if its keys consist of consecutive numbers from 0 to count($array)-1.
   * 
   * @link https://www.php.net/manual/function.array-is-list.php
   * 
   * @param   array $array: The array being evaluated.
   * @return  bool    Returns true if array is a list, false otherwise.
   */
  function array_is_list($array)
  {
    $errors = array(
      'array_is_list(): expects parameter 1 to be array, '.gettype($array).' given',
      'array_is_list(): The array does not start at 0',
      'array_is_list(): Non-integer keys',
      'array_is_list(): Non-consecutive keys'
    );

    /******************
     * Check for Errors
     *****************/ 
    // If it is not an array, it returns a string with the error and the value False.
     if (!is_array($array)) {
      trigger_error($errors[0], E_USER_WARNING);
      return false;
    }

    // If the array is empty, return True
    if ($array === []) return true;

    // If the first key is greater than 0, it returns a string with the error and the value False.
    if (array_key_first($array) !== 0) {
      trigger_error($errors[1], E_USER_WARNING);
      return false;      
    }

    $i = 0;
    foreach ($array as $k => $v) {
      // Non-integer keys
      if (!is_int($k)) {
        trigger_error($errors[2], E_USER_WARNING);
        return false;
      }

      // Non-consecutive keys
      if ($k !== $i++) {
        trigger_error($errors[3], E_USER_WARNING);
        return false;
      }      
    }
    return true;
  }
}
?>