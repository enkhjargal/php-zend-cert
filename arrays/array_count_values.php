<?php
/**
 * This PHP project is designed for preparation and practice in pursuit of Zend PHP certification learning. 
 * It is an open and freely available resource for use and sharing by others.
 * 
 * The usage examples of the array_count_values function.
 * 
 * This function counts the occurrences of each distinct value in an array.
 * 
 * Usage:
 *      array_count_values(array $array): array
 * 
 * @param:
 *      $array - The array of values to count.
 * 
 * @return    array - Returns an associative array of values from array as keys and their count as value.
 * 
 * @throws  E_WARNING   Throws E_WARNING for every element which is not string or int.
 * 
 * Run: php arrays/array_count_values.php
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
$array = ['hello', 'world', 'hello', 'php', 'say', 'hi', 'hello'];

$count = array_count_values($array);

var_dump(
  'count array values',
  __LINE__,
  $count
);