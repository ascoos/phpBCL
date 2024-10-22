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
 * @subpackage         : Example array_all Function
 * @source             : /phpBCL/test/84_array_all.php
 * @version            : 1.1.3
 * @created            : 2024-10-04 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * 
 * @since 7.4
 */


require_once("../autoload.php");


// Since PHP >= 7.4
if (version_compare(PHP_VERSION, '7.4.0', '>=')) {
   
   echo array_all(['foo@example.com', 'bar@example.com', 'baz@example.com'], fn($value) => filter_var($value, FILTER_VALIDATE_EMAIL),).'<br>'; // true
    echo array_all(['foo@example.com', 'bar@example.com', 'baz'], fn($value) => filter_var($value, FILTER_VALIDATE_EMAIL),).'<br>'; // false
    echo array_all([1 => '', 2 => '', 3 => ''], fn($value, $key) => is_numeric($key),); // true
} else echo "Sorry!!!  You running PHP < 7.4.0";

?>