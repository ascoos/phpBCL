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
 * @subpackage         : Example intltz_get_iana_id Function
 * @source             : /phpBCL/test/84_intltz_get_iana_id.php
 * @version            : 1.1.4
 * @created            : 2024-11-12 07:00:00 UTC+3
 * @updated            : 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * 
 * @since 5.6.40
 */


require_once("../autoload.php");

if (extension_loaded('intl')) {
    $iana_id1 = intltz_get_iana_id('Europe/Berlin'); // Valid, returns the same
    // "Europe/Berlin"

    $iana_id2 = intltz_get_iana_id('Mars'); // Invalid, returns false
    // false

    $iana_id3 = intltz_get_iana_id('Europe/Nicosia'); // Returns as Asia/Nicosia
    // "Asia/Nicosia"
} else {
    echo "Not loaded intl extension";
    exit;
}

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
echo '<h2>TEST PHP 8.4 [ <b>intltz_get_iana_id</b> ] </h2>';
echo '<p><br></p>'; 

echo '<p><b>intltz_get_iana_id [Europe/Berlin]....:</b> '.$iana_id1.'</p>';
echo '<p><b>intltz_get_iana_id [Mars]...:</b> '.$iana_id2.'</p>';
echo '<p><b>intltz_get_iana_id [Europe/Nicosia]....:</b> '.$iana_id3.'</p>';
?>
</body>
</html>