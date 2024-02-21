# Changelog

## 1.0.6 [2024-02-21]

- FIXED EXAMPLES
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
