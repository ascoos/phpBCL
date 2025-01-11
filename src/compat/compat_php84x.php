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
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2024, AlexSoft Software.               *
 *************************************************************************************
 *
 * @package            : ASCOOS CMS - phpBCL
 * @subpackage         : Core Compatibilities Manager for PHP < 8.4.0
 * @source             : /phpBCL/src/compat/compat_php84x.php
 * @version            : 2.0.0
 * @created            : 2024-02-14 05:40:00 UTC+3
 * @updated            : 2024-11-29 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */



 
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
 * @since 1.0.7
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

        // Check parameter 2 [$characters]
        if ($characters === "") {
            return $string;
        }


        // Check parameter 3 [$encoding]
        $encoding = validate_encoding($encoding, 'mb_ltrim');

        /************************
         * END CHECK FOR ERRORS
         ***********************/


        // On supported versions, use a pre-calculated regex for performance.
        if (PHP_VERSION_ID >= 80200 && ($encoding === null || $encoding === "UTF-8") && $characters === " \f\n\r\t\v\x00\u{00A0}\u{1680}\u{2000}\u{2001}\u{2002}\u{2003}\u{2004}\u{2005}\u{2006}\u{2007}\u{2008}\u{2009}\u{200A}\u{2028}\u{2029}\u{202F}\u{205F}\u{3000}\u{0085}\u{180E}") 
        {
            return preg_replace("/^[\s\0]+/u", '', $string);
        } 

        if ($encoding !== null && $encoding !== 'UTF-8') {
            $string = mb_convert_encoding($string, "UTF-8", $encoding);
            $characters = mb_convert_encoding($characters, "UTF-8", $encoding);
        }
    
        $charactersMap = array_map('alf_preg_quote', mb_str_split($characters));
        $regex = implode('', $charactersMap);
    
        $return = preg_replace("/^[" . $regex . "]+/u", '', $string);
    
        if ($encoding !== null && $encoding !== 'UTF-8') {
            $return = mb_convert_encoding($return, $encoding, "UTF-8");
        }
    
        return $return;
    }
}





/**
 * If the function [ mb_rtrim ] does not exist then we create it.
 * ++ 8.4.0 ---- https://php.watch/versions/8.4/mb_trim-mb_ltrim-mb_rtrim
 * 
 * @since 1.0.7
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

        // Check parameter 2 [$characters]
        if ($characters === "") {
            return $string;
        }

        // Check parameter 3 [$encoding]
        $encoding = validate_encoding($encoding, 'mb_rtrim');

        /************************
         * END CHECK FOR ERRORS
         ***********************/    

         
        // On supported versions, use a pre-calculated regex for performance.
        if (PHP_VERSION_ID >= 80200 && ($encoding === null || $encoding === "UTF-8") && $characters === " \f\n\r\t\v\x00\u{00A0}\u{1680}\u{2000}\u{2001}\u{2002}\u{2003}\u{2004}\u{2005}\u{2006}\u{2007}\u{2008}\u{2009}\u{200A}\u{2028}\u{2029}\u{202F}\u{205F}\u{3000}\u{0085}\u{180E}") {
            return preg_replace("/[\s\0]+$/uD", '', $string);
        }

        if ($encoding !== null && $encoding !== 'UTF-8') {
            $string = mb_convert_encoding($string, "UTF-8", $encoding);
            $characters = mb_convert_encoding($characters, "UTF-8", $encoding);
        }
    
        $charactersMap = array_map('alf_preg_quote', mb_str_split($characters));
        $regex = implode('', $charactersMap);
    
        $return = preg_replace("/[" . $regex . "]+$/uD", '', $string);
    
        if ($encoding !== null && $encoding !== 'UTF-8') {
            $return = mb_convert_encoding($return, $encoding, "UTF-8");
        }
    
        return $return;
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

        // Check parameter 2 [$characters]
        if ($characters === "") {
            return $string;
        }

        // Check parameter 3 [$encoding]
        $encoding = validate_encoding($encoding, 'mb_trim');

        /************************
         * END CHECK FOR ERRORS
         ***********************/

        // On supported versions, use a pre-calculated regex for performance.
        if (PHP_VERSION_ID >= 80200 && ($encoding === null || $encoding === "UTF-8") && $characters === " \f\n\r\t\v\x00\u{00A0}\u{1680}\u{2000}\u{2001}\u{2002}\u{2003}\u{2004}\u{2005}\u{2006}\u{2007}\u{2008}\u{2009}\u{200A}\u{2028}\u{2029}\u{202F}\u{205F}\u{3000}\u{0085}\u{180E}") {
            return preg_replace("/^[\s\0]+|[\s\0]+$/uD", '', $string);
        }

        if ($encoding !== null && $encoding !== 'UTF-8') {
            $string = mb_convert_encoding($string, "UTF-8", $encoding);
            $characters = mb_convert_encoding($characters, "UTF-8", $encoding);
        }
    
        $charactersMap = array_map('alf_preg_quote', mb_str_split($characters));
        $regexChars = implode('', $charactersMap);
    
        $return = preg_replace("/^[" . $regexChars . "]+|[" . $regexChars . "]+$/uD", '', $string);
    
        if ($encoding !== null && $encoding !== 'UTF-8') {
            $return = mb_convert_encoding($return, $encoding, "UTF-8");
        }
    
        return $return;    
    }
}    




