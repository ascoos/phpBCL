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
 * @subpackage         : Core Deprecated and removed Compatibilities Manager
 * @source             : /phpBCL/src/compat/compat_deprecated.php
 * @version            : 1,1,3
 * @created            : 2023-06-22 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


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
  function each(&$array)
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