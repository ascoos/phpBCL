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
 * @ Subpackage        : Core Compatibilities Manager for PHP < 7.3.0
 * @ ASCOOS Version    : Ten - 1.0.0
 * @ File Name         : /phpBCL/compat/compat_php73x.php
 * @ File No.          : ?? - $release: 1.0 - revision: 0 - build 0
 * @ Created Date      : 2023-06-26 07:00:00 UTC+3
 * @ Updated Date      : 
 * @ Author            : Drogidis Christos
 * @ Author email      : webmaster@alexsoft.gr
 * @ Author website    : www.alexsoft.gr
 *
 */


// Run on ASCOOS CMS only. Marked as comment if you want run this script with other cms.
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");



/**
 * If the function [ array_key_first ] does not exist then we create it.
 * ++ 7.3.0  ---- https://www.php.net/manual/en/function.array-key-first.php
 */
if (!function_exists('array_key_first')) 
{
  /**
   * Get the first key of the given array without affecting the internal array pointer. 
   * 
   * @link https://www.php.net/manual/en/function.array-key-first.php
   * 
   * @param array $array    An array. 
   * 
   * @return int|string|null   Returns the first key of array if the array is not empty; null otherwise.
   */
  function  array_key_first(array $array)
  {
    if (!empty($array)) {
        foreach($array as $key => $unused) {
            return $key;
        }
    }
    return null;
  }
}


/**
 * If the function [ array_key_last ] does not exist then we create it.
 * ++ 7.3.0  ---- https://www.php.net/manual/en/function.array-key-last.php
 */
if (!function_exists('array_key_last')) 
{
    /**
     * Gets the last key of an array
     * 
     * Get the last key of the given array without affecting the internal array pointer. 
     * 
     * @link https://www.php.net/manual/en/function.array-key-last.php
     * 
     * @param array $array    An array. 
     * 
     * @return int|string|null    Returns the last key of array if the array is not empty; null otherwise. 
     */
    function array_key_last(array $array) {
        if( !empty($array) ) {
            return key(array_slice($array, -1, 1, true));
        }
        return null;
    }
}



?>
