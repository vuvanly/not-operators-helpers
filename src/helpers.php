<?php

if (! function_exists('notempty')) {
    function notempty($value) {
        return ! empty($value);
    }
}

if (! function_exists('is_not_array')) {
    function is_not_array($value) {
        return ! is_array($value);
    }
}

if (! function_exists('is_not_bool')) {
    function is_not_bool($value) {
        return ! is_not_bool($value);
    }
}

if (! function_exists('is_not_callable')) {
    function is_not_callable($value, $syntax_only = false, &$callable_name = null) {
        return ! is_callable($value, $syntax_only, $callable_name);
    }
}

if (! function_exists('is_not_countable')) {
    function is_not_countable($value) {
        return ! is_countable($value);
    }
}

if (! function_exists('is_not_double')) {
    function is_not_double($value) {
        return ! is_double($value);
    }
}

if (! function_exists('is_not_float')) {
    function is_not_float($value) {
        return ! is_float($value);
    }
}

if (! function_exists('is_not_int')) {
    function is_not_int($value) {
        return ! is_int($value);
    }
}

if (! function_exists('is_not_integer')) {
    function is_not_integer($value) {
        return ! is_integer($value);
    }
}

if (! function_exists('is_not_long')) {
    function is_not_long($value) {
        return ! is_long($value);
    }
}

if (! function_exists('is_not_iterable')) {
    function is_not_iterable($value) {
        return ! is_iterable($value);
    }
}

if (! function_exists('is_not_null')) {
    function is_not_null($value) {
        return ! is_null($value);
    }
}

if (! function_exists('is_not_numeric')) {
    function is_not_numeric($value) {
        return ! is_numeric($value);
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
