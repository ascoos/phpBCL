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
 * @subpackage         : Example mb_trim, mb_ltrim, mb_rtrim Function
 * @source             : /phpBCL/test/84__mb_trim.php
 * @version            : 1.1.3
 * @created            : 2024-02-20 03:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * 
 * @since 1.0.7
 */


  
 require_once("../autoload.php");

// Example usage:
$characters = " \f\n\r\t\v\x00\u{00A0}\u{1680}\u{2000}\u{2001}\u{2002}\u{2003}\u{2004}\u{2005}\u{2006}\u{2007}\u{2008}\u{2009}\u{200A}\u{2028}\u{2029}\u{202F}\u{205F}\u{3000}\u{0085}\u{180E}";

// TEST STRING WITH MULTIBYTE CHARS
$str = "\n \f \v \t \u{2006} Good morning world! \t \u{2000} \u{2001}\u{2002} \f";

// EXECUTE mb_ltrim, mb_rtrim, mb_trim
$trimmedLeft = mb_ltrim($str, $characters, 'UTF-8');
$trimmedRight = mb_rtrim($str, $characters, 'UTF-8');
$trimmedBoth = mb_trim($str, $characters, 'UTF-8' );
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
echo '<h2>TEST PHP 8.4 [ <b>mb_ltrim & mb_rtrim & mb_trim</b> ] </h2>';
echo '<p>ORIGINAL STRING : ['.$str.']</p>'; 
echo '<p><br></p>'; 

echo '<p>mb_ltrim [Trimmed Left]....: ['.$trimmedLeft.']</p>';
echo '<p>mb_rtrim [Trimmed Right]...: ['.$trimmedRight.']</p>';
echo '<p>mb_trim  [Trimmed Both]....: ['.$trimmedBoth.']</p>';
?>
</body>
</html>