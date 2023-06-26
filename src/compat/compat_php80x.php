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
 * @ Subpackage        : Core Compatibilities Manager for PHP < 8.0.0
 * @ ASCOOS Version    : Ten - 1.0.0
 * @ File Name         : /phpBCL/compat/compat_php80x.php
 * @ File No.          : ?? - $release: 1.0 - revision: 0 - build 0
 * @ Created Date      : 2016-01-12 07:00:00 UTC+3 
 * @ Updated Date      : 2023-06-22 07:00:00 UTC+3
 * @ Author            : Drogidis Christos
 * @ Author email      : webmaster@alexsoft.gr
 * @ Author website    : www.alexsoft.gr
 *
 */


// Εκτέλεση μόνο από το ASCOOS
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");



/**
 * If the function [ str_contains ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/function.str-contains.php
 */
if (!function_exists('str_contains')) 
{
  /**
   * Determine if a string contains a given substring
   * Performs a case-sensitive check indicating if needle is contained in haystack.
   * 
   * @link  https://www.php.net/manual/function.str-contains.php
   * 
   * @param string $haystack  : The string to search in.
   * @param string $needle    : The substring to search for in the haystack.
   * @return bool             : Returns true if needle is in haystack, false otherwise.
   */
  function str_contains(string $haystack, string $needle): bool
  {
    if (!is_string($haystack) || !is_string($needle)) return false;

    return $needle !== '' && mb_strpos($haystack, $needle) !== false;
  }
}


/**
 * If the function [ str_ends_with ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/en/function.str-ends-with.php
 */
if (!function_exists('str_ends_with')) 
{
  /**
   * Checks if a string ends with a given substring
   * Performs a case-sensitive check indicating if haystack ends with needle.
   * 
   * @link  https://www.php.net/manual/en/function.str-ends-with.php
   * 
   * @param string $haystack  : The string to search in.
   * @param string $needle    : The substring to search for in the haystack.
   * @return bool             : Returns true if haystack ends with needle, false otherwise.
   */
  function  str_ends_with(string $haystack, string $needle): bool
  {
    if (!is_string($haystack) || !is_string($needle)) return false;

    $nlen = strlen($needle);
    return ($nlen === 0 || 0 === substr_compare($haystack, $needle, - $nlen));
  }
}


/**
 * If the function [ str_starts_with ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/en/function.str-starts-with.php
 */
if (!function_exists('str_starts_with')) 
{
  /**
   * Checks if a string starts with a given substring
   * Performs a case-sensitive check indicating if haystack begins with needle. 
   * 
   * @link  https://www.php.net/manual/en/function.str-starts-with.php
   * 
   * @param string $haystack  : The string to search in.
   * @param string $needle    : The substring to search for in the haystack.
   * @return bool             : Returns true if haystack begins with needle, false otherwise.
   */
  function  str_starts_with(string $haystack, string $needle): bool
  {
    if (!is_string($haystack) || !is_string($needle)) return false;

    $nlen = strlen($needle);
    return ($nlen === 0 || 0 === strncmp($haystack, $needle, $nlen));
  }
}





/**
 * If the class [ Stringable ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/en/class.stringable.php
 */
if (!class_exists('Stringable')) 
{

  interface Stringable {
    /* Methods */
    public function __toString(): string;
  }

}




/**
 * If the class [ PhpToken ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/en/class.phptoken.php
 */
