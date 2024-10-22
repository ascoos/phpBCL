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
 * @subpackage         : Core Compatibilities Manager for PHP < 4.3.0
 * @source             : /phpBCL/src/compat/compat_php43x.php
 * @version            : 1.1.3
 * @created            : 2013-12-31 23:59:59 GMT+2
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * ++ 4.3.0     Performs a full upper-case folding. This may change the length of the string. This is the mode used by mb_strtoupper(). 
 */ 
if (!defined('MB_CASE_UPPER')) define('MB_CASE_UPPER', 0);  

/**
 * ++ 4.3.0     Performs a full lower-case folding. This may change the length of the string. This is the mode used by mb_strtolower().
 */  
if (!defined('MB_CASE_LOWER')) define('MB_CASE_LOWER', 1);

/**
 * ++ 4.3.0     Performs a full title-case conversion based on the Cased and CaseIgnorable derived Unicode properties. 
 *              In particular this improves handling of quotes and apostrophes. This may change the length of the string.
 */
if (!defined('MB_CASE_TITLE')) define('MB_CASE_TITLE', 2);



 
/**
 * If the function [ mb_convert_case ] does not exist then we create it.
 * ++ 4.3.0  ---- https://www.php.net/manual/en/function.array-column.php
 * 
 * Changelog
 * ---------
 * ++ 7.3.0 	Added support for MB_CASE_FOLD, MB_CASE_UPPER_SIMPLE, MB_CASE_LOWER_SIMPLE, MB_CASE_TITLE_SIMPLE, 
 *              and MB_CASE_FOLD_SIMPLE as mode.
 */
if (! function_exists('mb_convert_case')) {
    /**
     * Performs case folding on a string, converted in the way specified by mode. 
     * 
     * @link https://www.php.net/manual/function.mb-convert-case.php
     * 
     * @param   string  $string     The string being converted.
     * 
     * @param   int     $mode       The mode of the conversion. 
     *                              It can be one of MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE, MB_CASE_FOLD, MB_CASE_UPPER_SIMPLE, 
     *                              MB_CASE_LOWER_SIMPLE, MB_CASE_TITLE_SIMPLE, MB_CASE_FOLD_SIMPLE. 
     * 
     * @param   string  $encoding   The encoding parameter is the character encoding. 
     *                              If it is omitted or null, the internal character encoding value will be used.
     * 
     * @return  string              A case folded version of string converted in the way specified by mode. 
     */
    function mb_convert_case($string, $mode, $encoding = null) {
        switch ($mode) {
            case MB_CASE_LOWER: return strtolower($string);
            case MB_CASE_UPPER: return strtoupper($string);
            case MB_CASE_TITLE: return ucwords(strtolower($string));
            default           : return $string;
        }
    }
}

?>