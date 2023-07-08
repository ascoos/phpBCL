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
 * @version            : **** - $release: 1.0 - $revision: 2 - $build: ****
 * @created            : 2021-12-07 07:00:00 UTC+3
 * @updated            : 2023-07-07 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


// Run on ASCOOS CMS only. Marked as comment if you want run this script with other cms.
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");




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
  function array_is_list(array $array): bool
  {
    return $array === [] || (array_keys($array) === range(0, count($array) - 1));
  }
}
?>