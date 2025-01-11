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
 * @subpackage         : Example mb_convert_case Function
 * @source             : /phpBCL/test/mb_convert_case.php
 * @version            : 1.1.3
 * @created            : 2023-07-07 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */

  
require_once("../autoload.php");

 
$str = "Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός";
$str2 = "The quick brown fox jumps over the lazy dog";

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
echo '<h2>TEST [ <b>mb_convert_case</b> ]</h2>';
echo '<h3>MODES</h3>';
echo '<div>[1] MB_CASE_UPPER<br>[2] MB_CASE_LOWER<br>[3] MB_CASE_TITLE<br>[4] MB_CASE_FOLD<br>[5] MB_CASE_UPPER_SIMPLE<br>[6] MB_CASE_LOWER_SIMPLE<br>[7] MB_CASE_TITLE_SIMPLE<br>[8] MB_CASE_FOLD_SIMPLE</div>';

echo '<h4>GREEK</h4><br>';
echo '<div><b>For Greek Text: '.$str.'</b></div><div>';
echo '<p>[1] '.mb_convert_case($str, MB_CASE_UPPER, 'UTF-8').'</p>';
echo '<p>[2] '.mb_convert_case($str, MB_CASE_LOWER, 'UTF-8').'</p>';
echo '<p>[3] '.mb_convert_case($str, MB_CASE_TITLE, 'UTF-8').'</p>';
echo '<p>[4] '.mb_convert_case($str, MB_CASE_FOLD, 'UTF-8').'</p>';
echo '<p>[5] '.mb_convert_case($str, MB_CASE_UPPER_SIMPLE, 'UTF-8').'</p>';
echo '<p>[6] '.mb_convert_case($str, MB_CASE_LOWER_SIMPLE, 'UTF-8').'</p>';
echo '<p>[7] '.mb_convert_case($str, MB_CASE_TITLE_SIMPLE, 'UTF-8').'</p>';
echo '<p>[8] '.mb_convert_case($str, MB_CASE_FOLD_SIMPLE, 'UTF-8').'</p></div>';

echo '<h4>ENGLISH</h4><br>';
echo '<div><b>For Greek Text in English: '.$str2.'</b></div><div>';
echo '<p>[1] '.mb_convert_case($str2, MB_CASE_UPPER, 'UTF-8').'</p>';
echo '<p>[2] '.mb_convert_case($str2, MB_CASE_LOWER, 'UTF-8').'</p>';
echo '<p>[3] '.mb_convert_case($str2, MB_CASE_TITLE, 'UTF-8').'</p>';
echo '<p>[4] '.mb_convert_case($str2, MB_CASE_FOLD, 'UTF-8').'</p>';
echo '<p>[5] '.mb_convert_case($str2, MB_CASE_UPPER_SIMPLE, 'UTF-8').'</p>';
echo '<p>[6] '.mb_convert_case($str2, MB_CASE_LOWER_SIMPLE, 'UTF-8').'</p>';
echo '<p>[7] '.mb_convert_case($str2, MB_CASE_TITLE_SIMPLE, 'UTF-8').'</p>';
echo '<p>[8] '.mb_convert_case($str2, MB_CASE_FOLD_SIMPLE, 'UTF-8').'</p></div>';

echo '<h4>GREEK with use [ <b>alf_mb_convert_case</b> ] function</h4><div>';
echo '<p>[1] '.alf_mb_convert_case($str, MB_CASE_UPPER, 'UTF-8').'</p>';
echo '<p>[2] '.alf_mb_convert_case($str, MB_CASE_LOWER, 'UTF-8').'</p>';
echo '<p>[3] '.alf_mb_convert_case($str, MB_CASE_TITLE, 'UTF-8').'</p>';
echo '<p>[4] '.alf_mb_convert_case($str, MB_CASE_FOLD, 'UTF-8').'</p>';
echo '<p>[5] '.alf_mb_convert_case($str, MB_CASE_UPPER_SIMPLE, 'UTF-8').'</p>';
echo '<p>[6] '.alf_mb_convert_case($str, MB_CASE_LOWER_SIMPLE, 'UTF-8').'</p>';
echo '<p>[7] '.alf_mb_convert_case($str, MB_CASE_TITLE_SIMPLE, 'UTF-8').'</p>';
echo '<p>[8] '.alf_mb_convert_case($str, MB_CASE_FOLD_SIMPLE, 'UTF-8').'</p></div>';
?>
</body>
</html>