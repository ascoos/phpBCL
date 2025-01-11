# Changelog

## 2.0.2 [2024-12-08]

### *phpBCL Core and Examples*
- Updated autoload.php


---

## 2.0.1 [2024-12-01]

### *phpBCL Core and Examples*
- Fixed composer.json file
- Fixed libin.json file

---

## 2.0.0 [2024-11-29]

### *phpBCL Core and Examples*
- Added support for [`LibIN`](https://github.com/ascoos/libin) Installer
- Added support for PHPClasses [`composer`](https://www.phpclasses.org/package/12926-PHP-Functions-of-newer-PHP-versions-for-older-versions.html#install) installer

### PHP < 8.5
#### `CONSTANTS`
- Added dynamic Constant `PHP_BUILD_DATE` : that is assigned the time and date the PHP binary is built.

#### `EXAMPLES`
- Added example file `85_php_build_date.php` : 

---

## 1.1.4 [2024-11-12]

#### PHP < 8.4
- Added Function `intltz_get_iana_id` -- Get the IANA identifier from a given timezone
- ADDED EXAMPLE FILE :  `84_intltz_get_iana_id.php`
- UPDATED EXAMPLE FILE :  `84_grapheme_str_split.php`

---

## 1.1.3 [2024-10-22]

#### PHP < 8.4
- Fixed Function `bcdivmod` for use in PHP < 7.2.0

#### *phpBCL Core and Examples*
- The examples have been changed to adapt to the new structure of the package.

- Removed some source code from all files to make it more accessible to use of the package.

 ```php
// Run only Ascoos Cms
define( 'ALEXSOFT_RUN_CMS', true ); //REMOVED
```    
and 

```php
// $cms_path is Ascoos Cms global variable
require_once($cms_path."/phpBCL/src/coreCompatibilities.php"); // REMOVED
```
*They have been replaced with the internal variable $phpCBL of the package, which you do not need to call.*

>You should load only the file `autoload.php` file into your code.

```php
$path = '[YOUR SITE PATH]';
include $path . '/phpBCL/autoload.php'; / // For general use
```
OR
```php
include '../autoload.php'; // Used by phpBCL examples
```

---
## 1.1.2 [2024-10-04]

- Updated README.md

#### PHP < 8.4
- Added Function `bcdivmod`
- ADDED EXAMPLE FILE :  `84_bcdivmod.php`
- ADDED EXAMPLE FILE :  `84_array_find.php`
- ADDED EXAMPLE FILE :  `84_array_find_key.php`
- ADDED EXAMPLE FILE :  `84_array_all.php`
- ADDED EXAMPLE FILE :  `84_array_any.php`
- ADDED EXAMPLE FILE :  `84_grapheme_str_split.php`

***

## 1.1.1 [2024-09-23]

- Updated README.md

#### PHP < 8.4
- Added Function `array_find`
- Added Function `array_find_key`
- Added Function `array_all`
- Added Function `array_any`
- Added Function `grapheme_str_split`


***

## 1.1.0 [2024-03-20]

- Updated README.md
- ADDED FILE : `LICENSE_AGL-F.md` -- Package License `AGL-F` (Ascoos General License - Free Use).
- ADDED EXAMPLE FILE : `84__http_get_last_response_headers.php` 

#### PHP < 8.4
- Added Function `http_get_last_response_headers`
- Added Function `http_clear_last_response_headers`
- UPDATED FUNCTIONS : `mb_trim`, `mb_ltrim`, `mbrtrim`


***

## 1.0.9 [2024-02-28]

#### PHP < 8.3.0
- Added Function `stream_context_set_options` -- Sets options on the specified context.

#### PHP < 8.2.0
- Added Function `openssl_cipher_key_length` -- Gets the cipher key length.

#### PHP < 8.0.0
- Added Function `preg_last_error_msg` -- Returns the error message of the last PCRE regex execution.
- Added Function `get_debug_type`      -- Returns the resolved name of the PHP variable value.
- Added Function `get_resource_id`     -- Returns an integer identifier for the given resource
- Added Function `fdiv`                -- Divides two numbers, according to IEEE 754


#### PHP < 7.1.0
- Added Function `openssl_get_curve_names` -- Gets the list of available curve names

#### PHP < 7.0.0
- Added Function `intdiv`              -- Integer division

### SIMILAR
- Added Function `alf_get_class()` -- For return getClass() without parameters on PHP >= 8.3.0

***

## 1.0.8 [2024-02-27]

- ADDED FILE : compat_error.php
- Added Class Error `Error`
- Added Class Error `TypeError`
- Added Class Error `ValueError`

#### PHP < 8.2.0
- Added Function `ini_parse_quantity`
- FIXED FUNCTION : `mysqli_execute_query`

***

## 1.0.7 [2024-02-22]

#### PHP < 8.4.0
- Added phpBCL Function `alf_preg_quote`
- FIXED FUNCTIONS : `mb_trim`, `mb_ltrim`, `mbrtrim` for use on PHP 5.6
- FIXED EXAMPLE   : `84__mb_trim.php`
- ADDED SCREENSHOTS

***

## 1.0.6 [2024-02-21]

- FIXED EXAMPLE   : `81__array_is_list.php`
- FIXED EXAMPLE   : `84_mb_ucfirst.php`
- ADDED SCREENSHOTS

***

## 1.0.5 [2024-02-20]

#### PHP < 8.4.0

- ADDED FILE: `/src/phpBCL.php`
- Added phpBCL Function `validate_encoding`

- Added Function `mb_ltrim`
- Added Function `mb_rtrim`
- Added Function `mb_trim`
- ADDED EXAMPLE: `/test/84__mb_trim.php`

- Updated Function `mb_ucfirst`
- Updated Function `mb_lcfirst`
- Updated Example `/test/84__mb_ucfirst.php`

***

## 1.0.4 [2024-02-17]

#### PHP < 8.4.0

- Added file `src/compat/compat_php84x.php`
- Added Function `mb_ucfirst`
- Added Function `mb_lcfirst`
- ADDED EXAMPLE: `/test/84__mb_ucfirst.php`

***

## 1.0.3 [2023-07-12]

#### PHP < 8.2.0

- Added Function `mysqli_execute_query`

***

## 1.0.2 [2023-07-07]

- ADDED EXAMPLES: In folder /phpBCL/test/
- Fixed : Fixed paths for call phpBCL library.

#### PHP < 4.3.0
- Added Constants: `MB_CASE_UPPER`, `MB_CASE_LOWER`, `MB_CASE_TITLE`
- Added Function: `mb_convert_case`

#### PHP < 5.5.0
- Added Functions: `array_column`, `boolval`, `json_last_error_msg`

#### PHP < 7.3.0
- Added Constants: `MB_CASE_FOLD`, `MB_CASE_UPPER_SIMPLE`, `MB_CASE_LOWER_SIMPLE`, `MB_CASE_TITLE_SIMPLE`, `MB_CASE_FOLD_SIMPLE`.  Used by ASCOOS LIBRARY FUNCTION `alf_mb_convert_case` (compat_similar.php)
- Updated Functions: `array_key_first`, `array_key_last`

##### ASCOOS LIBRARY FUNCTION:  
- Added `alf_mb_convert_case` For full compatible similar mb_convert_case.

#### PHP < 7.4.0
- Added Function: `mb_str_split`

#### PHP < 8.0.0
- Updated Functions: `str_contains`, `str_ends_with`, `str_starts_with`
- Updated Classes  : `Stringable`, `PhpToken`

#### PHP < 8.1.0
- Updated Function: `array_is_list`

#### PHP < 8.3.0
- Added Function: `mb_str_pad`


***

## 1.0.1 [2023-06-27]

- Added file compat_similar.php (for similar functions)

#### PHP < 7.1.0
- Added Function: `is_iterable`

#### PHP < 7.3.0
- Added Functions: `array_key_first`, `array_key_last`, `is_countable`

#### PHP < 8.0.0
- Added Class `ValueError` (For php < 8.0.0)


***

## 1.0.0

- Creating Compatibilities
