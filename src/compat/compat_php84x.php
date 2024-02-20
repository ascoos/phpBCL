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
 * @subpackage         : Core Compatibilities Manager for PHP < 8.4.0
 * @source             : /phpBCL/src/compat/compat_php84x.php
 * @version            : **** - $release: 1.0 - $revision: 1 - $build: ****
 * @created            : 2024-02-14 05:40:00 UTC+3
 * @updated            : 2024-02-20 03:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */

 
// Run on ASCOOS CMS only. Marked as comment if you want run this script with other cms.
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");




/**
 * If the function [ mb_ucfirst ] does not exist then we create it.
 * ++ 8.4.0 ---- https://wiki.php.net/rfc/mb_ucfirst
 * 
 * @since 1.0.5
 */
if (!function_exists('mb_ucfirst'))
{
    /**
     * Make a multibyte string's first character uppercase
     * 
     * @since 8.4.0
     * @link https://wiki.php.net/rfc/mb_ucfirst
     */
    function mb_ucfirst($string, $encoding = null)
    {
        /**
         * 
         * Array with Strings Errors for this function.
         */
        $errors = array (
            'mb_ucfirst(): expects parameter 1 to be string, '.gettype($string).' given',
            'mb_ucfirst(): Parameter 1 must not be empty',           
        );

        /******************
         * Check for Errors
         *****************/ 
        // Check parameter 1 [$string]
        if (!is_string($string) && !is_scalar($string) && !(is_object($string) && method_exists($string, '__toString'))) {
            trigger_error($errors[0], E_USER_WARNING);
            return '';
        }

        if ($string === '') {
            trigger_error($errors[1], E_USER_WARNING);
            return '';
        }     

        // Check parameter 2 [$encoding]
        $encoding = validate_encoding($encoding, 'mb_ucfirst');

        /************************
         * END CHECK FOR ERRORS
         ***********************/


        return mb_convert_case(mb_substr($string, 0, 1, $encoding), MB_CASE_TITLE, $encoding) . mb_substr($string, 1, null, $encoding);
    }
}



/**
 * If the function [ mb_lcfirst ] does not exist then we create it.
 * ++ 8.4.0 ---- https://wiki.php.net/rfc/mb_ucfirst
 * 
 * @since 1.0.5
 */
if (!function_exists('mb_lcfirst'))
{
    /**
     * Make a multibyte string's first character lowercase
     * 
     * @since 8.4.0
     * @link https://wiki.php.net/rfc/mb_ucfirst
     */
    function mb_lcfirst($string, $encoding = null)
    {
        /**
         * 
         * Array with Strings Errors for this function.
         */
        $errors = array (
            'mb_lcfirst(): expects parameter 1 to be string, '.gettype($string).' given',
            'mb_lcfirst(): Parameter 1 must not be empty',          
        );

        /******************
         * Check for Errors
         *****************/ 
        // Check parameter 1 [$string]
        if (!is_string($string) && !is_scalar($string) && !(is_object($string) && method_exists($string, '__toString'))) {
            trigger_error($errors[0], E_USER_WARNING);
            return '';
        }

        if ($string === '') {
            trigger_error($errors[1], E_USER_WARNING);
            return '';
        }     

        // Check parameter 2 [$encoding]
        $encoding = validate_encoding($encoding, 'mb_lcfirst');

        /************************
         * END CHECK FOR ERRORS
         ***********************/

        return mb_strtolower(mb_substr($string, 0, 1, $encoding), $encoding) . mb_substr($string, 1, null, $encoding);
    }
}





/**
 * If the function [ mb_ltrim ] does not exist then we create it.
 * ++ 8.4.0 ---- https://php.watch/versions/8.4/mb_trim-mb_ltrim-mb_rtrim
 * 
 * @since 1.0.5
 */
if (!function_exists('mb_ltrim'))
{
    /**  
    * Multi-byte safely strip white-spaces (or other characters) from the beginning of a string.  
    *
    * @param string $string The string that will be trimmed.  
    * @param string $characters Optionally, the stripped characters can also be specified using the $characters parameter. Simply list all characters that you want to be stripped.  
    * @param string|null $encoding The encoding parameter is the character encoding.  
    *
    * @return string The trimmed string.  
    */
    function mb_ltrim($string, $characters = " \f\n\r\t\v\x00\u{00A0}\u{1680}\u{2000}\u{2001}\u{2002}\u{2003}\u{2004}\u{2005}\u{2006}\u{2007}\u{2008}\u{2009}\u{200A}\u{2028}\u{2029}\u{202F}\u{205F}\u{3000}\u{0085}\u{180E}", $encoding = null)
    {        
        /**
         * Array with Strings Errors for this function.
         */
        $errors = array (
            'mb_ltrim(): expects parameter 1 to be string, '.gettype($string).' given',
            'mb_ltrim(): Parameter 1 must not be empty',
        );

        /******************
         * Check for Errors
         *****************/ 
        // Check parameter 1 [$string]
        if (!is_string($string) && !is_scalar($string) && !(is_object($string) && method_exists($string, '__toString'))) {
            trigger_error($errors[0], E_USER_WARNING);
            return '';
        }

        if ($string === '') {
            trigger_error($errors[1], E_USER_WARNING);
            return '';
        }     

        // Check parameter 3 [$encoding]
        $encoding = validate_encoding($encoding, 'mb_ltrim');

        /************************
         * END CHECK FOR ERRORS
         ***********************/
        
        $string = mb_convert_encoding($string, $encoding);

        //quote characters for use in a characters list
        $characters = preg_replace('!([\\\\\\-\\]\\[/^])!','\\\${1}',$characters);       
        
        return preg_replace('/^['.$characters.']+/u',"", $string);
    }
}





