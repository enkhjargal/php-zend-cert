<?php
/**
 * The usage examples of the common array functions.
 * 
 * This PHP project is designed for preparation and practice in pursuit of Zend PHP certification learning. 
 * It is an open and freely available resource for use and sharing by others.
 * 
 * Usage: php arrays/array.php
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
 * Sample arrays
 */
$real_array = ['php', 'zend', 'ubuntu', 'macos', 'windows'];
$not_array = ('php');

// It checks whether a variable is an array or not.
var_dump(
  'check-real-array',
  __LINE__,
  is_array($real_array) // If it's an array, it returns true; otherwise, it returns false.
);

echo PHP_EOL; // Print an empty line to separate two tests.

// For now, check the non-array data.
var_dump(
  'check-not-array',
  __LINE__,
  is_array($not_array) // It will return false.
);