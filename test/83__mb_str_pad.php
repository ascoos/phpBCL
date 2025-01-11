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
 * @subpackage         : Example mb_str_pad Function
 * @source             : /phpBCL/test/mb_str_pad.php
 * @version            : 1.1.3
 * @created            : 2023-07-07 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


 
 require_once("../autoload.php");


 
// This will pad such that the string will become 10 bytes long.
var_dump(str_pad('Français', 10, '_', STR_PAD_RIGHT));   // BAD: string(10) "Français_"
var_dump(str_pad('Français', 10, '_', STR_PAD_LEFT));    // BAD: string(10) "_Français"
var_dump(str_pad('Français', 10, '_', STR_PAD_BOTH));    // BAD: string(10) "Français_" 

// This will pad such that the string will become 10 characters long, and in this case 11 bytes.
var_dump(mb_str_pad('Français', 10, '_', STR_PAD_RIGHT));// GOOD: string(11) "Français__"
var_dump(mb_str_pad('Français', 10, '_', STR_PAD_LEFT)); // GOOD: string(11) "__Français"
var_dump(mb_str_pad('Français', 10, '_', STR_PAD_BOTH)); // GOOD: string(11) "_Français_"



var_dump(str_pad('Δεν μιλάω ελληνικά.', 21, '_', STR_PAD_RIGHT));    // BAD: string(35) "Δεν μιλάω ελληνικά."
var_dump(str_pad('Δεν μιλάω ελληνικά.', 21, '_', STR_PAD_LEFT));     // BAD: string(35) "Δεν μιλάω ελληνικά."
var_dump(str_pad('Δεν μιλάω ελληνικά.', 21, '_', STR_PAD_BOTH));     // BAD: string(35) "Δεν μιλάω ελληνικά." 

var_dump(mb_str_pad('Δεν μιλάω ελληνικά.', 4, '_', STR_PAD_RIGHT)); // ERROR: string(0) "" Return TriggerError
var_dump(mb_str_pad('Δεν μιλάω ελληνικά.', 21, '_', STR_PAD_RIGHT)); // GOOD: string(37) "Δεν μιλάω ελληνικά.__"
var_dump(mb_str_pad('Δεν μιλάω ελληνικά.', 21, '_', STR_PAD_LEFT));  // GOOD: string(37) "__Δεν μιλάω ελληνικά."
var_dump(mb_str_pad('Δεν μιλάω ελληνικά.', 21, '_', STR_PAD_BOTH));  // GOOD: string(37) "_Δεν μιλάω ελληνικά._"


var_dump(str_pad('▶▶', 6, '❤❓❇', STR_PAD_RIGHT));    // BAD: string(6) "▶▶"
var_dump(str_pad('▶▶', 6, '❤❓❇', STR_PAD_LEFT));     // BAD: string(6) "▶▶"
var_dump(str_pad('▶▶', 6, '❤❓❇', STR_PAD_BOTH));     // BAD: string(6) "▶▶"

var_dump(mb_str_pad('▶▶', 6, '❤❓❇', STR_PAD_RIGHT)); // GOOD: string(18) "▶▶❤❓❇❤"
var_dump(mb_str_pad('▶▶', 6, '❤❓❇', STR_PAD_LEFT));  // GOOD: string(18) "❤❓❇❤▶▶"
var_dump(mb_str_pad('▶▶', 6, '❤❓❇', STR_PAD_BOTH));  // GOOD: string(18) "❤❓▶▶❤❓"

/*
string(10) "Français_"
string(10) "_Français"
string(10) "Français_"
string(11) "Français__"
string(11) "__Français"
string(11) "_Français_"
string(35) "Δεν μιλάω ελληνικά."
string(35) "Δεν μιλάω ελληνικά."
string(35) "Δεν μιλάω ελληνικά."
<br />
<b>Warning</b>:  mb_str_pad(): The length of string is greater than the length specified in parameter 2. Increase the size of parameter 2 to >= 20 in <b>....\phpBCL\src\compat\compat_php83x.php</b> on line <b>151</b><br />
string(0) ""
string(37) "Δεν μιλάω ελληνικά.__"
string(37) "__Δεν μιλάω ελληνικά."
string(37) "_Δεν μιλάω ελληνικά._"
string(6) "▶▶"
string(6) "▶▶"
string(6) "▶▶"
string(18) "▶▶❤❓❇❤"
string(18) "❤❓❇❤▶▶"
string(18) "❤❓▶▶❤❓"

*/
?>