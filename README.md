# not-operators-helpers
Define function for NOT operators of built-in functions in PHP 

# Usage

Instead of use `!` operator like below.
```php
if (!empty($value)) {}
```
When I use `!` operator, I feel like my brain take 2 times to translate it to `not` keyword. So we can change to use like below:
```php
if (notempty($value)) {}
```

For list of functions you can reference to file `src/helpers.php`

# How to install
```
composer require vuvanly/not-operators-helpers
```