/**
 * If the function [ http_clear_last_response_headers ] does not exist then we create it.
 * ++ 8.4.0 ---- https://php.watch/versions/8.4/http_get-clear_last_response_headers
 * 
 * @since 1.1.0
 */
if (!function_exists('http_clear_last_response_headers'))
{
    /**  
     * Clears the HTTP headers from the last HTTP wrapper HTTP response.
     */
    function http_clear_last_response_headers()
    {
        global $http_response_header;

        $http_response_header = null;
    }
}    


/**
 * If the function [ http_get_last_response_headers ] does not exist then we create it.
 * ++ 8.4.0 ---- https://php.watch/versions/8.4/http_get-clear_last_response_headers
 * 
 * @since 1.1.0
 */
if (!function_exists('http_get_last_response_headers'))
{
    /**  
     * Returns HTTP response headers from the last HTTP request that
     * used the HTTP wrapper. If the request failed, or if there is no
     * last HTTP request, it returns null.
     *
     * @return array|null  
     */
    function http_get_last_response_headers() 
    {
        global $http_response_header;
     
        if (is_null($http_response_header)) return null;
        return $http_response_header;
    }
}  



/**
 * If the function [ array_find ] does not exist then we create it.
 * ++ 8.4.0 ---- hhttps://php.watch/versions/8.4/array_find-array_find_key-array_any-array_all
 * 
 * @since 1.1.1
 */
if (!function_exists('array_find'))
{  
    /**
     * Returns the VALUE of the first element from $array for which the
     *  $callback returns true. Returns NULL if no matching element is
     *  found.
     *
     * @param array $array The array that should be searched.
     * @param callable $callback The callback function to call to check
     *  each element. The first parameter contains the value ($value),
     *  the second parameter contains the corresponding key ($key).
     *  If this callback returns TRUE (or a truthy value), the value
     *  ($value) is returned immediately and the callback will not be
     *  called for further elements.
     *
     * @return mixed The function returns the value of the first
     *  element for which the $callback returns TRUE. NULL, if no
     *  matching element is found. Note that the matching element value
     *  itself could be NULL as well.
    */
    function array_find(array $array, callable $callback) {
        foreach ($array as $key => $value) {
            if ($callback($value, $key)) {
                return $value;
            }
        }       
        return null;
    }
}



/**
 * If the function [ array_find_key ] does not exist then we create it.
 * ++ 8.4.0 ---- hhttps://php.watch/versions/8.4/array_find-array_find_key-array_any-array_all
 * 
 * @since 1.1.1
 */
if (!function_exists('array_find_key'))
{
    /**
     * Returns the KEY of the first element from $array for which the
     *  $callback returns TRUE. If no matching element is found the
     *  function returns NULL.
     *
     * @param array $array The array that should be searched.
     * @param callable $callback The callback function to call to check
     *  each element. The first parameter contains the value ($value),
     *  the second parameter contains the corresponding key ($key). If
     *  this function returns TRUE, the key ($key) is returned
     *  immediately and the callback will not be called for further
     *  elements.
     *
     * @return mixed The key of the first element for which the
     *  $callback returns TRUE. NULL, If no matching element is found.
    */
    function array_find_key(array $array, callable $callback) {
        foreach ($array as $key => $value) {
            if ($callback($value, $key)) {
                return $key;
            }
        }
        return null;
    }
}


/**
 * If the function [ array_all ] does not exist then we create it.
 * ++ 8.4.0 ---- hhttps://php.watch/versions/8.4/array_find-array_find_key-array_any-array_all
 * 
 * @since 1.1.1
 */
if (!function_exists('array_all'))
{
    /**
     * Checks whether the $callback returns TRUE for ALL the array
     *  elements.
     *
     * @param array $array The array that should be searched.
     * @param callable $callback The callback function to call to check
     *  each element. The first parameter contains the value ($value), the
     *  second parameter contains the corresponding key. If this function
     *  returns FALSE (or any falsy value), FALSE is returned immediately
     *  and the $callback will not be called for further elements.
     *
     * @return bool TRUE, if $callback returns TRUE for all elements.
     *  FALSE otherwise.
    */
    function array_all(array $array, callable $callback) {
        foreach ($array as $key => $value) {
            if (!$callback($value, $key)) {
                return false;
            }
        }    
        return true;
    }
}


/**
 * If the function [ array_any ] does not exist then we create it.
 * ++ 8.4.0 ---- hhttps://php.watch/versions/8.4/array_find-array_find_key-array_any-array_all
 * 
 * @since 1.1.1
 */
