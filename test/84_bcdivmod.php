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
 * @subpackage         : Example bcdivmod Function
 * @source             : /phpBCL/test/84_bcdivmod.php
 * @version            : 1.1.2
 * @created            : 2024-10-04 07:00:00 UTC+3
 * @updated            : 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * 
 * @since 5.6.40
 */

 define('ALEXSOFT_RUN_CMS', true);

 $cms_path = str_replace('/phpBCL/test', '',str_replace('\\', '/', __DIR__));
  
 require_once($cms_path."/phpBCL/src/coreCompatibilities.php");

print_r(bcdivmod("10", "10"));
// ["1", "0"]

print_r(bcdivmod("10", "100"));
// ["0", "10"]

// Using default bcmath.scale INI value = 0
print_r(bcdivmod("8957", "5.43242")); 
// ["1648", "4"]

// Setting scale value
print_r(bcdivmod("8957", "5.43242", 10)); 
// ["1648", "4.3718400000"]

print_r(bcdivmod("8957.5454312", "5.43242", 10));
// ["1648", "4.9172712000"]

print_r(bcdivmod("0", 42));
// ["0", "0"]
?>