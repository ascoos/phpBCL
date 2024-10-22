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
 * @subpackage         : Core Compatibilities Manager for PHP < 7.3.0
 * @source             : /phpBCL/src/compat/compat_php73x.php
 * @version            : 1.1.3
 * @created            : 2021-12-07 01:20:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */



/**
 * ++ 7.3.0     Performs a full case fold conversion which removes case distinctions present in the string. 
 *              This is used for caseless matching. This may change the length of the string. Available since PHP 7.3.
 */
if (!defined('MB_CASE_FOLD')) define('MB_CASE_FOLD', 3);


/**
 * ++ 7.3.0     Performs simple upper-case fold conversion. This does not change the length of the string. Available as of PHP 7.3. 
 */
if (!defined('MB_CASE_UPPER_SIMPLE')) define('MB_CASE_UPPER_SIMPLE', 4);


/**
 * ++ 7.3.0     Performs a simple lower-case fold conversion. This does not change the length of the string. Available as of PHP 7.3.
 */
if (!defined('MB_CASE_LOWER_SIMPLE')) define('MB_CASE_LOWER_SIMPLE', 5);


/**
 * ++ 7.3.0     Performs simple title-case fold conversion. This does not change the length of the string. Available as of PHP 7.3.
 */
if (!defined('MB_CASE_TITLE_SIMPLE')) define('MB_CASE_TITLE_SIMPLE', 6);


/**
 * ++ 7.3.0     Performs a simple case fold conversion which removes case distinctions present in the string. 
 *              This is used for caseless matching. This does not change the length of the string. 
 *              Used by case-insensitive operations internally by the MBString extension. Available as of PHP 7.3.  
 */
if (!defined('MB_CASE_FOLD_SIMPLE')) define('MB_CASE_FOLD_SIMPLE', 7);




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
  function  array_key_first($array)
  {
    $errors = array(
        'array_key_first(): expects parameter 1 to be array, '.gettype($array).' given',
        'array_key_first(): Parameter 1 cannot be empty'
    );

    /******************
     * Check for Errors
     *****************/ 
    if (!is_array($array)) {
        trigger_error($errors[0], E_USER_WARNING);
        return null;
    }  


    if (!empty($array)) {
        foreach($array as $key => $unused) {
            return $key;
        }
    } else {
        trigger_error($errors[1], E_USER_WARNING);
        return null;
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
    function array_key_last($array) 
    {
        $errors = array(
            'array_key_last(): expects parameter 1 to be array, '.gettype($array).' given',
            'array_key_last(): Parameter 1 cannot be empty'
        );

        /******************
         * Check for Errors
         *****************/ 
        if (!is_array($array)) {
            trigger_error($errors[0], E_USER_WARNING);
            return null;
        }          

        if( !empty($array) ) {
            return key(array_slice($array, -1, 1, true));
        } else {
            trigger_error($errors[1], E_USER_WARNING);
            return null;
        }        
        //return null;
    }
}



/**
 * If the function [ is_countable ] does not exist then we create it.
 * ++ 7.3.0  ---- https://www.php.net/manual/en/function.is-countable.php
 */
if (!function_exists('is_countable')) {
    /**
     * Verify that the contents of a variable is a countable value 
     * 
     * Verify that the contents of a variable is an array or an object implementing Countable 
     * 
     * @link https://www.php.net/manual/en/function.is-countable.php
     * 
     * @param mixed $value    The value to check
     * 
     * @return bool    Returns true if value is countable, false otherwise.
     */
    function  is_countable($value) 
    {
        return is_array($value) || (is_object($value) && ($value instanceof Countable || $value instanceof ResourceBundle || $value instanceof SimpleXmlElement || $value instanceof ArrayIterator));
    }
}

?>
