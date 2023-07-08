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
 * @version            : **** - $release: 1.0 - $revision: 1 - $build: ****
 * @created            : 2023-07-07 07:00:00 UTC+3
 * @updated            : 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */

define('ALEXSOFT_RUN_CMS', true);

$cms_path = str_replace('/phpBCL/test', '',str_replace('\\', '/', __DIR__));
  
require_once($cms_path."/phpBCL/src/coreCompatibilities.php");



echo "array_is_list([]) : ".(array_is_list([]) ? 'True' : 'False').'<br><br>'.PHP_EOL; // true
echo "array_is_list(['apple', 2, 3]) : ".(array_is_list(['apple', 2, 3]) ? 'True' : 'False').'<br><br>'.PHP_EOL; // true
echo "array_is_list([0 => 'apple', 'orange']) : ".(array_is_list([0 => 'apple', 'orange']) ? 'True' : 'False').'<br><br>'.PHP_EOL; // true

// The array does not start at 0
echo "array_is_list([1 => 'apple', 'orange']) : ".(array_is_list([1 => 'apple', 'orange']) ? 'True' : 'False').'<br><br>'.PHP_EOL; // false

// Non-integer keys
echo "array_is_list([0 => 'apple', 'foo' => 'bar']) : ".(array_is_list([0 => 'apple', 'foo' => 'bar']) ? 'True' : 'False').'<br><br>'.PHP_EOL; // false

// Non-consecutive keys
echo "array_is_list([0 => 'apple', 2 => 'bar']) : ".(array_is_list([0 => 'apple', 2 => 'bar']) ? 'True' : 'False').'<br><br>'.PHP_EOL; // false
?>