if (!class_exists('PhpToken')) 
{
  class PhpToken implements Stringable {
    /* Properties */
    /** @property int $id        One of the T_* constants, or an integer < 256 representing a single-char token.  */
    public int $id;

    /** @property string $text   The textual content of the token.  */
    public string $text;

    /** @property int $line       The starting line number (1-based) of the token. */    
    public int $line;

    /** @property int $pos        The starting position (0-based) in the tokenized string. */
    public int $pos;



    /* Methods */

    /**
     * 
     * @link   https://www.php.net/manual/en/phptoken.construct.php
     * 
     * @param   int     $id       One of the T_* constants (see List of Parser Tokens), or an ASCII codepoint representing a single-char token.
     * @param   string  $text     The textual content of the token.
     * @param   int     $line     The starting line number (1-based) of the token.
     * @param   int     $pos      The starting position (0-based) in the tokenized string (the number of bytes).
     * 
     * @return  object            Returns a new PhpToken object

     */
    final public function __construct(int $id, string $text, int $line = -1, int $pos = -1)  {
      $this->id = $id;
      $this->text = $text;
      $this->line = $line;
      $this->pos = $pos;
    }
    
    
    /** Get the name of the token. */
    /**
     * Returns the name of the token.
     * 
     * PARAMETERS : This function has no parameters.
     * 
     * @link https://www.php.net/manual/en/phptoken.gettokenname.php
     * 
     * @return string   Returns the name of the token.
     * 
     * COMMENTS
     * --------
     * getTokenName() is mainly useful for debugging purposes. 
     * For single-char tokens with IDs below 256, it returns the extended ASCII character corresponding to the ID. 
     * For known tokens, it returns the same result as token_name(). For unknown tokens, it returns null.
     * 
     * It should be noted that tokens that are not known to PHP are commonly used, 
     * for example when emulating lexer behavior from future PHP versions. 
     * In this case custom token IDs are used, so they should be handled gracefully. 
     * 
     */
    public function getTokenName(): ?string {
      if ($this->id < 256) {
        return chr($this->id);
      } elseif ('UNKNOWN' !== $name = token_name($this->id)) {
        return $name;
      } else {
        return null;
      }
    }


    /**
     * Tells whether the token is of given kind.
     * 
     * @link https://www.php.net/manual/en/phptoken.is.php
     * 
     * @param int|string|array $kind    Either a single value to match the token's id or textual content, or an array thereof. 
     * 
     * @return bool   A boolean value whether the token is of given kind. 
     * 
     * COMMENTS
     * --------
     * The is() method allows checking for certain tokens, while abstracting over whether it is a single-char token $token->is(';'), 
     * a multi-char token $token->is(T_FUNCTION), or whether multiple tokens are allowed $token->is([T_CLASS, T_TRAIT, T_INTERFACE]).
     * 
     * While non-generic code can easily check the appropriate property, such as $token->text == ';' or $token->id == T_FUNCTION, 
     * token stream implementations commonly need to be generic over different token kinds and need to support specification 
     * of multiple token kinds.* 
     * 
     * Whether the token has the given ID, the given text, or has an ID/text part of the given array.
     */
    public function is(int|string|array  $kind): bool
    {
      if (is_array($kind)) {
        foreach ($kind as $singleKind) {
          if (is_string($singleKind)) {
            if ($this->text === $singleKind) {
              return true;
            }
          } else if (is_int($singleKind)) {
            if ($this->id === $singleKind) {
              return true;
            }
          } else {
            throw new TypeError("Kind array must have elements of type int or string");
          }
        }
        return false;
      } else if (is_string($kind)) {
        return $this->text === $kind;
      } else if (is_int($kind)) {
        return $this->id === $kind;
      } else {
        throw new TypeError("Kind must be of type int, string or array");
      }
    }


    
    /** 
     * Tells whether the token would be ignored by the PHP parser.
     * 
     * @link https://www.php.net/manual/en/phptoken.isignorable.php
     * 
     * PARAMETERS: This function has no parameters.
     * 
     * @return  bool  A boolean value whether the token would be ignored by the PHP parser (such as whitespace or comments). 
     * 
     * @comments
     * Whether this token would be ignored by the PHP parser. 
     * 
     * As a special case, it is very common that whitespace and comments need to be skipped during token processing. 
     * The isIgnorable() method determines whether a token is ignored by the PHP parser. 
     */
    public function isIgnorable(): bool 
    {
      return $this->is([
          T_WHITESPACE,
          T_COMMENT,
          T_DOC_COMMENT,
          T_OPEN_TAG,
      ]);
    }

    
    /**
     * Returns the textual content of the token.
     * 
     * PARAMETERS : This function has no parameters.
     * 
     * @link https://www.php.net/manual/en/phptoken.tostring.php
     * 
     * @return string   A textual content of the token. 
     */
    public function __toString(): string {
      return $this->text;
    }
    

    /**
    * Same as token_get_all(), but returning array of PhpToken.
    * @return static[]
    */

    /**
     * Splits given source into PHP tokens, represented by PhpToken objects.
     * 
     * @link   https://www.php.net/manual/en/phptoken.tokenize.php
     * 
     * @access  public
     * @static
     * 
     * @param   string  $code     The PHP source to parse.
     * @param   int     $flags    [Default=0] Valid flags: TOKEN_PARSE - Recognises the ability to use reserved words in specific contexts.
     * 
     * @return  array   An array of PHP tokens represented by instances of PhpToken or its descendants. 
     *                  This method returns static[] so that PhpToken can be seamlessly extended. 
     */
    public static function tokenize(string $code, int $flags = 0): array {
      return token_get_all($code, $flags);
    }
  }
}







/**
 * If the class [ ValueError ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/en/class.valueerror.php
 */
if (!class_exists('ValueError')) {

  /**
   * A ValueError is thrown when the type of an argument is correct but the value of it is incorrect. 
   * For example, passing a negative integer when the function expects a positive one, 
   * or passing an empty string/array when the function expects it to not be empty. 
   * 
   * @link  https://www.php.net/manual/en/class.valueerror.php
   * 
   */
  class ValueError extends Error {}
}   

?>