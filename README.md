<p align="center"><img src="https://dl.ascoos.com/images/ascoos.png" height=120 /></p>

# PHP Backwards Compatibility Library (phpBCL)

## Description

These is PHP Backwards Compatibility Library (phpBCL).

***

# CONTENTS

| ABBR | DESCRIPT 
| ---- | ---------------------------- 
| [C]  | CLASS
| [F]  | FUNCTION
| [I]  | INTERFACE
| [N]  | CONSTANT
| [V]  | VARIABLE

## CORE Classes and Functions Compatibilities
| < PHP Ver |     Classes - Functions      | Description 
| --------- | ---------------------------- | -------------------------
|   7.4.0   | [F] password_algos           | Get available password hashing algorithm IDs
|   8.0.0   | [F] str_contains             | Determine if a string contains a given substring
|   8.0.0   | [F] str_ends_with            | Checks if a string ends with a given substring
|   8.0.0   | [F] str_starts_with          | Checks if a string starts with a given substring
|   8.0.0   | [I] Stringable               | The Stringable interface denotes a class as having a __toString() method
|   8.0.0   | [C] PhpToken                 | This class provides an alternative to token_get_all().
|   8.1.0   | [F] array_is_list            | Checks whether a given array is a list
|   8.3.0   | [F] json_validate            | Validate an string if contains a valid json.


## CORE Deprecated Compatibilities
|   PHP Ver  |     Classes - Functions      | Description 
| ---------- | ---------------------------- | -------------------------
|  >= 8.0.0  | [F] each                     | Return the current key and value pair from an array and advance the array cursor.
|  >= 8.0.0  | [N] MB_OVERLOAD_MAIL         | https://www.php.net/manual/en/mbstring.constants.php
|  >= 8.0.0  | [N] MB_OVERLOAD_STRING       | https://www.php.net/manual/en/mbstring.constants.php
|  >= 8.0.0  | [N] MB_OVERLOAD_REGEX        | https://www.php.net/manual/en/mbstring.constants.php
|  >= 8.1.0  | [C] ENT_COMPAT               | https://www.php.net/manual/en/function.htmlspecialchars.php

