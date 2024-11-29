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
 * @subpackage         : Core Compatibilities Manager for PHP < 8.5.0
 * @source             : /phpBCL/src/compat/compat_php85x.php
 * @version            : 2.0.0
 * @created            : 2024-11-29 07:40:00 UTC+3
 * @updated            : 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * If the function [ curl_multi_get_handles ] does not exist then we create it.
 * ++ 8.5.0 ---- https://php.watch/versions/8.5/curl_multi_get_handles
 * 
 * @since 2.0.0
 */
if (!defined('PHP_BUILD_DATE')) {
    function php_build_date() {
        ob_start();
        phpinfo(INFO_GENERAL);
        $info = ob_get_clean();
            
        preg_match('@Build Date(?:( => | </td><td class="v">))(?<buildtime>[A-Za-z]{3} (?: \d|\d\d) \d{4} \d{2}:\d{2}:\d{2})@', $info, $matches);
            
         return (string) $matches['buildtime']; // Sep 16 2025 10:44:26
    }

    define('PHP_BUILD_DATE', php_build_date());
} 







?>