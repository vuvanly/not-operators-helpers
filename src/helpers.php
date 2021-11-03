<?php

if (! function_exists('notempty')) {
    /**
     * Determine whether a variable is considered to be NOT empty.
     * It is a reverse function of empty function
     * @link https://php.net/manual/en/function.empty.php
     * @param mixed $var <p>Variable to be checked.</p>
     * @return bool <p><b>TRUE</b> if var exists and has a non-empty, non-zero value. Otherwise returns <b>FALSE</b>.<p>
     */
    function notempty($var) {
        return ! empty($var);
    }
}

if (! function_exists('is_not_array')) {
    /**
     * Finds whether a variable is NOT an array
     * It is a reverse function of is_array function
     * @link https://php.net/manual/en/function.is-array.php
     * @param mixed $var <p>
     * The variable being evaluated.
     * </p>
     * @return bool true if var is NOT an array,
     * false otherwise.
     */
    function is_not_array($var) {
        return ! is_array($var);
    }
}

if (! function_exists('is_not_bool')) {
    /**
     * Finds out whether a variable is NOT a boolean
     * It is a reverse function of is_bool function
     * @link https://php.net/manual/en/function.is-bool.php
     * @param mixed $var <p>
     * The variable being evaluated.
     * </p>
     * @return bool true if var is NOT a boolean,
     * false otherwise.
     */
    function is_not_bool($var) {
        return ! is_bool($var);
    }
}

if (! function_exists('is_not_callable')) {
    /**
     * Verify that the contents of a variable can NOT be called as a function
     * It is a reverse function of is_callable function
     * @link https://php.net/manual/en/function.is-callable.php
     * @param callable|mixed $var
     * @param bool $syntax_only [optional]
     * @param string $callable_name [optional]
     * @return bool <b>TRUE</b> if $var is NOT callable, <b>FALSE</b>
     * otherwise.
     */
    function is_not_callable($var, $syntax_only = false, &$callable_name = null) {
        return ! is_callable($var, $syntax_only, $callable_name);
    }
}

if (PHP_VERSION >= 7.3) {
    if (! function_exists('is_not_countable')) {
        /**
         * Verify that the contents of a variable is NOT a countable value
         * It is a reverse function of is_countable function
         * @link https://secure.php.net/is_countable
         *
         * @param mixed $var The value to check
         * @return bool <b>TRUE</b> if $var is NOT countable, <b>FALSE</b> otherwise.
         */
        function is_not_countable($var) {
            return ! is_countable($var);
        }
    }
}

if (! function_exists('is_not_double')) {
    /**
     * It is a reverse function of is_double function
     * @link https://php.net/manual/en/function.is-double.php
     * @param mixed $var
     * @return bool true if var is a NOT float,
     * false otherwise.
     */
    function is_not_double($var) {
        return ! is_double($var);
    }
}

if (! function_exists('is_not_float')) {
    /**
     * Finds whether the type of a variable is NOT float
     * It is a reverse function of is_float function
     * @link https://php.net/manual/en/function.is-float.php
     * @param mixed $var
     * @return bool true if var is a NOT float,
     * false otherwise.
     */
    function is_not_float($var) {
        return ! is_float($var);
    }
}

if (! function_exists('is_not_int')) {
    /**
     * Find whether the type of a variable is NOT integer
     * It is a reverse function of is_int function
     * @link https://php.net/manual/en/function.is-int.php
     * @param mixed $var
     * @return bool true if var is NOT an integer,
     * false otherwise.
     */
    function is_not_int($var) {
        return ! is_int($var);
    }
}

if (! function_exists('is_not_integer')) {
    /**
     * Find whether the type of a variable is NOT integer
     * It is a reverse function of is_int function
     * @link https://php.net/manual/en/function.is-integer.php
     * @param mixed $var
     * @return bool true if var is NOT an integer,
     * false otherwise.
     */
    function is_not_integer($var) {
        return ! is_integer($var);
    }
}

