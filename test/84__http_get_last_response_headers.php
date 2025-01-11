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
 * @subpackage         : Example http_get_last_response_headers & http_clear_last_response_headers Functions
 * @source             : /phpBCL/test/84__http_get_last_response_headers.php
 * @version            : 1.1.3
 * @created            : 2024-03-20 03:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * 
 * @since 1.1.0
 */


 
 require_once("../autoload.php");


var_dump(http_get_last_response_headers()); // RETURN NULL
http_clear_last_response_headers();
echo '<br>';
var_dump($http_response_header); // RETURN NULL
echo '<br><br>';


@file_get_contents('http://www.phpclasses.org', true);
var_dump(http_get_last_response_headers()); // RETURN ['HTTP/1.1 200 OK'....] 
echo '<br><br>';
http_clear_last_response_headers();
var_dump($http_response_header); // RETURN NULL
?>