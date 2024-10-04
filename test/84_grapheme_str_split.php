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
 * @subpackage         : Example grapheme_str_split Function
 * @source             : /phpBCL/test/84_grapheme_str_split.php
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

 print_r(grapheme_str_split("PHP"));
 // ["P", "H", "P"]
 
 print_r(grapheme_str_split("你好"));
 // ["你", "好"]
 
 print_r(grapheme_str_split("你好", 4));
 // ["你好"]
 
 print_r(grapheme_str_split("สวัสดี"));
 // ["ส", "วั", "ส", "ดี"]
 
 print_r(grapheme_str_split("අයේෂ්"));
 // ["අ", "යේ", "ෂ්"]
 
 print_r(grapheme_str_split("👭🏻👰🏿‍♂️"));
 // ["👭🏻", "👰🏿‍♂️"]
?>