if (!function_exists('array_any'))
{
    /**
     * Checks whether the $callback returns TRUE for ANY of the array
     *  elements.
     *
     * @param array $array The array that should be searched.
     * @param callable $callback The callback function to call to check
     *  each element. The first parameter contains the value ($value), the
     *  second parameter contains the corresponding key ($key). If this
     *  function returns TRUE (or a truthy value), TRUE is returned
     *  immediately and the $callback will not be called for further
     *  elements.
     *
     * @return bool TRUE if there is at least one element for which
     *  $callback returns TRUE. FALSE otherwise.
     */
    function array_any(array $array, callable $callback) {
        foreach ($array as $key => $value) {
            if ($callback($value, $key)) {
                return true;
            }
        }    
        return false;
    }
}


/**
 * If the function [ grapheme_str_split ] does not exist then we create it.
 * ++ 8.4.0 ---- https://php.watch/versions/8.4/grapheme_str_split
 * 
 * @since 1.1.1
 */
if (!function_exists('grapheme_str_split'))
{
    /**
     * Splits a string into an array of individual or chunks of graphemes.
     *
     * @param string $string The string to split into individual graphemes
     *  or chunks of graphemes.
     * @param int $length If specified, each element of the returned array
     *  will be composed of multiple graphemes instead of a single
     *  graphemes.
     *
     * @return array|false
     */
    function grapheme_str_split($string, $length = 1)
    {
        /**
         * Array with Strings Errors for this function.
         */
        $errors = [
            'grapheme_str_split(): Argument #1 ($string) must not be empty',
            'grapheme_str_split(): Argument #2 ($length) must be greater than 0 and less than or equal to 1073741823.'
        ];
        
        if ($length < 0 || $length > 1073741823) {
            trigger_error($errors[1], E_USER_WARNING);
            return false;            
        }
        if ($string === '') {
            trigger_error($errors[0], E_USER_WARNING);            
            return [];
        }

        preg_match_all('/\X/u', $string, $matches);

        if (empty($matches[0])) {
            return false;
        }

        if ($length === 1) {
            return $matches[0];
        }

        $chunks = array_chunk($matches[0], $length);

        array_walk($chunks, static function(&$value) {
            $value = implode('', $value);
        });

        return (array) $chunks;
    }
}




/**
 * If the function [ bcdivmod ] does not exist then we create it.
 * ++ 8.4.0 ---- https://php.watch/versions/8.4/bcdivmod
 * 
 * @since 1.1.2
 */
if (!function_exists('bcdivmod'))
{
    /**
     * Returns an array with the quotient (whole values) as a string, and the remainder as a string 
     * containing $scale number of decimal values.
     * 
     * @param string $num1 Dividend, as a string.
     * @param string $num2 Divisor, as a string.
     * @param int|null $scale Number of digits after the decimal place in the remainder.
     *      If omitted or null, it will default to the scale set globally with the bcscale() function, 
     *      or fallback to bcmath.scale INI value (default to 0) if this has not been set.
     *
     * @return array
     */
    function bcdivmod($num1, $num2, $scale = null)
    {
        /**
         * Array with Strings Errors for this function.
         */
        $errors = [
            'bcdivmod(): Argument #1 ($num1) is not well-formed',
            'bcdivmod(): Argument #2 ($num2) is not well-formed',
            'bcdivmod(): Division by zero'
        ];

        if (!is_numeric($num1)) {
            trigger_error($errors[0], E_USER_WARNING);
            return [];   
        }

        if (!is_numeric($num2)) {
            trigger_error($errors[1], E_USER_WARNING);
            return [];             
        }

        if ($num2 === '0') {
            trigger_error($errors[2], E_USER_WARNING);
            return [];  
        }

        if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
            return [
                bcdiv($num1, $num2, 0),
                bcmod($num1, $num2, $scale)
            ];
        } else {
            return [
                bcdiv($num1, $num2, 0),
                bcmod($num1, $num2)
            ];            
        }
    }
}





/**
 * If the function [ intltz_get_iana_id ] does not exist then we create it.
 * ++ 8.4.0 ---- https://php.watch/versions/8.4/bcdivmod
 * 
 * @since 1.1.4
 */
if (!function_exists('intltz_get_iana_id'))
{
    /**
     * Get the IANA identifier from a given timezone
     * 
     * @param string $timezoneId
     * @return string|false
     */
    function intltz_get_iana_id($timezoneId) 
    {  
        $return = IntlTimeZone::getCanonicalID($timezoneId);

        if (is_bool($return))
        {
            return $return = ($return === true) ? 'True' : 'False';
        } 
        
        switch ($return) 
        {
            case 'Europe/Nicosia': $return = 'Asia/Nicosia'; 
            //default: $return = $timezoneId;
        }
    
        return $return;
    }
}

?>