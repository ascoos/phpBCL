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
 * @subpackage         : Core Similar Compatibilities Manager
 * @source             : /phpBCL/src/compat/compat_similar.php
 * @version            : 1.1.3
 * @created            : 2023-06-26 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * 8.3.0 	Calling get_class() without an argument now emits an E_DEPRECATED warning; previously, 
 *          calling this function inside a class returned the name of that class. 
 * 
 * @link https://www.php.net/manual/en/function.get-class.php
 */
function alf_get_class() {
    return __CLASS__;
}



/**
 * Performs case folding on a string, converted in the way specified by mode. 
 * ++ 4.3.0  ---- https://www.php.net/manual/en/function.array-column.php
 * 
 * Changelog
 * ---------
 * ++ 7.3.0 	Added support for MB_CASE_FOLD, MB_CASE_UPPER_SIMPLE, MB_CASE_LOWER_SIMPLE, MB_CASE_TITLE_SIMPLE, 
 *              and MB_CASE_FOLD_SIMPLE as mode.     * 
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
 * @param
 * 
 * @return  string              A case folded version of string converted in the way specified by mode. 
 */
function alf_mb_convert_case($string, $mode, $encoding = null) {
    $finds = array('ς');
    $replace = array('σ'); 

    switch ($mode) {
        case MB_CASE_UPPER: 
            return (phpversion() >= "4.3.0") ? mb_convert_case($string, MB_CASE_UPPER, $encoding) : strtoupper($string);

        case MB_CASE_LOWER: 
            return (phpversion() >= "4.3.0") ? mb_convert_case($string, MB_CASE_LOWER, $encoding) : strtolower($string);

        case MB_CASE_TITLE: 
            return (phpversion() >= "4.3.0") ? mb_convert_case($string, MB_CASE_TITLE, $encoding) : ucWords(strtolower($string));

        case MB_CASE_FOLD: 

            return (phpversion() >= "7.3.0") ? mb_convert_case($string, MB_CASE_FOLD, $encoding) : ((phpversion() >= "4.3.0") ? str_replace($finds, $replace, mb_strtolower($string, $encoding)) : str_replace($finds, $replace, strtolower($string)));

        case MB_CASE_UPPER_SIMPLE:  
            return (phpversion() >= "7.3.0") ? mb_convert_case($string, MB_CASE_UPPER_SIMPLE, $encoding) : ((phpversion() >= "4.3.0") ? mb_convert_case($string, MB_CASE_UPPER, $encoding) : strtoupper($string));

        case MB_CASE_LOWER_SIMPLE:  
            return (phpversion() >= "7.3.0") ? mb_convert_case($string, MB_CASE_LOWER_SIMPLE, $encoding) : ((phpversion() >= "4.3.0") ? mb_convert_case($string, MB_CASE_LOWER, $encoding) : strtolower($string));

        case MB_CASE_TITLE_SIMPLE:  
            return (phpversion() >= "7.3.0") ? mb_convert_case($string, MB_CASE_TITLE_SIMPLE, $encoding) : ((phpversion() >= "4.3.0") ? mb_convert_case($string, MB_CASE_TITLE, $encoding) : ucWords(strtolower($string)));

        case MB_CASE_FOLD_SIMPLE:   
            return (phpversion() >= "7.3.0") ? mb_convert_case($string, MB_CASE_FOLD_SIMPLE, $encoding) : ((phpversion() >= "4.3.0") ? str_replace($finds, $replace, mb_strtolower($string, $encoding)) : str_replace($finds, $replace, strtolower($string)));

        default: return $string;
    }
}

?>