<p align="center"><img src="https://dl.ascoos.com/images/ascoos.png" height=120 /></p>

# PHP Backwards Compatibility Library (phpBCL)

## Description

These is PHP Backwards Compatibility Library (phpBCL).

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

1. [GITHUB](https://github.com/ascoos/phpBCL/releases)
2. [www.phpclasses.org](https://www.phpclasses.org/package/12926.html)


<br>

***

<br>

# Installation

1. Download latest release
1. Unzip in your working directory
1. add [ require_once("/phpBCL/src/coreCompatibilities.php"); ] in root index.php
1. Run your code

<br>

***

<br>

# Changelog

## 1.0.3 [2023-07-12]

#### PHP < 8.2.0

- Added Functions `mysqli_execute_query`

***

## 1.0.2 [2023-07-07]

- ADDED EXAMPLES: In folder /phpBCL/test/
- Fixed : Fixed paths for call phpBCL library.

#### PHP < 4.3.0
- Added Constants: `MB_CASE_UPPER`, `MB_CASE_LOWER`, `MB_CASE_TITLE`
- Added Functions: `mb_convert_case`

#### PHP < 5.5.0
- Added Functions: `array_column`, `boolval`, `json_last_error_msg`

#### PHP < 7.3.0
- Added Constants: `MB_CASE_FOLD`, `MB_CASE_UPPER_SIMPLE`, `MB_CASE_LOWER_SIMPLE`, `MB_CASE_TITLE_SIMPLE`, `MB_CASE_FOLD_SIMPLE`.  Used by ASCOOS LIBRARY FUNCTION `alf_mb_convert_case` (compat_similar.php)
- Updated Functions: `array_key_first`, `array_key_last`
- Added Similar Functions: ASCOOS LIBRARY FUNCTION `alf_mb_convert_case` For full compatible similar mb_convert_case.

#### PHP < 7.4.0
- Added Functions: `mb_str_split`

#### PHP < 8.0.0
- Updated Functions: `str_contains`, `str_ends_with`, `str_starts_with`
- Updated Classes  : `Stringable`, `PhpToken`

#### PHP < 8.1.0
- Updated Functions: `array_is_list`

#### PHP < 8.3.0
- Added Functions: `mb_str_pad`


***

## 1.0.1 [2023-06-27]

- Added file compat_similar.php (for similar functions)

#### PHP < 7.1.0
- Added Functions: `is_iterable`

#### PHP < 7.3.0
- Added Functions: `array_key_first`, `array_key_last`, `is_countable`

#### PHP < 8.0.0
- Added Class `ValueError` (For php < 8.0.0)


***

## 1.0.0

- Creating Compatibilities

