## Why You Need a PHP Backwards Compatibility Library Before You Upgrade to a Newer PHP Version

Whenever you consider upgrading to a newer PHP version, you need to be careful because parts of the code of your PHP projects may stop working.

Read this article to learn more about the issues you may face during the PHP version upgrade and how the PHP Backwards Compatibility Library may help you to solve those issues.

## Why It Is Necessary a PHP Backwards Compatibility Library

Each new version of PHP incorporates new features and functions, some of which are necessary because they fix programming logic. Still, others are included or removed to make programmers' lives more difficult.

This active activity has made PHP developers a target of this logic. A big part of the daily grind is finding ways to make the project we're building compatible with most versions of PHP.

This activity has made PHP developers a target of this logic. A big part of the daily grind is finding ways to make the project we're building compatible with most versions of PHP.

Now, we have reached the point in each sub-version of PHP to have at least one deprecated code and one declaration that this code will be deleted in some future version.

Common sense would suggest that it would be preferable to move code that the PHP core developers deem to be deprecated into a new .dll (.so) file that would be available to anyone who wanted to use the deprecated code.

Another common sense would say, "If you take something away, you must give something." They could provide each deprecated code with a compatible PHP code with the name of the deprecated functions. But even that is not possible.

This painstaking task has been left entirely in the hands of PHP users.

## What is the PHP Backwards Compatibility Library (phpBCL)

One effort to avoid this painstaking task of making your project PHP code work with newer PHP versions is the phpBCL library (PHP Backwards Compatibility Library).

This package comes to correct, in part, the "deprecated stupidity," as I call it.

First of all, the phpBCL library is a public-use adapted part (powerful and dynamic though) of the full library that exists in the Ascoos Cms kernel and is intended to adapt the features of the new versions, to the code written on the based on older versions.

E.g., in PHP 8.3, a new function, json_validate, has been added, which aims to check the validity of a JSON to a given string.

In the past, each programmer made their function. But with version 8.3 ready for use by the end of 2023, we won't need to write additional code.

In the phpBCL library, there is already this function with functionality exactly like the upcoming built-in function.

So we can now change the code using the phpBCL library function, and when 8.3 is ready, phpBCL itself knows that it should no longer load its contents that are the same as those built into this version.

But for older versions, it will still load the code that emulates features with version 8.3.

But the same happens for features of older versions where for each older version, phpBCL loads the features of all newer versions.

E.g., if you run a script in PHP 5.6, phpBCL will load as many features as it has implemented for versions 7.0 - 7.4, 8.0 through 8.3. So even if a script is written for an old version, it is possible to run many of the additions made in newer versions.

On the other hand, since we have the "stupidity of deprecated," if we have made a script and are trying to adapt it to a new version and some of the functions we were using no longer exist, phpBCL comes to give us another chance.

With the built-in functions found in the compat_deprecated.php file, these deprecated functions can still be used.

A third part implemented in the phpBCL library is that of similar functions.

In the compat_similar.php file, you will find part of the ASCOOS LIBRARY FUNCTIONS (ALF) that simulates functions that have not been removed but have changed and do not work the same in all versions.

Thus, functions were created with the same name but with the addition of [alf_] in front to distinguish them from the built-in functions.
The code written in these functions, in some cases, performs 100% of the same functions as those embedded in the kernel, in other cases, 70%-90%.

This is embedded in your code by calling only the coreCompatibilities.php file.

The effort to develop phpBCL is dynamic and continuous, and surely the help of all users with observations, comments, improvements, and code suggestions, will help the entire PHP community to relieve an extra burden that PHP developers have placed on us.

