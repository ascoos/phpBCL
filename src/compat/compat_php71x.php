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
 * @subpackage         : Core Compatibilities Manager for PHP < 7.1.0
 * @source             : /phpBCL/src/compat/compat_php71x.php
 * @version            : **** - $release: 1.0 - $revision: 2 - $build: ****
 * @created            : 2023-06-26 07:00:00 UTC+3
 * @updated            : 2023-07-07 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


// Run on ASCOOS CMS only. Marked as comment if you want run this script with other cms.
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");


/**
 * If the function [ is_iterable ] does not exist then we create it.
 * ++ 7.1.0  ---- https://www.php.net/manual/en/function.is-iterable.php
 */
if ( !function_exists('is_iterable'))
{
    /**
     * Verify that the contents of a variable is an iterable value 
     * 
     * Verify that the contents of a variable is accepted by the iterable pseudo-type, i.e. 
     * that it is either an array or an object implementing Traversable
     * 
     * @link https://www.php.net/manual/en/function.is-iterable.php
     * 
     * @param mixed $value    The value to check
     * 
     * @return bool    Returns true if value is iterable, false otherwise. 
     */
    function  is_iterable(mixed $value): bool
    {
        return is_array( $value ) || ( is_object( $value ) && ( $value instanceof \Traversable || $value instanceof ArrayIterator) );
    }

}

?>
