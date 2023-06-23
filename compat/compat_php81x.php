<?php
/**
 *
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ********************************************************************
 * @ Project ASCOOS                                                 *
 * @ Copyright (C) 2007 - 2023 AlexSoft Software.                   *
 * @ Creator: Drogidis Christos                                     *
 * @ ASCOOS CMS Site: www.ascoos.com                                *
 * @ Creator Site: www.alexsoft.gr                                  *
 * @ email: support@ascoos.com                                      *
 * @ license site: http://docs.ascoos.com/lics/ascoos/AGL.html      *
 * @ Copyrighted Commercial Software                                *
 * @ Program ASCOOS CMS Manager                                     *
 ********************************************************************
 *
 * @ Package           : ASCOOS CMS - phpBCL
 * @ Subpackage        : Core Compatibilities Manager for PHP < 8.1.0
 * @ ASCOOS Version    : Ten - 1.0.0
 * @ File Name         : /phpBCL/compat/compat_php81x.php
 * @ File No.          : ?? - $release: 1.0 - $revision: 0 - $build 0
 * @ Created Date      : 2021-12-07 07:00:00 UTC+3
 * @ Updated Date      : 2023-06-22 07:00:00 UTC+3
 * @ Author            : Drogidis Christos
 * @ Author email      : webmaster@alexsoft.gr
 * @ Author website    : www.alexsoft.gr
 *
 */

// Εκτέλεση μόνο από το ASCOOS
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