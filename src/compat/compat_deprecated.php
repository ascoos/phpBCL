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
 * @ Subpackage        : Core Deprecated and removed Compatibilities Manager
 * @ ASCOOS Version    : Ten - 1.0.0
 * @ File Name         : /phpBCL/compat/compat_deprecated.php
 * @ File No.          : ?? - $release: 1.0 - $revision: 0 - $build 0
 * @ Created Date      : 2023-06-22 07:00:00 UTC+3
 * @ Updated Date      : 
 * @ Author            : Drogidis Christos
 * @ Author email      : webmaster@alexsoft.gr
 * @ Author website    : www.alexsoft.gr
 *
 */


// Run on ASCOOS CMS only. Marked as comment if you want run this script with other cms.
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");



/**
 * -- REMOVED in 8.0.0 version ---- https://www.php.net/manual/en/mbstring.constants.php
 */
if (!defined('MB_OVERLOAD_MAIL')) define('MB_OVERLOAD_MAIL', 1);
if (!defined('MB_OVERLOAD_STRING')) define('MB_OVERLOAD_STRING', 2);
if (!defined('MB_OVERLOAD_REGEX')) define('MB_OVERLOAD_REGEX', 4);

/**
 * -- REMOVED in 8.1.0 version ---- https://www.php.net/manual/en/function.htmlspecialchars.php
 */
if (!defined('ENT_COMPAT')) define('ENT_COMPAT', ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401);


/**
 * If the function [ each ] does not exist then we create it.
 * -- REMOVED in 8.0.0 version ---- https://www.php.net/manual/en/function.each.php
 */
if (!function_exists('each')) 
{
  /**
   * Return the current key and value pair from an array and advance the array cursor.
   * 
   * After each() has executed, the array cursor will be left on the next element of the array, 
   * or past the last element if it hits the end of the array. 
   * You have to use reset() if you want to traverse the array again using each. 
   * 
   * PHP VERSION :  PHP 4, PHP 5, PHP 7
   *                In PHP 7.2 we can use foreach() to replace each(), such as: foreach($array as $key => $value)
   * 
   * @link  https://www.php.net/manual/en/function.each.php
   * 
   * @param array|object $array : The input array.
   * 
   * @return array              : Returns the current key and value pair from the array array. 
   *                              This pair is returned in a four-element array, with the keys 0, 1, key, and value. 
   *                              Elements 0 and key contain the key name of the array element, and 1 and value contain the data.
   *                              If the internal pointer for the array points past the end of the array contents, each() returns false. 
   */
  function each(array|object &$array): array
  {
    $arr = (is_object($array)) ? (array) $array : $array;
    if (!is_array($arr)) return [];

    $key = key($arr);
    $value = current($arr);
    $each = is_null($key) ? false : [1 => $value, 'value' => $value, 0 => $key, 'key' => $key ];
    next($arr);
    return $each;
  }
}
?>