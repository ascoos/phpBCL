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
 * @subpackage         : Example mb_ucfirst Function
 * @source             : /phpBCL/test/84_mb_ucfirst.php
 * @version            : 1.1.3
 * @created            : 2024-02-17 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * 
 * @since 5.6.40
 */


require_once("../autoload.php");

$str1 = "The quick brown fox jumps over the lazy dog";
$str2 = "the quick brown fox jumps over the lazy dog";


// EXECUTE mb_ucfirst, mb_lcfirst
$lowercaseFirst = mb_lcfirst($str1, 'UTF-8');
$uppercaseFirst = mb_ucfirst($str2, 'UTF-8');
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
echo '<h2>TEST PHP 8.4 [ <b>mb_ucfirst & mb_lcfirst</b> ] </h2>';
echo '<p>TEXT [1] '.$str1.'</p>'; 
echo '<p>TEXT [2] '.$str2.'</p>'; 
echo '<p><br></p>'; 

echo '<p><b>mb_lcfirst</b> [FROM TEXT 1] '.$lowercaseFirst.'</p>';
echo '<p><b>mb_ucfirst</b> [FROM TEXT 2] '.$uppercaseFirst.'</p>';
echo '<p><br></p>'; 
?>
</body>
</html>