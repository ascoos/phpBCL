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
 * @subpackage         : Core Compatibilities Manager for PHP < 7.0.0
 * @source             : /phpBCL/src/compat/compat_php70x.php
 * @version            : 1.1.3
 * @created            : 2024-02-28 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * If the function [ intdiv ] does not exist then we create it.
 * ++ 7.0.0  ---- https://www.php.net/manual/function.intdiv.php
 */
if ( !function_exists('intdiv'))
{
    /**
     * Integer division
     * 
     * Returns the integer quotient of the division of num1 by num2.
     * 
     * @link https://www.php.net/manual/function.intdiv.php
     * 
     * @param int $num1 : Number to be divided.
     * @param int $num2 : Number which divides the num1.
     * @return int The integer quotient of the division of num1 by num2.
     */
    function  intdiv($num1, $num2)    
    {
        return @( (int) $num1 / (int) $num2);
    }

}

?>
