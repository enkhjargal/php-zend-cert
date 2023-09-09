<?php
/**
 * This PHP project is designed for preparation and practice in pursuit of Zend PHP certification learning. 
 * It is an open and freely available resource for use and sharing by others.
 * 
 * The usage examples of the array_combine function.
 * 
 * This function generates an array by utilizing one array for specifying keys and another for providing values.
 * 
 * Usage:
 *      array_combine(array $keys, array $values): array
 * 
 * @param:
 *      $keys - Array of keys to be used. Illegal values for key will be converted to string.
 *      $values - Array of values to be used
 * 
 * @return    array - Returns the combined array.
 * 
 * Run: php arrays/array_combine.php
 * 
 * PHP version 8.0 and above.
 * 
 * @author    Enkhjargal Lkhagvaa
 * @since     September 9, 2023
 * @copyright 2023 Enkhjargal Lkhagvaa
 * @link      https://github.com/enkhjargal/php-zend-cert
 * @see       https://www.zend.com/training/php
 */

// Sample array
$keys = ['ID', 'Country', 'Continent', 'City'];
$values = [1, 'South Korea', 'Asia', 'Goyang-si'];

$combined = array_combine($keys, $values);

var_dump(
  'combined array result',
  __LINE__,
  $combined
);