/**
 * If the function [ mb_rtrim ] does not exist then we create it.
 * ++ 8.4.0 ---- https://php.watch/versions/8.4/mb_trim-mb_ltrim-mb_rtrim
 * 
 * @since 1.0.5
 */
if (!function_exists('mb_rtrim'))
{
    /**  
     * Multi-byte safely strip white-spaces (or other characters) from the end of a string.  
     *
     * @param string $string The string that will be trimmed.  
     * @param string $characters Optionally, the stripped characters can also be specified using the $characters parameter. Simply list all characters that you want to be stripped.  
     * @param string|null $encoding The encoding parameter is the character encoding.  
     *
     * @return string The trimmed string.  
     */
    function mb_rtrim($string, $characters = " \f\n\r\t\v\x00\u{00A0}\u{1680}\u{2000}\u{2001}\u{2002}\u{2003}\u{2004}\u{2005}\u{2006}\u{2007}\u{2008}\u{2009}\u{200A}\u{2028}\u{2029}\u{202F}\u{205F}\u{3000}\u{0085}\u{180E}", $encoding = null)
    {
        /**
         * Array with Strings Errors for this function.
         */
        $errors = array (
            'mb_rtrim(): expects parameter 1 to be string, '.gettype($string).' given',
            'mb_rtrim(): Parameter 1 must not be empty',
        );

        /******************
         * Check for Errors
         *****************/ 
        // Check parameter 1 [$string]
        if (!is_string($string) && !is_scalar($string) && !(is_object($string) && method_exists($string, '__toString'))) {
            trigger_error($errors[0], E_USER_WARNING);
            return '';
        }

        if ($string === '') {
            trigger_error($errors[1], E_USER_WARNING);
            return '';
        }     

        // Check parameter 3 [$encoding]
        $encoding = validate_encoding($encoding, 'mb_rtrim');

        /************************
         * END CHECK FOR ERRORS
         ***********************/        
        
        //$string = mb_convert_encoding($string, $encoding);
        $string = mb_convert_encoding($string, $encoding);

        //quote charlist for use in a characterclass
        $characters = preg_replace('!([\\\\\\-\\]\\[/^])!','\\\${1}',$characters);

        return preg_replace('/['.$characters.']+$/u','',$string);  
    }
}



/**
 * If the function [ mb_trim ] does not exist then we create it.
 * ++ 8.4.0 ---- https://php.watch/versions/8.4/mb_trim-mb_ltrim-mb_rtrim
 * 
 * @since 1.0.5
 */
if (!function_exists('mb_trim'))
{
    /**  
    * Multi-byte safely strip white-spaces (or other characters) from the beginning and end of a string.  
    * 
    * @param string $string The string that will be trimmed.  
    * @param string $characters Optionally, the stripped characters can also be specified using the $characters parameter. Simply list all characters that you want to be stripped.  
    * @param string|null $encoding The encoding parameter is the character encoding.  
    *
    * @return string The trimmed string.  
    */
    
    function mb_trim($string, $characters = " \f\n\r\t\v\x00\u{00A0}\u{1680}\u{2000}\u{2001}\u{2002}\u{2003}\u{2004}\u{2005}\u{2006}\u{2007}\u{2008}\u{2009}\u{200A}\u{2028}\u{2029}\u{202F}\u{205F}\u{3000}\u{0085}\u{180E}", $encoding = null)
    {
        /**
         * Array with Strings Errors for this function.
         */
        $errors = array (
            'mb_trim(): expects parameter 1 to be string, '.gettype($string).' given',
            'mb_trim(): Parameter 1 must not be empty',
        );

        /******************
         * Check for Errors
         *****************/ 
        // Check parameter 1 [$string]
        if (!is_string($string) && !is_scalar($string) && !(is_object($string) && method_exists($string, '__toString'))) {
            trigger_error($errors[0], E_USER_WARNING);
            return '';
        }

        if ($string === '') {
            trigger_error($errors[1], E_USER_WARNING);
            return '';
        }     

        // Check parameter 2 [$encoding]
        $encoding = validate_encoding($encoding, 'mb_trim');

        /************************
         * END CHECK FOR ERRORS
         ***********************/

        //$string = mb_convert_encoding($string, $encoding);
        $string = mb_convert_encoding($string, $encoding);

        return mb_ltrim(mb_rtrim($string, $characters, $encoding), $characters, $encoding);        
    }
}    


?>