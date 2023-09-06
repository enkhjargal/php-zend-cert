<?php
/**
 * This PHP project is designed for preparation and practice in pursuit of Zend PHP certification learning. 
 * It is an open and freely available resource for use and sharing by others.
 * 
 * The usage examples of the array_chunk function.
 * 
 * This function splits an array into chunks.
 * 
 * Usage:
 *      array_chunk(array $array, int $length, bool $preserve_keys = false): array
 * 
 * @param:
 *      $array - The array to work on
 *      $length - The size of each chunk
 *      $preserve_keys - When set to true, keys will be retained; otherwise,
 *            the default behavior is to reindex the chunk numerically, which is false.
 * 
 * @return    array|null - Returns a multidimensional numerically indexed array,
 *                  starting with zero, with each dimension containing length elements.
 * 
 * @throws    ValueError  If length is less than 1, a ValueError will be thrown.
 * 
 * Run: php arrays/array_chunk.php
 * 
 * PHP version 8.0 and above.
 * 
 * @author    Enkhjargal Lkhagvaa
 * @since     September 6, 2023
 * @copyright 2023 Enkhjargal Lkhagvaa
 * @link      https://github.com/enkhjargal/php-zend-cert
 * @see       https://www.zend.com/training/php
 */

// Sample array
$array = ['zara', 'gucci', 'chanel', 'dior', 'versace', 'givenchy', 'valentino'];

// Group the array into segments of a specified length.
var_dump(
  'group array with given length',
  __LINE__,
  array_chunk($array, 3) // Returns a grouped numerically indexed array.
);

echo PHP_EOL; // Print an empty line to separate two tests.

// Group the array into segments of a specified length (reindexed).
var_dump(
  'group array with given length',
  __LINE__,
  array_chunk($array, 3, false) // Returns a grouped numerically reindexed array.
);