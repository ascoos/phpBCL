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
 * @subpackage         : Core Compatibilities Manager for PHP < 5.5.0
 * @source             : /phpBCL/src/compat/compat_php55x.php
 * @version            : 1.1.3
 * @created            : 2013-12-31 23:59:59 GMT+2
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */



/**
 * If the function [ array_column ] does not exist then we create it.
 * ++ 5.5.0  ---- https://www.php.net/manual/en/function.array-column.php
 */
if (!function_exists('array_column')) {
    /**
     * array_column() returns the values from a single column of the array, identified by the column_key. 
     * Optionally, an index_key may be provided to index the values in the returned array by the values 
     * from the index_key column of the input array. 
     * 
     * @link https://www.php.net/manual/en/function.array-column.php
     * 
     * @param   array           $array          A multi-dimensional array or an array of objects from which to pull a column of values from. 
     *                                          If an array of objects is provided, then public properties can be directly pulled. 
     *                                          In order for protected or private properties to be pulled, the class must implement both 
     *                                          the __get() and __isset() magic methods. 
     * 
     * @param   int|string|null $column_key     The column of values to return. 
     *                                          This value may be an integer key of the column you wish to retrieve, 
     *                                          or it may be a string key name for an associative array or property name. 
     *                                          It may also be null to return complete arrays or objects 
     *                                          (this is useful together with index_key to reindex the array). 
     * 
     * @param   int|string|null $index_key      The column to use as the index/keys for the returned array. 
     *                                          This value may be the integer key of the column, or it may be the string key name. 
     *                                          The value is cast as usual for array keys (however, prior to PHP 8.0.0, objects supporting 
     *                                          conversion to string were also allowed). 
     * 
     * @return array        Returns an array of values representing a single column from the input array. 
     * 
     * Changelog
     * =========
     * 8.0.0 	Objects in columns indicated by index_key parameter will no longer be cast to string and will now throw a TypeError instead. 
     * 
     */
    function array_column($array, $column_key, $index_key = null)
    {
        $result = array();
        foreach ($array as $subArray) {
            if (!is_array($subArray)) {
                continue;
            } elseif (is_null($index_key) && array_key_exists($column_key, $subArray)) {
                $result[] = $subArray[$column_key];
            } elseif (array_key_exists($index_key, $subArray)) {
                if (is_null($column_key)) {
                    $result[$subArray[$index_key]] = $subArray;
                } elseif (array_key_exists($column_key, $subArray)) {
                    $result[$subArray[$index_key]] = $subArray[$column_key];
                }
            }
        }
        return $result;
    }
}





/**
 * If the function [ boolval ] does not exist then we create it.
 * ++ 5.5.0  ---- https://www.php.net/manual/en/function.boolval.php
 */
if (!function_exists('boolval')) {

    /**
     * Get the boolean value of a variable
     * 
     * @link https://www.php.net/manual/en/function.boolval.php 
     * 
     * @param   mixed $value    The scalar value being converted to a bool.
     * @return  bool            The bool value of value. 
     * 
     */
    function boolval($value) {
        return (bool) $value;
    }
}




/**
 * If the function [ json_last_error_msg ] does not exist then we create it.
 * ++ 5.5.0  ---- https://www.php.net/manual/en/function.json-last-error-msg.php
 */
if (!function_exists('json_last_error_msg')) {
    /**
     * Returns the error string of the last json_encode() or json_decode() call, which did not specify JSON_THROW_ON_ERROR.
     * 
     * @link https://www.php.net/manual/en/function.json-last-error-msg.php
     * 
     * @return string   Returns the error message on success, or "No error" if no error has occurred. 
     * 
     */
    function json_last_error_msg() {
        static $ERRORS = array(
            JSON_ERROR_NONE                     => 'No error has occurred',
            JSON_ERROR_DEPTH                    => 'The maximum stack depth has been exceeded',
            JSON_ERROR_STATE_MISMATCH           => 'State mismatch (invalid or malformed JSON)',
            JSON_ERROR_CTRL_CHAR                => 'Control character error, possibly incorrectly encoded',
            JSON_ERROR_SYNTAX                   => 'Syntax error',
            JSON_ERROR_UTF8                     => 'Malformed UTF-8 characters, possibly incorrectly encoded',
            JSON_ERROR_RECURSION 	            => 'One or more recursive references in the value to be encoded',
            JSON_ERROR_INF_OR_NAN 	            => 'One or more NAN or INF values in the value to be encoded',
            JSON_ERROR_UNSUPPORTED_TYPE         => 'A value of a type that cannot be encoded was given',
            JSON_ERROR_INVALID_PROPERTY_NAME 	=> 'A property name that cannot be encoded was given',
            JSON_ERROR_UTF16 	                => 'Malformed UTF-16 characters, possibly incorrectly encoded'
        );
        $error = json_last_error();
        return array_key_exists($error, $ERRORS) ? $ERRORS[$error] : "Unknown error";
    }
}

?>