if (! function_exists('is_not_long')) {
    /**
     * Find whether the type of a variable is NOT integer
     * It is a reverse function of is_long function
     * @link https://php.net/manual/en/function.is-long.php
     * @param mixed $var
     * @return bool true if var is NOT an integer,
     * false otherwise.
     */
    function is_not_long($var) {
        return ! is_long($var);
    }
}

if (PHP_VERSION >= 7.1) {
    if (! function_exists('is_not_iterable')) {
        /**
         * Verify that the contents of a variable is NOT accepted by the iterable pseudo-type,
         * i.e. that it is NOT an array or an object implementing Traversable
         * It is a reverse function of is_iterable function
         * @param mixed $value
         * @return bool
         * @link https://php.net/manual/en/function.is-iterable.php
         */
        function is_not_iterable($value) {
            return ! is_iterable($value);
        }
    }
}


if (! function_exists('is_not_null')) {
    /**
     * Finds whether a variable is NOT null
     * It is a reverse function of is_null function
     * @link https://php.net/manual/en/function.is-null.php
     * @param mixed $var
     * @return bool true if var is NOT null, false
     * otherwise.
     */
    function is_not_null($var) {
        return ! is_null($var);
    }
}

if (! function_exists('is_not_numeric')) {
    /**
     * Finds whether a variable is NOT a number or a numeric string
     * It is a reverse function of is_numeric function
     * @link https://php.net/manual/en/function.is-numeric.php
     * @param mixed $var
     * @return bool true if var is a number or a numeric
     * string, false otherwise.
     */
    function is_not_numeric($var) {
        return ! is_numeric($var);
    }
}

if (! function_exists('is_not_object')) {
    /**
     * Finds whether a variable is NOT an object
     * It is a reverse function of is_object function
     * @link https://php.net/manual/en/function.is-object.php
     * @param mixed $var
     * @return bool true if var is NOT an object,
     * false otherwise.
     */
    function is_not_object($var) {
        return ! is_object($var);
    }
}

if (! function_exists('is_not_resource')) {
    /**
     * Finds whether a variable is a NOT resource
     * It is a reverse function of is_resource function
     * @link https://php.net/manual/en/function.is-resource.php
     * @param mixed $var
     * @return bool true if var is NOT a resource,
     * false otherwise.
     */
    function is_not_resource($var) {
        return ! is_resource($var);
    }
}

if (! function_exists('is_not_scalar')) {
    /**
     * Finds whether a variable is NOT a scalar
     * It is a reverse function of is_scalar function
     * @link https://php.net/manual/en/function.is-scalar.php
     * @param mixed $var
     * @return bool true if var is NOT a scalar false
     * otherwise.
     */
    function is_not_scalar($var) {
        return ! is_scalar($var);
    }
}

if (! function_exists('is_not_string')) {
    /**
     * Find whether the type of a variable is NOT string
     * It is a reverse function of is_string function
     * @link https://php.net/manual/en/function.is-string.php
     * @param mixed $var
     * @return bool true if var is NOT of type string,
     * false otherwise.
     */
    function is_not_string($var) {
        return ! is_string($var);
    }
}

if (! function_exists('isnotset')) {
    /**
     * <p>Determine if a variable is NOT set OR is <b>NULL</b>.
     * It is a reverse function of isset function
     * @link https://php.net/manual/en/function.isset.php
     * @param mixed $var
     * @param mixed $_ [optional]
     * @return bool Returns <b>TRUE</b> if var NOT exists OR has value is <b>NULL</b>, <b>FALSE</b> otherwise.
     */
    function isnotset($var, ...$vars) {
        return ! isset($var, $vars);
    }
}

if (! function_exists('not_in_array')) {
    /**
     * Checks if a value NOT exists in an array
     * It is a reverse function of in_array function
     * @link https://php.net/manual/en/function.in-array.php
     * @param mixed $needle
     * @param array $haystack
     * @param bool $strict [optional]
     * @return bool true if needle is NOT found in the array,
     * false otherwise.
     */
    function not_in_array($needle, $haystack, $strict = false) {
        return ! in_array($needle, $haystack, $strict);
    }
}

