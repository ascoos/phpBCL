<p align="center"><img src="https://apps.ascoos.com/phpBCL/images/phpBCL_256px.png" height=256 /></p>

# PHP Backwards Compatibility Library (phpBCL)

## Description

These is PHP Backwards Compatibility Library (phpBCL).

<p align="center"><img src="https://apps.ascoos.com/phpBCL/images/PHPCLASSES-Certificate.png" height=512 /></p>

***

## Contributing

This is an open source project, open to anyone. 

Contributions are welcome [github](https://github.com/ascoos/phpBCL)

## Feedback

Please send any feedback or suggestions to [@ascoos](https://twitter.com/ascoos) (Twitter) or [create an issue](https://github.com/ascoos/phpBCL/issues) on GitHub.

## License

[AGL-F (ASCOOS General License - Free)](http://docs.ascoos.com/lics/ascoos/AGL-F.html)

***

<br>

## Download

1. [OFFICIAL ASCOOS DOWNLOAD SITE](https://dl.ascoos.com/pub/phpBCL/phpBCL-latest.zip)
2. [GITHUB](https://github.com/ascoos/phpBCL/releases)
3. [www.phpclasses.org](https://www.phpclasses.org/package/12926.html)


<br>

***

<br>

# Installation and use this library

1. Download latest release
1. Unzip package in your working directory
1. Add in index.php or master php file the below code :

```
if (!defined('ALEXSOFT_RUN_CMS')) define( 'ALEXSOFT_RUN_CMS', true );
$cms_path = "FULL PATH";
require_once($cms_path."/phpBCL/src/coreCompatibilities.php");
```

<br>

***

<br>

- [!] = FIXED
- [+] = Added
- [^] = Updated
- [-] = Removed


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


## VERSIONING FILES  [compat_php43x.php - compat_php83x.php]

The contents of version-based files mean that since added to a specific PHP version, without using `phpBCL`, you will not be able to use them in older versions.

>"All functions in the below table were tested on PHP 5.6"

| A |    PHP   | phpBCL |   TYPE    |          NAME           |                DESCRIPTION
|---|----------|--------|-----------|-------------------------|-----------------------------------------
| + | < 8.3.0  | 1.0.2  | Function  | `mb_str_pad`            | The str_pad() function lacks multibyte character support, causing issues when working with languages that utilize multibyte encodings like UTF-8.
| + | < 8.3.0  | 1.0.0  | Function  | `json_validate`         | Validate an string if contains a valid json.
| + | < 8.2.0  | 1.0.3  | Function  | `mysqli_execute_query`  | Prepares, binds parameters, and executes SQL statement
| + | < 8.1.0  | 1.0.2  | Function  | `array_is_list`         | Checks whether a given array is a list
| - | < 8.0.0  | 1.0.4  | ~~Class~~     | ~~`ValueError`~~            | REMOVED IN phpBCL 1.0.4
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
| + | ALL      | 1.0.1  | FILE      | `compat_similar.php`    | for similar functions
| + | ALL      | 1.0.2  | Function  | `alf_mb_convert_case`   | ASCOOS LIBRARY FUNCTION : For full compatible similar mb_convert_case.
