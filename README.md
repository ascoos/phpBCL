<p align="center"><img src="https://apps.ascoos.com/phpBCL/images/phpBCL_256px.png" height=256 /></p>

# PHP Backwards Compatibility Library (phpBCL)

![GitHub Downloads (all assets, all releases)](https://img.shields.io/github/downloads/ascoos/phpbcl/total?color=%230E80C0) 
![GitHub Release](https://img.shields.io/github/v/release/ascoos/phpbcl) 
![GitHub Release Date](https://img.shields.io/github/release-date/ascoos/phpbcl?color=%230E80C0)
![GitHub repo size](https://img.shields.io/github/repo-size/ascoos/phpbcl) 
[![Ascoos Web Extended Studio - total lines](https://tokei.rs/b1/github/ascoos/phpbcl?category=lines)](https://github.com/ascoos/phpbcl)
[![Ascoos Web Extended Studio - source code lines](https://tokei.rs/b1/github/ascoos/phpbcl?category=code)](https://github.com/ascoos/phpbcl) 
[![Ascoos Web Extended Studio - files in repository](https://tokei.rs/b1/github/ascoos/phpbcl?category=files)](https://github.com/ascoos/phpbcl)



## Description

This package provides functions of newer PHP versions for older versions.

It provides scripts that implement functions only available in newer PHP versions as functions built-in in the PHP core engine. The parts work in older PHP versions.

A main script checks the current PHP version and loads that implement the functions of newer PHP versions.

***

### SOURCEFORGE
[![Download phpBCL](https://img.shields.io/sourceforge/dt/phpbcl.svg)](https://sourceforge.net/projects/phpbcl/files/latest/download)
[![Download phpBCL](https://img.shields.io/sourceforge/dm/phpbcl.svg)](https://sourceforge.net/projects/phpbcl/files/latest/download)
[![Download phpBCL](https://img.shields.io/sourceforge/dw/phpbcl.svg)](https://sourceforge.net/projects/phpbcl/files/latest/download)
[![Download phpBCL](https://img.shields.io/sourceforge/dd/phpbcl.svg)](https://sourceforge.net/projects/phpbcl/files/latest/download)

***

## Awards

<p align="center"><img src="https://apps.ascoos.com/phpBCL/images/PHPCLASSES-Certificate.png" height=512 /></p>

***

## Contributing

This is an open source project, open to anyone. 

Contributions are welcome [github](https://github.com/ascoos/phpBCL)


## Feedback

Please send any feedback or suggestions to [@ascoos](https://twitter.com/ascoos) (Twitter) or [create an issue](https://github.com/ascoos/phpBCL/issues) on GitHub.

## License

[![AGL-F](https://img.shields.io/badge/License-AGLF-blue.svg)](http://docs.ascoos.com/lics/ascoos/AGL-F.html)

***

## Download

[![OFFICIAL ASCOOS DOWNLOAD SITE](https://img.shields.io/website?url=https://dl.ascoos.com/pub/phpBCL)](https://dl.ascoos.com/pub/phpBCL/phpBCL-latest.zip) 
[![PHP Classes](https://img.shields.io/badge/GitHub-phpBCL-blue.svg)](https://github.com/ascoos/phpBCL/releases) 
[![PHP Classes](https://img.shields.io/badge/php-classes-blue.svg)](https://www.phpclasses.org/package/12926.html) 
[![Sourceforge phpBCL](https://img.shields.io/badge/SourceForge-phpBCL-blue.svg)](https://sourceforge.net/projects/phpbcl/files/latest/download)


***

# Installation and use this library

1. Download latest release
1. Unzip package in your working directory
1. Add in index.php or master php file the below code :

```php
$path = '[YOUR SITE PATH]';
include $path . '/phpBCL/autoload.php';
```

<br>

***

<br>

- [!] = FIXED
- [+] = Added
- [^] = Updated
- [-] = Removed


## Error FILE  [compat_error.php]

This file contains support code for the remaining functions of the phpBCL library.


| A |    PHP    | phpBCL |   TYPE    |          NAME           |                DESCRIPTION
|---|-----------|--------|-----------|-------------------------|-----------------------------------------
| + | ALL       | 1.0.8  | FILE      | `compat_error.php`      | To support errors for php < 7
| + | < 7.2.0   | 1.0.8  | Class     | `Error`                 | 
| + | < 7.2.0   | 1.0.8  | Class     | `TypeError`             | 
| + | < 8.0.0   | 1.0.8  | Class     | `ValueError`            | 



## phpBCL FILE  [phpBCL.php]

This file contains support code for the remaining functions of the phpBCL library.


| A |    PHP    | phpBCL |   TYPE    |          NAME           |                DESCRIPTION
|---|-----------|--------|-----------|-------------------------|-----------------------------------------
| + | ALL       | 1.0.5  | FILE      | `phpBCL.php`            | To support other functions in this php library
| + | >= 5.3.0  | 1.0.5  | Function  | `validate_encoding`     | Checks for any errors in the user's string encoding.
| + | >= 5.3.0  | 1.0.7  | Function  | `alf_preg_quote`        | Quote regular expression characters.



## DEPRECATED FILE  [compat_deprecated.php]

The use of the contents of the deprecated-removed code file is the reverse of the use of other files versioning-based on the php version. 

This means that from the PHP version that refers and to newer versions, without the use of phpBCL and specifically the file `compat_deprecated.php`, you will not be able to use this code.


| A |    PHP    | phpBCL |   TYPE    |          NAME           |                DESCRIPTION
|---|-----------|--------|-----------|-------------------------|-----------------------------------------
| + | ALL       | 1.0.0  | FILE      | `compat_deprecated.php` | for deprecated-removed php functions
| + | >= 8.1.0  | 1.0.0  | CONST     | `ENT_COMPAT`            | ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401
| + | >= 8.0.0  | 1.0.0  | CONST     | `MB_OVERLOAD_MAIL`      | = 1
| + | >= 8.0.0  | 1.0.0  | CONST     | `MB_OVERLOAD_STRING`    | = 2
| + | >= 8.0.0  | 1.0.0  | CONST     | `MB_OVERLOAD_REGEX`     | = 4
| + | >= 8.0.0  | 1.0.0  | Function  | `each`                  | Return the current key and value pair from an array and advance the array cursor.


## VERSIONING FILES  [compat_php43x.php - compat_php85x.php]

The contents of version-based files mean that since added to a specific PHP version, without using `phpBCL`, you will not be able to use them in older versions.

>"All functions in the below table were tested on PHP 5.6"

| A |    PHP   | phpBCL |   TYPE    |          NAME           |                DESCRIPTION
|---|----------|--------|-----------|-------------------------|-----------------------------------------
| + | < 8.5.0  | 2.0.0  | Constant  | `PHP_BUILD_DATE`        | that is assigned the time and date the PHP binary is built.
| + | < 8.4.0  | 1.1.4  | Function  | `intltz_get_iana_id`    | Get the IANA identifier from a given timezone
| + | < 8.4.0  | 1.1.2  | Function  | `bcdivmod`              | Returns an array with the quotient (whole values) as a string, and the remainder as a string containing $scale number of decimal values.
| + | < 8.4.0  | 1.1.1  | Function  | `grapheme_str_split`    | Splits a string into an array of individual or chunks of graphemes.
| + | < 8.4.0  | 1.1.1  | Function  | `array_find`            | Returns the VALUE of the first element from $array for which the $callback returns true. Returns NULL if no matching element is found.
| + | < 8.4.0  | 1.1.1  | Function  | `array_find_key`        | Returns the KEY of the first element from $array for which the $callback returns TRUE. If no matching element is found the function returns NULL.
| + | < 8.4.0  | 1.1.1  | Function  | `array_all`             | Checks whether the $callback returns TRUE for ALL the array elements.
| + | < 8.4.0  | 1.1.1  | Function  | `array_any`             | Checks whether the $callback returns TRUE for ANY of the array elements.
| + | < 8.4.0  | 1.1.0  | Function  | `http_get_last_response_headers` | Get Last Response Headers
| + | < 8.4.0  | 1.1.0  | Function  | `http_clear_last_response_headers` | Clear Last Response Headers
| ^ | < 8.4.0  | 1.0.7  | Function  | `mb_ltrim`              | Multi-byte safely strip white-spaces (or other characters) from the beginning of a string. 
| ^ | < 8.4.0  | 1.0.7  | Function  | `mb_rtrim`              | Multi-byte safely strip white-spaces (or other characters) from the end of a string. 
| ^ | < 8.4.0  | 1.0.7  | Function  | `mb_trim`               | Multi-byte safely strip white-spaces (or other characters) from the beginning and end of a string.  
| ^ | < 8.4.0  | 1.0.5  | Function  | `mb_ucfirst`            | Make a multibyte string's first character uppercase.
| ^ | < 8.4.0  | 1.0.5  | Function  | `mb_lcfirst`            | Make a multibyte string's first character lowercase.
| + | < 8.3.0  | 1.0.2  | Function  | `mb_str_pad`            | The str_pad() function lacks multibyte character support, causing issues when working with languages that utilize multibyte encodings like UTF-8.
| + | < 8.3.0  | 1.0.9  | Function  | `stream_context_set_options` | Sets options on the specified context.
| + | < 8.3.0  | 1.0.0  | Function  | `json_validate`         | Validate an string if contains a valid json.
| + | < 8.2.0  | 1.0.9  | Function  | `openssl_cipher_key_length` | Gets the cipher key length.
| + | < 8.2.0  | 1.0.8  | Function  | `ini_parse_quantity`    | Returns the interpreted size in bytes on success from an ini shorthand.
| ^ | < 8.2.0  | 1.0.8  | Function  | `mysqli_execute_query`  | Prepares, binds parameters, and executes SQL statement
| + | < 8.0.0  | 1.0.9  | Function  | `preg_last_error_msg`   | Returns the error message of the last PCRE regex execution.
| + | < 8.0.0  | 1.0.9  | Function  | `get_debug_type`        | Returns the resolved name of the PHP variable value.
| + | < 8.0.0  | 1.0.9  | Function  | `get_resource_id`       | Returns an integer identifier for the given resource
| + | < 8.0.0  | 1.0.9  | Function  | `fdiv`                  | Divides two numbers, according to IEEE 754
| + | < 8.1.0  | 1.0.2  | Function  | `array_is_list`         | Checks whether a given array is a list
| ^ | < 8.0.0  | 1.0.2  | Interface | `Stringable`            | The Stringable interface denotes a class as having a __toString() method. 
| ^ | < 8.0.0  | 1.0.2  | Class     | `PhpToken`              | This class provides an alternative to token_get_all(). While the function returns tokens either as a single-character string, or an array with a token ID, token text and line number, PhpToken::tokenize() normalizes all tokens into PhpToken objects, which makes code operating on tokens more memory efficient and readable. 
| ^ | < 8.0.0  | 1.0.2  | Function  | `str_contains`          | Determine if a string contains a given substring
| ^ | < 8.0.0  | 1.0.2  | Function  | `str_ends_with`         | Checks if a string ends with a given substring
| ^ | < 8.0.0  | 1.0.2  | Function  | `str_starts_with`       | Checks if a string starts with a given substring
| + | < 7.4.0  | 1.0.0  | Function  | `password_algos`        | Get available password hashing algorithm IDs
| + | < 7.4.0  | 1.0.2  | Function  | `mb_str_split`          | Given a multibyte string, return an array of its characters
| + | < 7.3.0  | 1.0.2  | CONST     | `MB_CASE_FOLD`          | Performs a full case fold conversion which removes case distinctions present in the string. This is used for caseless matching. Used by  `alf_mb_convert_case` (compat_similar.php)
| + | < 7.3.0  | 1.0.2  | CONST     | `MB_CASE_UPPER_SIMPLE`  | Performs simple upper-case fold conversion. Used by `alf_mb_convert_case` (**compat_similar.php**)
| + | < 7.3.0  | 1.0.2  | CONST     | `MB_CASE_LOWER_SIMPLE`  | Performs a simple lower-case fold conversion. Used by `alf_mb_convert_case` (**compat_similar.php**)
| + | < 7.3.0  | 1.0.2  | CONST     | `MB_CASE_TITLE_SIMPLE`  | Performs simple title-case fold conversion. Used by `alf_mb_convert_case` (**compat_similar.php**)
| + | < 7.3.0  | 1.0.2  | CONST     | `MB_CASE_FOLD_SIMPLE`   | Performs a simple case fold conversion which removes case distinctions present in the string. This is used for caseless matching. Used by `alf_mb_convert_case` (**compat_similar.php**)
| ^ | < 7.3.0  | 1.0.2  | Function  | `array_key_first`       | Get the first key of the given array without affecting the internal array pointer. 
| ^ | < 7.3.0  | 1.0.2  | Function  | `array_key_last`        | Get the last key of the given array without affecting the internal array pointer. 
| + | < 7.3.0  | 1.0.1  | Function  | `is_countable`          | Verify that the contents of a variable is an array or an object implementing Countable 
| + | < 7.1.0  | 1.0.1  | Function  | `is_iterable`           | Verify that the contents of a variable is an iterable value 
| + | < 7.1.0  | 1.0.9  | Function  | `openssl_get_curve_names` | Gets the list of available curve names
| + | < 7.0.0  | 1.0.9  | Function  | `intdiv`                | Integer division
| + | < 5.5.0  | 1.0.2  | Function  | `array_column`          | returns the values from a single column of the array, identified by the column_key. Optionally, an index_key may be provided to index the values in the returned array by the values from the index_key column of the input array. 
| + | < 5.5.0  | 1.0.2  | Function  | `boolval`               | Get the boolean value of a variable
| + | < 5.5.0  | 1.0.2  | Function  | `json_last_error_msg`   | Returns the error string of the last json_encode() or json_decode() call, which did not specify JSON_THROW_ON_ERROR.
| + | < 4.3.0  | 1.0.2  | Function  | `mb_convert_case`       | Performs case folding on a string, converted in the way specified by mode.
| + | < 4.3.0  | 1.0.2  | CONST     | `MB_CASE_UPPER`         | Performs a full upper-case folding. Used by **`mb_convert_case`**
| + | < 4.3.0  | 1.0.2  | CONST     | `MB_CASE_LOWER`         | Performs a full lower-case folding. Used by **`mb_convert_case`**
| + | < 4.3.0  | 1.0.2  | CONST     | `MB_CASE_TITLE`         | Performs a full title-case conversion based on the Cased and CaseIgnorable derived Unicode properties. Used by **`mb_convert_case`**




## SIMILAR FILE  [compat_similar.php]

This file implements functions that resemble the original php functions that have not been removed, but have undergone changes and cannot run on all versions.

> "All similar functions start with prefix `alf_`"

| A |    PHP   | phpBCL |   TYPE    |          NAME           |                DESCRIPTION
|---|----------|--------|-----------|-------------------------|-----------------------------------------
| + | >= 8.3.0 | 1.0.9  | FILE      | `alf_get_class`         | Fixed E_DEPRECATED warning
| + | ALL      | 1.0.1  | FILE      | `compat_similar.php`    | for similar functions
| + | ALL      | 1.0.2  | Function  | `alf_mb_convert_case`   | ASCOOS LIBRARY FUNCTION : For full compatible similar mb_convert_case.