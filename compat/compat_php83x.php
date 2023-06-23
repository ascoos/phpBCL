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
 * @ Subpackage        : Core Compatibilities Manager for PHP < 8.3.0
 * @ ASCOOS Version    : Ten - 1.0.0
 * @ File Name         : /phpBCL/compat/compat_php83x.php
 * @ File No.          : ?? - $release: 1.0 - revision: 0 - build 0
 * @ Created Date      : 2023-06-22 07:00:00 UTC+3
 * @ Updated Date      : 
 * @ Author            : Drogidis Christos
 * @ Author email      : webmaster@alexsoft.gr
 * @ Author website    : www.alexsoft.gr
 *
 */

 
// Run by ASCOOS CMS only
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");




/**
 * If the function json_validate does not exist then we create it.
 * ++ 8.3.0 ---- https://wiki.php.net/rfc/json_validate
 */
if (!function_exists('json_validate'))
{
  /**
   * FUNCTION     : json_validate
   * PHP Version  : >= 8.3.0
   * 
   * DESCRIPT     : Validate an string if contains a valid json. 
   * 
   * @link  https://wiki.php.net/rfc/json_validate
   * @param  string $json      The json string being analyzed. This function only works with UTF-8 encoded strings. 
   *                            Note:
   *                            PHP implements a superset of JSON as specified in the original » RFC 7159. 
   * 
   * @param  int    $depth     Maximum nesting depth of the structure being decoded. 
   * 
   * @param  int    $flags     Bitmask of JSON_INVALID_UTF8_IGNORE. The behavior of this constant is described on the JSON constants page. 
   * 
   * @return bool   Returns true if the string passed contains a valid json, otherwise returns false. 
   * 
   */
  function json_validate(string $json, int $depth = 512, int $flags = 0): bool
  {
    if (is_string($json) && $json !== '') 
    {
      @json_decode($json, null, $depth, $flags);
      if (json_last_error() === JSON_ERROR_NONE) {
        return true;
      }
    }
    return false;
  }

}
?>