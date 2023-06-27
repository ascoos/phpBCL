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
 * @ Subpackage        : Core Compatibilities Manager
 * @ ASCOOS Version    : Ten - 1.0.0
 * @ File Name         : /phpBCL/coreCompatibilities.php
 * @ File No.          : ??? - $release: 1.0 - $revision: 0 - $build 0
 * @ Created Date      : 2013-12-31 23:59:59 GMT+2
 * @ Updated Date      : 2023-06-22 07:00:00 UTC+3
 * @ Author            : Drogidis Christos
 * @ Author email      : webmaster@alexsoft.gr
 * @ Author website    : www.alexsoft.gr
 *
 */

// Run on ASCOOS CMS only. Marked as comment if you want run this script with other cms.
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");



// We take the central path of the CMS and at the same time fix the path if it is on Windows
$rootCompatPath = str_replace('/phpBCL', '',str_replace('\\', '/', dirname(__FILE__)));



/*********
 *  5.x
 ********/
//if (phpversion() < "5.6.0") require_once($rootCompatPath."/phpBCL/compat/compat_php56x.php");


/*********
 *  7.x
 ********/
if (phpversion() < "7.1.0") require_once($rootCompatPath."/phpBCL/compat/compat_php71x.php");
if (phpversion() < "7.3.0") require_once($rootCompatPath."/phpBCL/compat/compat_php73x.php");
if (phpversion() < "7.4.0") require_once($rootCompatPath."/phpBCL/compat/compat_php74x.php");


/*********
 *  8.x
 ********/
if (phpversion() < "8.0.0") require_once($rootCompatPath."/phpBCL/compat/compat_php80x.php");
if (phpversion() < "8.1.0") require_once($rootCompatPath."/phpBCL/compat/compat_php81x.php");
//if (phpversion() < "8.2.0") require_once($rootCompatPath."/phpBCL/compat/compat_php82x.php");
if (phpversion() < "8.3.0") require_once($rootCompatPath."/phpBCL/compat/compat_php83x.php");


/*************************
 * DEPRECATED OR REMOVED
 ************************/
require_once($rootCompatPath."/phpBCL/compat/compat_deprecated.php");

/*************************
 * SIMILAR CODE
 ************************/
require_once($rootCompatPath."/phpBCL/compat/compat_similar.php");

unset($rootCompatPath);
?>