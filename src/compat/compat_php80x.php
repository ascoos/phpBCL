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
 * @subpackage         : Core Compatibilities Manager for PHP < 8.0.0
 * @source             : /phpBCL/src/compat/compat_php80x.php
 * @version            : 1.1.3
 * @created            : 2023-06-22 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * If the class [ Stringable ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/en/class.stringable.php
 */
if (!interface_exists('Stringable')) 
{
  /**
 * Interface implemented by classes that are convertible to string.
 */
  interface Stringable 
  {
    /* Methods */
	  
    /**
	   * Gets a string representation of the object
	   * @return string Returns the `string` representation of the object.
	   */    
    public function __toString();
  }

}



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
  function str_contains($haystack, $needle)
  {
    $errors = array(
      'str_contains(): expects parameter 1 to be string, '.gettype($haystack).' given',
      'str_contains(): expects parameter 2 to be string, '.gettype($needle).' given'
    );

    if (!is_string($haystack)) {
      trigger_error($errors[0], E_USER_WARNING);
      return false;
    } 
    
    if(!is_string($needle)) {
      trigger_error($errors[1], E_USER_WARNING);
      return false;
    }

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
  function  str_ends_with($haystack, $needle)
  {
    $errors = array(
      'str_contains(): expects parameter 1 to be string, '.gettype($haystack).' given',
      'str_contains(): expects parameter 2 to be string, '.gettype($needle).' given'
    );

    if (!is_string($haystack)) {
      trigger_error($errors[0], E_USER_WARNING);
      return false;
    } 
    
    if(!is_string($needle)) {
      trigger_error($errors[1], E_USER_WARNING);
      return false;
    }

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
  function  str_starts_with($haystack, $needle)
  {
    $errors = array(
      'str_contains(): expects parameter 1 to be string, '.gettype($haystack).' given',
      'str_contains(): expects parameter 2 to be string, '.gettype($needle).' given'
    );

    if (!is_string($haystack)) {
      trigger_error($errors[0], E_USER_WARNING);
      return false;
    } 
    
    if(!is_string($needle)) {
      trigger_error($errors[1], E_USER_WARNING);
      return false;
    }

    $nlen = strlen($needle);
    return ($nlen === 0 || 0 === strncmp($haystack, $needle, $nlen));
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
    public $id;

    /** @property string $text   The textual content of the token.  */
    public $text;

    /** @property int $line       The starting line number (1-based) of the token. */    
    public $line;

    /** @property int $pos        The starting position (0-based) in the tokenized string. */
    public $pos;



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
    final public function __construct($id, $text, $line = -1, $pos = -1)  {
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
    public function getTokenName() {
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
    public function is($kind)
    {
      $errors = array(
        'Kind array must have elements of type int or string',
        '"Kind must be of type int, string or array'
      );

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
            trigger_error($errors[0], E_USER_WARNING);
            return false;
            //throw new TypeError("Kind array must have elements of type int or string");
          }
        }
        return false;
      } else if (is_string($kind)) {
        return $this->text === $kind;
      } else if (is_int($kind)) {
        return $this->id === $kind;
      } else {
        trigger_error($errors[0], E_USER_WARNING);
        return false;
        //throw new TypeError("Kind must be of type int, string or array");
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
    public function isIgnorable()
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
    public function __toString(){
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
    public static function tokenize($code, $flags = 0) {
      return token_get_all($code, $flags);
    }
  }
}



/**
 * If the class [ preg_last_error_msg ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/function.preg-last-error-msg.php
 */
if (!function_exists('preg_last_error_msg')) {
  /**
   * Returns the error message of the last PCRE regex execution.
   * 
   * @link https://www.php.net/manual/function.preg-last-error-msg.php
   * 
   * @return string  Returns the error message on success, or "No error" if no error has occurred.
   */
  function preg_last_error_msg()
  {
      switch (preg_last_error()) {
          case PREG_NO_ERROR:
              return 'No error';
          case PREG_INTERNAL_ERROR:
              return 'Internal error';
          case PREG_BACKTRACK_LIMIT_ERROR:
              return 'Backtrack limit exhausted';
          case PREG_RECURSION_LIMIT_ERROR:
              return 'Recursion limit exhausted';
          case PREG_BAD_UTF8_ERROR:
              return 'Malformed UTF-8 characters, possibly incorrectly encoded';
          case PREG_BAD_UTF8_OFFSET_ERROR:
              return 'The offset did not correspond to the beginning of a valid UTF-8 code point';
          case PREG_JIT_STACKLIMIT_ERROR:
              return 'JIT stack limit exhausted';

          default:
              return 'Unknown error';
      }
  }
}


/**
 * If the class [ get_debug_type ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/function.get-debug-type.php
 */
if (!function_exists('get_debug_type')) 
{
  /**
   * Gets the type name of a variable in a way that is suitable for debugging
   * 
   * Returns the resolved name of the PHP variable value. 
   * This function will resolve objects to their class name, resources to their resource type name, 
   * and scalar values to their common name as would be used in type declarations.
   * 
   * This function differs from gettype() in that it returns type names that are more consistent 
   * with actual usage, rather than those present for historical reasons. 
   * 
   * @link https://www.php.net/manual/function.get-debug-type.php
   * 
   * @param $value: The variable being type checked.
   * 
   * @return string Possible values for the returned string are:
   */
  function get_debug_type($value)
  {
      switch (true) {
          case null === $value: return 'null';
          case is_bool($value): return 'bool';
          case is_string($value): return 'string';
          case is_array($value): return 'array';
          case is_int($value): return 'int';
          case is_float($value): return 'float';
          case is_object($value): break;
          case $value instanceof __PHP_Incomplete_Class: return '__PHP_Incomplete_Class';
          default:
              if (null === $type = @get_resource_type($value)) {
                  return 'unknown';
              }

              if ('Unknown' === $type) {
                  $type = 'closed';
              }

              return "resource ($type)";
      }

      $class = get_class($value);

      if (false === strpos($class, '@')) {
          return $class;
      }

      return (get_parent_class($class) ?: key(class_implements($class)) ?: 'class').'@anonymous';
  }
}



/**
 * If the class [ get_resource_id ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/function.get-resource-id.php
 */
if (!function_exists('get_resource_id')) 
{
  /**
   * Returns an integer identifier for the given resource
   * 
   * This function provides a type-safe way for generating the integer identifier for a resource.
   * 
   * @link https://www.php.net/manual/function.get-resource-id.php
   * 
   * @param resource $resource: The evaluated resource handle.
   * 
   * @return int  The int identifier for the given resource. 
   *              This function is essentially an int cast of resource to make it easier 
   *              to retrieve the resource ID.
   */
  function get_resource_id($resource)
  {
    if (!is_resource($resource) && null === @get_resource_type($resource)) {
      throw new TypeError(sprintf('Argument 1 passed to get_resource_id() must be of the type resource, %s given', get_debug_type($resource)));
    }

    return (int) $resource;
  }
}


/**
 * If the class [ fdiv ] does not exist then we create it.
 * ++ 8.0.0  ---- https://www.php.net/manual/function.fdiv.php
 */
if (!function_exists('fdiv'))
{
  /**
   * Divides two numbers, according to IEEE 754
   * 
   * Returns the floating point result of dividing the num1 by the num2. 
   * If the num2 is zero, then one of INF, -INF, or NAN will be returned.
   * 
   * @link https://www.php.net/manual/function.fdiv.php
   * 
   * @param float $num1: The dividend (numerator)
   * @param float $num2: The divisor
   * @return float The floating point result of num1/ num2
   */
  function fdiv($num1, $num2)
  {
      return @($num1 / $num2);
  }
}
?>