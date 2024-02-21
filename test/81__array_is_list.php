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
 * @source             : /phpBCL/test/81__array_is_list.php
 * @version            : **** - $release: 1.0 - $revision: 6 - $build: ****
 * @created            : 2023-07-07 07:00:00 UTC+3
 * @updated            : 2023-02-21 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * 
 * @since 5.6.40
 */

define('ALEXSOFT_RUN_CMS', true);

$cms_path = str_replace('/phpBCL/test', '', str_replace('\\', '/', __DIR__));
 
require_once($cms_path."/phpBCL/src/coreCompatibilities.php");
?>
<html>
<head>
    <style>
        h1 {font-size: 2em; font-weight: bold; width: 100% !important; }
        h2 {font-size: 1.5em; font-weight: bold; padding: 5px; color: white; background-color: black; width: 100% !important; margin: 4px 0;}
        p {padding: 5px;}
    </style>
</head>
<body>
<?php
echo '<h1>PHP VERSION: '.phpversion().'</h1>';
echo '<h2>TEST PHP 8.1 [ <b>array_is_list</b> ] </h2>';
echo '<p><br></p>'; 

echo "<p><b>1) array_is_list([]):</b> [".(array_is_list([]) ? 'True' : 'False')."]</p>";  // true

echo "<p><b>2) array_is_list(['apple', 2, 3]):</b> [".(array_is_list(['apple', 2, 3]) ? 'True' : 'False')."]</p>"; // true

echo "<p><b>3) array_is_list([0 => 'apple', 'orange']):</b> [".(array_is_list([0 => 'apple', 'orange']) ? 'True' : 'False')."]</p>"; // true

echo "<p><b>4) array_is_list([1 => 'apple', 'orange']) //The array does not start at 0 :</b> [".(array_is_list([1 => 'apple', 'orange']) ? 'True' : 'False')."]</p>"; // false - The array does not start at 0

echo "<p><b>5) array_is_list([0 => 'apple', 'foo' => 'bar']) // Non-integer keys :</b> [".(array_is_list([0 => 'apple', 'foo' => 'bar']) ? 'True' : 'False')."]</p>"; // false - Non-integer keys

echo "<p><b>6) array_is_list([0 => 'apple', 2 => 'bar']) // Non-consecutive keys :</b> [".(array_is_list([0 => 'apple', 2 => 'bar']) ? 'True' : 'False')."]</p>"; // false - Non-consecutive keys
?>
</body>
</html>