if (! function_exists('array_key_not_exists')) {
    /**
     * Checks if the given key or index NOT exists in the array
     * It is a reverse function of array_key_exists function
     * @link https://php.net/manual/en/function.array-key-exists.php
     * @param mixed $key
     * @param array|ArrayObject $array
     * @return bool true if given key or index NOT exists in the array, false otherwise.
     */
    function array_key_not_exists($key, $array) {
        return ! array_key_exists($key, $array);
    }
}

if (! function_exists('key_not_exists')) {
    /**
     * Checks if the given key or index NOT exists in the array.
     * It is a reverse function of array_key_exists function
     * @link https://php.net/manual/en/function.array-key-exists.php
     * @param mixed $key
     * @param array $array
     * @return bool true if given key or index NOT exists in the array, false otherwise.
     */
    function key_not_exists($key, $array) {
        return ! key_exists($key, $array);
    }
}

if (PHP_VERSION >= 8.1) {
    if (! function_exists('array_is_not_list')) {
        /**
         * Checks whether a given array is NOT a list
         * It is a reverse function of array_is_list function
         * @link https://www.php.net/manual/en/function.array-is-list.php
         * @param array $array
         * @return bool
         */
        function array_is_not_list($array) {
            return ! array_is_list($array);
        }
    }
}

if (! function_exists('is_not_uploaded_file')) {
    /**
     * Tells whether NOT the file was uploaded via HTTP POST
     * It is a reverse function of is_uploaded_file function
     * @link https://php.net/manual/en/function.is-uploaded-file.php
     * @param string $filename
     * @return bool
     */
    function is_not_uploaded_file($filename) {
        return ! is_uploaded_file($filename);
    }
}

