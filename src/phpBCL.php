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
 * @subpackage         : phpBCL Native Functions
 * @source             : /phpBCL/src/phpBCL.php
 * @version            : 1.1.3
 * @created            : 2024-02-20 05:40:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */




/**
 * Validate string encoding.
 *
 * @param string|null $encoding The encoding parameter is the character encoding.
 * @param string $owner Optionally, the owner function. Used for return error messages. 
 *
 * @return string The character encoding.
 * 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * @since 1.0.5
 */
function validate_encoding($encoding=null, $owner='validate_encoding') {
    // If $encoding is empty then we take the default internal encoding, otherwise we use the one given by the user.
    $encoding = (is_null($encoding)) ? $encoding = mb_internal_encoding() : (string) $encoding;

    /**
     * Array with Strings Errors for this function.
     */
    $errors = array (
        ''.$owner.'(): expects parameter 1 to be string, '.gettype($encoding).' given',
        ''.$owner.'(): Unknown encoding "'.$encoding.'"'
    );    

    if (!is_string($encoding) && !is_null($encoding)) {
        trigger_error($errors[0], E_USER_WARNING);
        return '';
    }
      
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
            trigger_error($errors[1], E_USER_WARNING);
            return '';
        }
    }

    return (string) $encoding;
}


/**
 * Quote regular expression characters.
 *
 * @param string $char The input char.
 * @return string the quoted (escaped) string.
 * 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * @since 1.0.7
 */
function alf_preg_quote($char) {
    return preg_quote($char, '/');
}
?>