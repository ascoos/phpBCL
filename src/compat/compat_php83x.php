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
 * @subpackage         : Core Compatibilities Manager for PHP < 8.3.0
 * @source             : /phpBCL/src/compat/compat_php83x.php
 * @version            : 1.1.3
 * @created            : 2023-06-22 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */

 

/**
 * If the function [ stream_context_set_options ] does not exist then we create it.
 * ++ 8.3.0 ---- https://www.php.net/manual/en/function.mb-str-pad.php
 */
if (!function_exists('stream_context_set_options'))
{  
    /**
     * Sets options on the specified context.
     * 
     * @link https://www.php.net/manual/function.stream-context-set-options.php
     * 
     * @param resource $context: The stream or context resource to apply the options to.
     * @param array $options: The options to set for context. 
     *      Note : options must be an associative array of associative arrays 
     *      in the format $array['wrapper']['option'] = $value. 
     *      Refer to context options and parameters for a listing of stream options.
     * @return bool Returns true on success or false on failure.
     * 
     * @since 1.0.9
     */
    function stream_context_set_options($context, $options)
    {
        return stream_context_set_option($context, $options); // Second syntax of function 
    }
}



/**
 * If the function [ json_validate ] does not exist then we create it.
 * ++ 8.3.0 ---- https://www.php.net/manual/en/function.json-validate
 */
if (!function_exists('json_validate'))
{
  /**
   * 
   * DESCRIPT     : Validate an string if contains a valid json. 
   * 
   * @link  https://www.php.net/manual/en/function.json-validate
   * 
   * @param  string $json      The json string being analyzed. This function only works with UTF-8 encoded strings. 
   *                            Note:
   *                            PHP implements a superset of JSON as specified in the original » RFC 7159. 
   * 
   * @param  int    $depth     Maximum nesting depth of the structure being decoded. 
   * 
   * @param  int    $flags     Bitmask of JSON_INVALID_UTF8_IGNORE. The behavior of this constant is described on the JSON constants page. 
   * 
   * @return bool   Returns true if the string passed contains a valid json, otherwise returns false. 
   * 
   */
    function json_validate($json, $depth = 512, $flags = 0) {
        $errors = array(
            'json_validate(): Argument #3 ($flags) must be a valid flag (allowed flags: JSON_INVALID_UTF8_IGNORE)',
            'json_validate(): Argument #2 ($depth) must be greater than 0'
        );

        if (is_string($json) && $json !== '') {
            if ($flags !== 0 && $flags !== \JSON_INVALID_UTF8_IGNORE) {
                trigger_error($errors[0], E_USER_WARNING);  
                // throw new ValueError('json_validate(): Argument #3 ($flags) must be a valid flag (allowed flags: JSON_INVALID_UTF8_IGNORE)');  
            }  
              
            if ($depth <= 0 ) { 
                trigger_error($errors[1], E_USER_WARNING);   
                // throw new ValueError('json_validate(): Argument #2 ($depth) must be greater than 0');  
            }
            
            @json_decode($json, null, $depth, $flags);
            if (json_last_error() === JSON_ERROR_NONE) return true;
        }
        return false;
    }
}



/**
 * If the function [ mb_str_pad ] does not exist then we create it.
 * ++ 8.3.0 ---- https://www.php.net/manual/en/function.mb-str-pad.php
 */
