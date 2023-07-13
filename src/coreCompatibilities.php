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
 * @subpackage         : Core Class - Compatibilities Main Handler file
 * @source             : /phpBCL/coreCompatibilities.php
 * @version            : **** - $release: 1.0 - $revision: 2 - $build: ****
 * @created            : 2013-12-31 23:59:59 GMT+2
 * @updated            : 2023-07-07 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */

// Run on ASCOOS CMS only. Marked as comment if you want run this script with other cms.
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");


/*********
 *  4.x
 ********/
if (phpversion() < "4.3.0") require_once($cms_path."/phpBCL/src/compat/compat_php43x.php");


/*********
 *  5.x
 ********/
if (phpversion() < "5.5.0") require_once($cms_path."/phpBCL/src/compat/compat_php55x.php");



/*********
 *  7.x
 ********/
//if (phpversion() < "7.0.0") require_once($cms_path."/phpBCL/src/compat/compat_php70x.php");

if (phpversion() < "7.1.0") require_once($cms_path."/phpBCL/src/compat/compat_php71x.php");
if (phpversion() < "7.3.0") require_once($cms_path."/phpBCL/src/compat/compat_php73x.php");
if (phpversion() < "7.4.0") require_once($cms_path."/phpBCL/src/compat/compat_php74x.php");


/*********
 *  8.x
 ********/
if (phpversion() < "8.0.0") require_once($cms_path."/phpBCL/src/compat/compat_php80x.php");
if (phpversion() < "8.1.0") require_once($cms_path."/phpBCL/src/compat/compat_php81x.php");

if (phpversion() < "8.2.0") require_once($cms_path."/phpBCL/src/compat/compat_php82x.php");
if (phpversion() < "8.3.0") require_once($cms_path."/phpBCL/src/compat/compat_php83x.php");


/*************************
 * DEPRECATED OR REMOVED
 ************************/
require_once($cms_path."/phpBCL/src/compat/compat_deprecated.php");


/*******************************
 * SIMILAR CODE -- COMING SOON
 ******************************/
require_once($cms_path."/phpBCL/src/compat/compat_similar.php");

//unset($cms_path);
?>