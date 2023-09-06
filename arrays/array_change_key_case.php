<?php
/**
 * This PHP project is designed for preparation and practice in pursuit of Zend PHP certification learning. 
 * It is an open and freely available resource for use and sharing by others.
 * 
 * The usage examples of the array_change_key_case function.
 * 
 * This function changes the case of all keys in an array.
 * 
 * Usage:
 *      array_change_key_case(array $array, int $case = CASE_LOWER): array
 * 
 * @param:
 *      $array - The array to work on
 *      $case  - Either CASE_UPPER or CASE_LOWER (default)
 * 
 * @return    array|null
 * 
 * Run: php arrays/array_change_key_case.php
 * 
 * PHP version 8.0 and above.
 * 
 * @author    Enkhjargal Lkhagvaa
 * @since     September 6, 2023
 * @copyright 2023 Enkhjargal Lkhagvaa
 * @link      https://github.com/enkhjargal/php-zend-cert
 * @see       https://www.zend.com/training/php
 */

/**
 * Sample array
 */
$real_array = [
  'beat' => 1,
  'Box' => 2,
  'HIT' => 3,
  'biT' => 4
];

// Alters the character case of all keys within an array to lower case.
var_dump(
  'change all keys to lowercase',
  __LINE__,
  array_change_key_case($real_array, CASE_LOWER) // It will return an array with all lowercased keys.
);

echo PHP_EOL; // Print an empty line to separate two tests.

// Alters the character case of all keys within an array to upper case.
var_dump(
  'change all keys to uppercase',
  __LINE__,
  array_change_key_case($real_array, CASE_UPPER) // It will return an array with all keys converted to uppercase.
);