if (!function_exists('mb_str_pad'))
{    
    /**
     * The str_pad() function lacks multibyte character support, causing issues when working with languages 
     * that utilize multibyte encodings like UTF-8. This RFC proposes the addition of such a function to PHP, 
     * which we will call mb_str_pad(). 
     * 
     * @link https://www.php.net/manual/en/function.mb-str-pad.php
     * 
     * @param string $string            The input string.
     * 
     * @param int $length               If the value of length is negative, less than, or equal to the length of the input string, 
     *                                  no padding takes place, and string will be returned. 
     * 
     * @param string $pad_string        The pad_string may be truncated if the required number of padding characters 
     *                                  can't be evenly divided by the pad_string's length. 
     * 
     * @param int $pad_type             Optional argument pad_type can be STR_PAD_RIGHT, STR_PAD_LEFT, or STR_PAD_BOTH. 
     *                                  If pad_type is not specified it is assumed to be STR_PAD_RIGHT. 
     * 
     * @param string|null $encoding     must be a valid and supported character encoding, if provided. Otherwise it will output 
     *                                  a value error just like the other mbstring functions do with an invalid encoding. 
     *                                  You'll find this error condition in many mbstring functions.
     * 
     * @return  string  
     */
    function mb_str_pad($string, $length, $pad_string = " ", $pad_type = STR_PAD_RIGHT, $encoding = null)
    //function mb_str_pad(string $string, int $length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT, ?string $encoding = null): string
    {
        // If $encoding is empty then we take the default internal encoding, otherwise we use the one given by the user.
        $encoding = (is_null($encoding)) ? $encoding = mb_internal_encoding() : (string) $encoding;

        $len = mb_strlen($string, $encoding);
        $len2 = mb_strlen($pad_string, $encoding);
        $min_length = $len + (($pad_type == STR_PAD_BOTH) ? ceil($len2 / 2) : $len2);    


        /**
         * 
         */
        $types = array(STR_PAD_LEFT, STR_PAD_RIGHT, STR_PAD_BOTH);


        /**
         * Array with Strings Errors for this function.
         */
        $errors = array (
            'mb_str_pad(): expects parameter 1 to be string, '.gettype($string).' given',
            'mb_str_pad(): The length of string is greater than the length specified in parameter 2. Increase the size of parameter 2 to >= '.$min_length,
            'mb_str_pad(): expects parameter 2 to be int, '.gettype($length).' given',
            'mb_str_pad(): expects parameter 2 to be int >= '.$min_length,
            'mb_str_pad(): expects parameter 3 to be string, '.gettype($pad_string).' given',
            'mb_str_pad(): Parameter 3 must not be empty',
            "mb_str_pad(): expects parameter 4 one of the following int constants: STR_PAD_LEFT, STR_PAD_RIGHT, STR_PAD_BOTH",  
            'mb_str_pad(): expects parameter 5 to be string, '.gettype($encoding).' given',          
            'mb_str_pad(): Unknown encoding "'.$encoding.'"'            
        );


        /******************
         * Check for Errors
         *****************/ 
        // Check parameter 1 [$string]
        if (!is_string($string) && !is_scalar($string) && !(is_object($string) && method_exists($string, '__toString'))) {
            trigger_error($errors[0], E_USER_WARNING);
            return '';
        }

        if ($len >= $length) {            
            trigger_error($errors[1], E_USER_WARNING);
            return '';
        }

        // Check parameter 2 [$length]
        if (!is_null($length) && !is_int($length)) {
            trigger_error($errors[2], E_USER_WARNING);
            return '';
        }
    
        //if (null === $length) $length = (int) $min_length;

        $length = (int) $length;
        if ($min_length > $length) {
            trigger_error($errors[3], E_USER_WARNING);
            return '';
        }

        // Check parameter 3 [$pad_string]
        if (!is_string($string)) {
            trigger_error($errors[4], E_USER_WARNING);
            return '';
        }
        if ($pad_string === '') {
            trigger_error($errors[5], E_USER_WARNING);
            return '';
        }

        // Check parameter 4 [$pad_type]
        if (!in_array($pad_type, $types, true)) {        
            return $errors[6];
        }         

        // Check parameter 5 [$encoding]
        if (!is_string($encoding) && !is_null($encoding)) return $errors[7]; 
      
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
                trigger_error($errors[8], E_USER_WARNING);
                return '';
            }
        }
        /************************
         * END CHECK FOR ERRORS
         ***********************/
    
        //
        $pad_before = ($pad_type == STR_PAD_BOTH) || ($pad_type == STR_PAD_LEFT);
        //
        $pad_after = ($pad_type == STR_PAD_BOTH) || ($pad_type == STR_PAD_RIGHT);
        
        //
        $length -= $len;


        $targetLen = $pad_before && $pad_after ? $length / 2 : $length;
        $strToRepeatLen = mb_strlen($pad_string, $encoding);
        $repeatTimes = ceil($targetLen / $strToRepeatLen);
        $repeatedString = str_repeat($pad_string, max(0, $repeatTimes)); // safe if used with valid utf-8 strings
        $before = $pad_before ? mb_substr($repeatedString, 0, floor($targetLen), $encoding) : '';
        $after = $pad_after ? mb_substr($repeatedString, 0, ceil($targetLen), $encoding) : '';
        return $before . $string . $after;
    }
}

?>