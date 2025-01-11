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
 * @version            : 1.1.4
 * @created            : 2024-10-04 07:00:00 UTC+3
 * @updated            : 2024-11-12 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * 
 * @since 5.6.40
 */


require_once("../autoload.php");
 

function ArrayToString($array)
{
    return '["'.implode('", "',$array).'"]';
}

$gss1 = ArrayToString(grapheme_str_split("PHP"));
 // ["P", "H", "P"]
 
 $gss2 = ArrayToString(grapheme_str_split("你好"));
 // ["你", "好"]
 
 $gss3 = ArrayToString(grapheme_str_split("你好", 4));
 // ["你好"]
 
 $gss4 = ArrayToString(grapheme_str_split("สวัสดี"));
 // ["ส", "วั", "ส", "ดี"]
 
 $gss5 = ArrayToString(grapheme_str_split("අයේෂ්"));
 // ["අ", "යේ", "ෂ්"]
 
 $gss6 = ArrayToString(grapheme_str_split("👭🏻👰🏿‍♂️"));
 // ["👭🏻", "👰🏿‍♂️"]

 $gss7 = ArrayToString(grapheme_str_split("👭🏻👰🏿‍♂️", 2));
 // ["👭🏻", "👰🏿‍♂️"]
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
echo '<h2>TEST PHP 8.4 [ <b>grapheme_str_split</b> ] </h2>';
echo '<p><br></p>'; 
echo '<p><b>grapheme_str_split("PHP")....:</b> '.$gss1.'</p>';
echo '<p><b>grapheme_str_split("你好")....:</b> '.$gss2.'</p>';
echo '<p><b>grapheme_str_split("你好", 4)....:</b> '.$gss3.'</p>';
echo '<p><b>grapheme_str_split("สวัสดี")....:</b> '.$gss4.'</p>';
echo '<p><b>grapheme_str_split("අයේෂ්")....:</b> '.$gss5.'</p>';
echo '<p><b>grapheme_str_split("👭🏻👰🏿‍♂️")....:</b> '.$gss6.'</p>';
echo '<p><b>grapheme_str_split("👭🏻👰🏿‍♂️",2)....:</b> '.$gss7.'</p>';
?>
</body>
</html>
