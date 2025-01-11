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
 * @subpackage         : Core Compatibilities Manager for PHP Errors < 8.0.0
 * @source             : /phpBCL/src/compat/compat_error.php
 * @version            : 1.1.3
 * @created            : 2024-02-27 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * If the class [ Error ] does not exist then we create it.
 * ++ 7.0.0  ---- https://www.php.net/manual/en/class.error.php
 */
if (!class_exists('Error', false)) {    
    class Error extends Exception {}
}


/**
 * If the class [ TypeError ] does not exist then we create it.
 * ++ 7.0.0  ---- https://www.php.net/manual/class.typeerror.php
 */
if (!class_exists('TypeError', false)) {
    if (is_subclass_of('Error', 'Exception'))     
    {
        class TypeError extends Error{}
    } else {
        class TypeError extends Exception{}
    }
}



/**
 * If the class [ ValueError ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/en/class.valueerror.php
 */
 if (!class_exists('ValueError', false))
 {

  /**
   * A ValueError is thrown when the type of an argument is correct but the value of it is incorrect. 
   * For example, passing a negative integer when the function expects a positive one, 
   * or passing an empty string/array when the function expects it to not be empty. 
   * 
   * @link  https://www.php.net/manual/en/class.valueerror.php
   * 
   */
  if (is_subclass_of('Error', 'Exception'))     
  {
      class ValueError extends Error{}
  } else {
      class ValueError extends Exception{}
  }  
} 

?>