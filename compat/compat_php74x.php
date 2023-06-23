<?php
/**
 *
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ********************************************************************
 * @ Project ASCOOS                                                 *
 * @ Copyright (C) 2007 - 2023 AlexSoft Software.                   *
 * @ Creator: Drogidis Christos                                     *
 * @ ASCOOS CMS Site: www.ascoos.com                                *
 * @ Creator Site: www.alexsoft.gr                                  *
 * @ email: support@ascoos.com                                      *
 * @ license site: http://docs.ascoos.com/lics/ascoos/AGL.html      *
 * @ Copyrighted Commercial Software                                *
 * @ Program ASCOOS CMS Manager                                     *
 ********************************************************************
 *
 * @ Package           : ASCOOS CMS - phpBCL
 * @ Subpackage        : Core Compatibilities Manager for PHP < 7.4.0
 * @ ASCOOS Version    : Ten - 1.0.0
 * @ File Name         : /phpBCL/compat/compat_php74x.php
 * @ File No.          : ?? - $release: 1.0 - revision: 0 - build 0
 * @ Created Date      : 2021-12-07 01:20:00 GMT+2
 * @ Updated Date      : 2023-06-22 07:00:00 UTC+3
 * @ Author            : Drogidis Christos
 * @ Author email      : webmaster@alexsoft.gr
 * @ Author website    : www.alexsoft.gr
 *
 */


// Εκτέλεση μόνο από το ASCOOS
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");



/**
 * If the function [ password_algos ] does not exist then we create it.
 * ++ 7.4.0  ---- https://www.php.net/manual/en/function.password-algos.php
 */
if (!function_exists('password_algos')) 
{
  /**
   * Get available password hashing algorithm IDs
   * 
   * DESCRIPT: Returns a complete list of all registered password hashing algorithm IDs as an array of strings.
   * 
   * @link https://www.php.net/manual/en/function.password-algos.php
   * 
   * @return array    Returns the available password hashing algorithm IDs.
   */
  function password_algos(): array
  {
      $algos = [PASSWORD_BCRYPT];
      defined('PASSWORD_ARGON2I')  && $algos[] = PASSWORD_ARGON2I;
      defined('PASSWORD_ARGON2ID') && $algos[] = PASSWORD_ARGON2ID;
      return $algos;
  }
}



?>
