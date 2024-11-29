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
 * @subpackage         : Example PHP_BUILD_DATE Constant
 * @source             : /phpBCL/test/85_php_build_date.php
 * @version            : 2.0.0
 * @created            : 2024-11-29 07:00:00 UTC+3
 * @updated            : 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * 
 * @since 2.0.0
 * @since PHP 5.6.40
 */

require_once("../autoload.php");

$dt = DateTimeImmutable::createFromFormat('M j Y H:i:s', PHP_BUILD_DATE);

$dt1 = $dt->format('U')."<br>"; // Unix timestamp, e.g. "1758019466"
$dt2 = $dt->format('Y-M-d')."<br>"; // "2025-Sep-16"
?>
<html>
<head>
    <style>
        h1 {font-size: 2em; font-weight: bold; width: 100% !important; }
        h2 {font-size: 1.5em; font-weight: bold; padding: 5px; color: white; background-color: black; width: 100% !important; margin: 4px 0;}
    </style>
</head>
<body>
<?php
echo '<h1>PHP VERSION: '.phpversion().'</h1>';
echo '<h2>TEST PHP 8.5 [ <b>PHP_BUILD_DATE</b> ] </h2>';
echo '<p><br></p>'; 

echo '<p><b>PHP_BUILD_DATE [Unix timestamp (U)]....:</b> '.$dt1.'</p>';
echo '<p><b>PHP_BUILD_DATE [Date (Y-M-d)]..........:</b> '.$dt2.'</p>';

?>
</body>
</html>