if (PHP_VERSION >= 8.0) {
    if (! function_exists('str_not_contains')) {
        /**
         * Checks if a string NOT contains a given string
         * It is a reverse function of str_contains function
         * @link https://www.php.net/manual/en/function.str-contains.php
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        function str_not_contains($haystack, $needle) {
            return ! str_contains($haystack, $needle);
        }
    }
}

if (PHP_VERSION >= 8.0) {
    if (! function_exists('str_not_starts_with')) {
        /**
         * Checks if a string NOT starts with a given string
         * It is a reverse function of str_starts_with function
         * @link https://www.php.net/manual/en/function.str-starts-with.php
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        function str_not_starts_with($haystack, $needle) {
            return ! str_starts_with($haystack, $needle);
        }
    }
}

if (PHP_VERSION >= 8.0) {
    if (! function_exists('str_not_ends_with')) {
        /**
         * Checks if a string NOT ends with a given string
         * It is a reverse function of str_ends_with function
         * @link https://www.php.net/manual/en/function.str-ends-with.php
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        function str_not_ends_with($haystack, $needle) {
            return ! str_ends_with($haystack, $needle);
        }
    }
}

if (! function_exists('file_not_exists')) {
    /**
     * Checks whether a file or directory NOT exists
     * It is a reverse function of file_exists function
     * @link https://php.net/manual/en/function.file-exists.php
     * @param string $filename
     * @return bool true if the file or directory specified by
     * filename NOT exists; false otherwise.
     */
    function file_not_exists($filename) {
        return ! file_exists($filename);
    }
}

if (! function_exists('is_not_writable')) {
    /**
     * Tells whether the filename is NOT writable
     * It is a reverse function of is_writable function
     * @link https://php.net/manual/en/function.is-writable.php
     * @param string $filename
     * @return bool true if the filename NOT exists OR is NOT
     * writable.
     */
    function is_not_writable($filename) {
        return ! is_writable($filename);
    }
}

if (! function_exists('is_not_writeable')) {
    /**
     * Tells whether the filename is NOT writable
     * It is a reverse function of is_writeable function
     * @link https://php.net/manual/en/function.is-writeable.php
     * @param string $filename
     * @return bool true if the filename NOT exists OR is NOT
     * writable.
     */
    function is_not_writeable($filename) {
        return ! is_writeable($filename);
    }
}

if (! function_exists('is_not_readable')) {
    /**
     * Tells whether a file NOT exists OR is NOT readable
     * It is a reverse function of is_readable function
     * @link https://php.net/manual/en/function.is-readable.php
     * @param string $filename
     * @return bool true if the file or directory specified by
     * filename NOT exists OR is NOT readable, false otherwise.
     */
    function is_not_readable($filename) {
        return ! is_readable($filename);
    }
}

if (! function_exists('is_not_executable')) {
    /**
     * Tells whether a file NOT exists OR is NOT executable
     * It is a reverse function of is_executable function
     * @link https://php.net/manual/en/function.is-executable.php
     * @param string $filename
     * @return bool true if the file or directory specified by
     * filename NOT exists OR is NOT executable, false otherwise.
     */
    function is_not_executable($filename) {
        return ! is_executable($filename);
    }
}

if (! function_exists('is_not_file')) {
    /**
     * Tells whether the filename is NOT a regular file
     * It is a reverse function of is_file function
     * @link https://php.net/manual/en/function.is-file.php
     * @param string $filename
     * @return bool true if the filename NOT exists OR is NOT a regular file, false
     * otherwise.
     */
    function is_not_file($filename) {
        return ! is_file($filename);
    }
}

if (! function_exists('is_not_dir')) {
    /**
     * Tells whether the filename is NOT a directory
     * It is a reverse function of is_dir function
     * @link https://php.net/manual/en/function.is-dir.php
     * @param string $filename
     * @return bool true if the filename NOT exists OR is NOT a directory, false
     * otherwise.
     */
    function is_not_dir($filename) {
        return ! is_dir($filename);
    }
}

if (! function_exists('is_not_link')) {
    /**
     * Tells whether the filename is NOT a symbolic link
     * It is a reverse function of is_link function
     * @link https://php.net/manual/en/function.is-link.php
     * @param string $filename
     * @return bool true if the filename NOT exists OR is NOT a symbolic link, false
     * otherwise.
     */
    function is_not_link($filename) {
        return ! is_link($filename);
    }
}

if (! function_exists('is_not_finite')) {
    /**
     * Finds whether a value is NOT a legal finite number
     * It is a reverse function of is_finite function
     * @link https://php.net/manual/en/function.is-finite.php
     * @param float $val
     * @return bool true if val is NOT a legal finite
     * number within the allowed range for a PHP float on this platform,
     * else false.
     */
    function is_not_finite($val) {
        return ! is_finite($val);
    }
}

if (! function_exists('is_not_nan')) {
    /**
     * Finds whether a value is a number
     * It is a reverse function of is_nan function
     * @link https://php.net/manual/en/function.is-nan.php
     * @param float $val
     * @return bool true if val is not 'not a number',
     * else false.
     */
    function is_not_nan($val) {
        return ! is_nan($val);
    }
}

if (! function_exists('is_not_infinite')) {
    /**
     * Finds whether a value is NOT infinite
     * It is a reverse function of is_infinite function
     * @link https://php.net/manual/en/function.is-infinite.php
     * @param float $val
     * @return bool true if val is NOT infinite, else false.
     */
    function is_not_infinite($val) {
        return ! is_infinite($val);
    }
}

if (! function_exists('not_ctype_alnum')) {
    /**
     * Check NOT alphanumeric character(s)
     * It is a reverse function of ctype_alnum function
     * @link https://php.net/manual/en/function.ctype-alnum.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in <i>text</i> is either
     * a letter or a digit, <b>FALSE</b> otherwise.
     */
    function not_ctype_alnum($text) {
        return ! ctype_alnum($text);
    }
}

if (! function_exists('not_ctype_alpha')) {
    /**
     * Check NOT alphabetic character(s)
     * It is a reverse function of ctype_alpha function
     * @link https://php.net/manual/en/function.ctype-alpha.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in <i>text</i> is
     * a letter from the current locale, <b>FALSE</b> otherwise.
     */
    function not_ctype_alpha($text) {
        return ! ctype_alpha($text);
    }
}

if (! function_exists('not_ctype_cntrl')) {
    /**
     * Check NOT control character(s)
     * It is a reverse function of ctype_cntrl function
     * @link https://php.net/manual/en/function.ctype-cntrl.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in <i>text</i> is
     * a control character from the current locale, <b>FALSE</b> otherwise.
     */
    function not_ctype_cntrl($text) {
        return ! ctype_cntrl($text);
    }
}

if (! function_exists('not_ctype_digit')) {
    /**
     * Check NOT numeric character(s)
     * It is a reverse function of ctype_digit function
     * @link https://php.net/manual/en/function.ctype-digit.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in the string
     * <i>text</i> is a decimal digit, <b>FALSE</b> otherwise.
     */
    function not_ctype_digit($text) {
        return ! ctype_digit($text);
    }
}

if (! function_exists('not_ctype_lower')) {
    /**
     * Check NOT lowercase character(s)
     * It is a reverse function of ctype_lower function
     * @link https://php.net/manual/en/function.ctype-lower.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in <i>text</i> is
     * a lowercase letter in the current locale.
     */
    function not_ctype_lower($text) {
        return ! ctype_lower($text);
    }
}

if (! function_exists('not_ctype_graph')) {
    /**
     * Check NOT any printable character(s) except space
     * It is a reverse function of ctype_graph function
     * @link https://php.net/manual/en/function.ctype-graph.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in <i>text</i> is
     * printable and actually creates visible output (no white space), <b>FALSE</b>
     * otherwise.
     */
    function not_ctype_graph($text) {
        return ! ctype_graph($text);
    }
}

if (! function_exists('not_ctype_print')) {
    /**
     * Check NOT printable character(s)
     * It is a reverse function of ctype_print function
     * @link https://php.net/manual/en/function.ctype-print.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in <i>text</i>
     * will actually create output (including blanks). Returns <b>FALSE</b> otherwise.
     */
    function not_ctype_print($text) {
        return ! ctype_print($text);
    }
}

if (! function_exists('not_ctype_punct')) {
    /**
     * Check NOT any printable character which is not whitespace or an alphanumeric character
     * It is a reverse function of ctype_punct function
     * @link https://php.net/manual/en/function.ctype-punct.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in <i>text</i>
     * is printable, but neither letter, digit or blank, <b>FALSE</b> otherwise.
     */
    function not_ctype_punct($text) {
        return ! ctype_punct($text);
    }
}

if (! function_exists('not_ctype_space')) {
    /**
     * Check NOT whitespace character(s)
     * It is a reverse function of ctype_space function
     * @link https://php.net/manual/en/function.ctype-space.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in <i>text</i>
     * creates some sort of white space, <b>FALSE</b> otherwise. Besides the
     * blank character this also includes tab, vertical tab, line feed,
     * carriage return and form feed characters.
     */
    function not_ctype_space($text) {
        return ! ctype_space($text);
    }
}

if (! function_exists('not_ctype_upper')) {
    /**
     * Check NOT uppercase character(s)
     * It is a reverse function of ctype_upper function
     * @link https://php.net/manual/en/function.ctype-upper.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in <i>text</i> is
     * an uppercase letter in the current locale.
     */
    function not_ctype_upper($text) {
        return ! ctype_upper($text);
    }
}

if (! function_exists('not_ctype_xdigit')) {
    /**
     * Check NOT all character(s) representing a hexadecimal digit
     * It is a reverse function of ctype_xdigit function
     * @link https://php.net/manual/en/function.ctype-xdigit.php
     * @param string $text
     * @return bool <b>TRUE</b> if NOT every character in <i>text</i> is
     * a hexadecimal 'digit', that is a decimal digit or a character from
     * [A-Fa-f] , <b>FALSE</b> otherwise.
     */
    function not_ctype_xdigit($text) {
        return ! ctype_xdigit($text);
    }
}

if (! function_exists('invalid_date')) {
    /**
     * Validate NOT a Gregorian date
     * It is a reverse function of check_date function
     * @link https://php.net/manual/en/function.checkdate.php
     * @param int $month
     * @param int $day
     * @param int $year
     * @return bool true if the date given is INVALID; otherwise returns false.
     */
    function invalid_date($month, $day, $year) {
        return ! checkdate($month, $day, $year);
    }
}
