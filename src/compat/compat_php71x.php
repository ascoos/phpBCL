<?php
/**
 *
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ********************************************************************
 * @ Project ASCOOS                                                 *
 * @ Copyright (C) 2007 - 2023 AlexSoft Software.                   *
 * @ Creator: Drogidis Christos                                     *
 * @ ASCOOS CMS Site: www.ascoos.com                                *
 * @ Creator Site: www.alexsoft.gr                                  *
 * @ email: support@ascoos.com                                      *
 * @ license site: http://docs.ascoos.com/lics/ascoos/AGL.html      *
 * @ Copyrighted Commercial Software                                *
 * @ Program ASCOOS CMS Manager                                     *
 ********************************************************************
 *
 * @ Package           : ASCOOS CMS - phpBCL
 * @ Subpackage        : Core Compatibilities Manager for PHP < 7.1.0
 * @ ASCOOS Version    : Ten - 1.0.0
 * @ File Name         : /phpBCL/compat/compat_php71x.php
 * @ File No.          : ?? - $release: 1.0 - revision: 0 - build 0
 * @ Created Date      : 2023-06-26 07:00:00 UTC+3
 * @ Updated Date      : 
 * @ Author            : Drogidis Christos
 * @ Author email      : webmaster@alexsoft.gr
 * @ Author website    : www.alexsoft.gr
 *
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
