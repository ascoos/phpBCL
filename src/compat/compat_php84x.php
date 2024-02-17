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
 * @updated            : 2024-02-16 05:40:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */

 
// Run on ASCOOS CMS only. Marked as comment if you want run this script with other cms.
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");


/**
 * If the function [ mb_ucfirst ] does not exist then we create it.
 * ++ 8.4.0 ---- https://wiki.php.net/rfc/mb_ucfirst
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
        // If $encoding is empty then we take the default internal encoding, otherwise we use the one given by the user.
        $encoding = (is_null($encoding)) ? $encoding = mb_internal_encoding() : (string) $encoding;

        /**
         * 
         * Array with Strings Errors for this function.
         */
        $errors = array (
            'mb_ucfirst(): expects parameter 1 to be string, '.gettype($string).' given',
            'mb_ucfirst(): Parameter 1 must not be empty',
            'mb_ucfirst(): expects parameter 2 to be string, '.gettype($encoding).' given',          
            'mb_ucfirst(): Unknown encoding "'.$encoding.'"'            
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
        if (!is_string($encoding) && !is_null($encoding)) return $errors[2]; 
      
        if (!in_array($encoding, mb_list_encodings(), true)) {
            static $aliases;
            if ($aliases === null) {
                $aliases = [];
          
                foreach (mb_list_encodings() as $encoding) {
                    $encoding_aliases = mb_encoding_aliases($encoding);
            
                    if ($encoding_aliases) {
                        foreach ($encoding_aliases as $alias) {
                            $aliases[] = $alias;
                        }
                    }
                }
            }
        
            if (!in_array($encoding, $aliases, true)) {
                trigger_error($errors[3], E_USER_WARNING);
                return '';
            }
        }
        /************************
         * END CHECK FOR ERRORS
         ***********************/


        return mb_convert_case(mb_substr($string, 0, 1, $encoding), MB_CASE_TITLE, $encoding) . mb_substr($string, 1, null, $encoding);
    }
}



/**
 * If the function [ mb_lcfirst ] does not exist then we create it.
 * ++ 8.4.0 ---- https://wiki.php.net/rfc/mb_ucfirst
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
        // If $encoding is empty then we take the default internal encoding, otherwise we use the one given by the user.
        $encoding = (is_null($encoding)) ? $encoding = mb_internal_encoding() : (string) $encoding;

        /**
         * 
         * Array with Strings Errors for this function.
         */
        $errors = array (
            'mb_lcfirst(): expects parameter 1 to be string, '.gettype($string).' given',
            'mb_lcfirst(): Parameter 1 must not be empty',
            'mb_lcfirst(): expects parameter 2 to be string, '.gettype($encoding).' given',          
            'mb_lcfirst(): Unknown encoding "'.$encoding.'"'            
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
        if (!is_string($encoding) && !is_null($encoding)) return $errors[2]; 
      
        if (!in_array($encoding, mb_list_encodings(), true)) {
            static $aliases;
            if ($aliases === null) {
                $aliases = [];
          
                foreach (mb_list_encodings() as $encoding) {
                    $encoding_aliases = mb_encoding_aliases($encoding);
            
                    if ($encoding_aliases) {
                        foreach ($encoding_aliases as $alias) {
                            $aliases[] = $alias;
                        }
                    }
                }
            }
        
            if (!in_array($encoding, $aliases, true)) {
                trigger_error($errors[3], E_USER_WARNING);
                return '';
            }
        }
        /************************
         * END CHECK FOR ERRORS
         ***********************/



        return mb_strtolower(mb_substr($string, 0, 1, $encoding), $encoding) . mb_substr($string, 1, null, $encoding);
    }
}



?>