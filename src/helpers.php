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
    function is_not_object($value) {
        return ! is_object($value);
    }
}

if (! function_exists('is_not_resource')) {
    function is_not_resource($value) {
        return ! is_resource($value);
    }
}

if (! function_exists('is_not_scalar')) {
    function is_not_scalar($value) {
        return ! is_scalar($value);
    }
}

if (! function_exists('is_not_string')) {
    function is_not_string($value) {
        return ! is_string($value);
    }
}

if (! function_exists('isnotset')) {
    function isnotset($var, ...$vars) {
        return ! isset($var, $vars);
    }
}

if (! function_exists('not_in_array')) {
    function not_in_array($needle, $haystack, $strict = false) {
        return ! in_array($needle, $haystack, $strict);
    }
}

if (! function_exists('array_key_not_exists')) {
    function array_key_not_exists($key, $array) {
        return ! array_key_exists($key, $array);
    }
}

if (! function_exists('key_not_exists')) {
    function key_not_exists($key, $array) {
        return ! key_exists($key, $array);
    }
}

if (PHP_VERSION >= 8.1) {
    if (! function_exists('array_is_not_list')) {
        function array_is_not_list($array) {
            return ! array_is_list($array);
        }
    }
}

if (! function_exists('is_not_uploaded_file')) {
    function is_not_uploaded_file($filename) {
        return ! is_uploaded_file($filename);
    }
}

if (PHP_VERSION >= 8.0) {
    if (! function_exists('str_not_contains')) {
        function str_not_contains($haystack, $needle) {
            return ! str_contains($haystack, $needle);
        }
    }
}

if (PHP_VERSION >= 8.0) {
    if (! function_exists('str_not_starts_with')) {
        function str_not_starts_with($haystack, $needle) {
            return ! str_starts_with($haystack, $needle);
        }
    }
}

if (PHP_VERSION >= 8.0) {
    if (! function_exists('str_not_ends_with')) {
        function str_not_ends_with($haystack, $needle) {
            return ! str_ends_with($haystack, $needle);
        }
    }
}

if (! function_exists('file_not_exists')) {
    function file_not_exists($filename) {
        return ! file_exists($filename);
    }
}

if (! function_exists('is_not_writable')) {
    function is_not_writable($filename) {
        return ! is_writable($filename);
    }
}

if (! function_exists('is_not_writeable')) {
    function is_not_writeable($filename) {
        return ! is_writeable($filename);
    }
}

if (! function_exists('is_not_readable')) {
    function is_not_readable($filename) {
        return ! is_readable($filename);
    }
}

if (! function_exists('is_not_executable')) {
    function is_not_executable($filename) {
        return ! is_executable($filename);
    }
}

if (! function_exists('is_not_file')) {
    function is_not_file($filename) {
        return ! is_file($filename);
    }
}

if (! function_exists('is_not_dir')) {
    function is_not_dir($filename) {
        return ! is_dir($filename);
    }
}

if (! function_exists('is_not_link')) {
    function is_not_link($filename) {
        return ! is_link($filename);
    }
}

if (! function_exists('is_not_finite')) {
    function is_not_finite($number) {
        return ! is_finite($number);
    }
}

if (! function_exists('is_not_nan')) {
    function is_not_nan($number) {
        return ! is_nan($number);
    }
}

if (! function_exists('is_not_infinite')) {
    function is_not_infinite($number) {
        return ! is_infinite($number);
    }
}

if (! function_exists('not_ctype_alnum')) {
    function not_ctype_alnum($text) {
        return ! ctype_alnum($text);
    }
}

if (! function_exists('not_ctype_alpha')) {
    function not_ctype_alpha($text) {
        return ! ctype_alpha($text);
    }
}

if (! function_exists('not_ctype_cntrl')) {
    function not_ctype_cntrl($text) {
        return ! ctype_cntrl($text);
    }
}

if (! function_exists('not_ctype_digit')) {
    function not_ctype_digit($text) {
        return ! ctype_digit($text);
    }
}

if (! function_exists('not_ctype_lower')) {
    function not_ctype_lower($text) {
        return ! ctype_lower($text);
    }
}

if (! function_exists('not_ctype_graph')) {
    function not_ctype_graph($text) {
        return ! ctype_graph($text);
    }
}

if (! function_exists('not_ctype_print')) {
    function not_ctype_print($text) {
        return ! ctype_print($text);
    }
}

if (! function_exists('not_ctype_punct')) {
    function not_ctype_punct($text) {
        return ! ctype_punct($text);
    }
}

if (! function_exists('not_ctype_space')) {
    function not_ctype_space($text) {
        return ! ctype_space($text);
    }
}

if (! function_exists('not_ctype_upper')) {
    function not_ctype_upper($text) {
        return ! ctype_upper($text);
    }
}

if (! function_exists('not_ctype_xdigit')) {
    function not_ctype_xdigit($text) {
        return ! ctype_xdigit($text);
    }
}

if (! function_exists('invalid_date')) {
    function invalid_date($month, $day, $year) {
        return ! checkdate($month, $day, $year);
    }
}

notempty(1);