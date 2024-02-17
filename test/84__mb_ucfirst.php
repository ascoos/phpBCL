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
 * @version            : **** - $release: 1.0 - $revision: 1 - $build: ****
 * @created            : 2024-02-17 07:00:00 UTC+3
 * @updated            : 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */

define('ALEXSOFT_RUN_CMS', true);

$cms_path = str_replace('/phpBCL/test', '',str_replace('\\', '/', __DIR__));
 
require_once($cms_path."/phpBCL/src/coreCompatibilities.php");

$str1 = "Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός";
$str2 = "τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός";
$str3 = "The quick brown fox jumps over the lazy dog";
$str4 = "the quick brown fox jumps over the lazy dog";
?>
<html>
<head>
    <style>
        h1 {font-size: 2em; font-weight: bold; width: 100% !important; }
        h2 {font-size: 1.5em; font-weight: bold; padding: 5px; color: white; background-color: black; width: 100% !important; margin: 4px 0;}
        h3 {font-size: 1.3em; font-weight: bold; padding: 5px; color: white; background-color: #444; width: 100% !important; margin: 4px 0;}
        h4 {font-size: 1.2em; font-weight: bold; padding: 5px; color: black; background-color: #aaa; width: 100% !important; margin: 4px 0;}
    </style>
</head>
<body>
<?php
echo '<h1>PHP VERSION: '.phpversion().'</h1>';
echo '<h2>TEST PHP 8.4 [ <b>mb_ucfirst & mb_lcfirst</b> ] </h2>';
echo '<p>GREEK [1] '.$str1.'</p>'; 
echo '<p>GREEK [2] '.$str2.'</p>'; 
echo '<p>ENGLISH [3] '.$str3.'</p>'; 
echo '<p>ENGLISH [4] '.$str4.'</p>'; 
echo '<p><br></p>'; 

echo '<h3>FOR GREEK TEXT</h3>';
echo '<p>mb_lcfirst [1] '.mb_lcfirst($str1, 'UTF-8').'</p>';
echo '<p>mb_ucfirst [2] '.mb_ucfirst($str2, 'UTF-8').'</p>';
echo '<p><br></p>'; 

echo '<h3>FOR ENGLISH TEXT: </h3>';
echo '<p>mb_lcfirst [3] '.mb_lcfirst($str3, 'UTF-8').'</p>';
echo '<p>mb_ucfirst [4] '.mb_ucfirst($str4, 'UTF-8').'</p>';
?>
</body>
</html>