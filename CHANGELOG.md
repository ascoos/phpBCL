# Changelog

## 1.0.2 [2023-07-07]

- ADDED EXAMPLES: In folder /phpBCL/test/
- Added Constants: `MB_CASE_UPPER`, `MB_CASE_LOWER`, `MB_CASE_TITLE`  (For php < 4.3.0)
- Added Functions: `mb_convert_case`  (For php < 4.3.0)
- Added Functions: `array_column`, `boolval`, `json_last_error_msg`  (For php < 5.5.0)
- Added Constants: `MB_CASE_FOLD`, `MB_CASE_UPPER_SIMPLE`, `MB_CASE_LOWER_SIMPLE`, `MB_CASE_TITLE_SIMPLE`, `MB_CASE_FOLD_SIMPLE` (For php < 7.3.0). Used by ASCOOS LIBRARY FUNCTION `alf_mb_convert_case` (compat_similar.php)
- Added Functions: `mb_str_split` (For php < 7.4.0)
- Added Functions: `mb_str_pad`  (For php < 8.3.0)
- Fixed : Fixed paths for call phpBCL library.
- Added Similar Functions: ASCOOS LIBRARY FUNCTION `alf_mb_convert_case` For full compatible similar mb_convert_case (for use php < 7.3.0)

## 1.0.1

- Added Functions: `is_iterable` (For php < 7.1.0)
- Added Functions: `array_key_first`, `array_key_last`, `is_countable` (For php < 7.3.0)
- Added Class `ValueError` (For php < 8.0.0)
- Added file compat_similar.php (for similar functions)


## 1.0.0

- Creating Compatibilities
