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
 * @subpackage         : Example mb_str_split Function
 * @source             : /phpBCL/test/mb_str_split.php
 * @version            : 1.1.3
 * @created            : 2023-07-07 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */

/**
 * ++ 8.0.0  ---- https://www.php.net/manual/en/class.stringable.php
 */

 
 require_once("../autoload.php");


class IPv4Address implements Stringable {
    private $oct1;
    private $oct2;
    private $oct3;
    private $oct4;

    public function __construct($oct1, $oct2, $oct3, $oct4) {
        $this->oct1 = $oct1;
        $this->oct2 = $oct2;
        $this->oct3 = $oct3;
        $this->oct4 = $oct4;
    }

    public function __toString()
    {
        return $this->oct1.'.'.$this->oct2.'.'.$this->oct3.'.'.$this->oct4;
    }
}

function showStuff($value) {
    // A Stringable will get converted to a string here by calling
    // __toString.
    print $value;
}

$ip = new IPv4Address('123', '234', '42', '9');

showStuff($ip);

/**
 * The above example will output something similar to: 123.234.42.9
 */
?>