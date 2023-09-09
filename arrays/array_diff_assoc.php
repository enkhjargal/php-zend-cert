<?php

/**
 * This PHP project is designed for preparation and practice in pursuit of Zend PHP certification learning. 
 * It is an open and freely available resource for use and sharing by others.
 * 
 * The usage examples of the array_diff_assoc function.
 * 
 * This function computes the difference of arrays with additional index check.
 * 
 * Usage:
 *      array_diff_assoc(array $array, array ...$arrays): array
 * 
 * @param:
 *      $array - The array to compare from.
 *      $arrays - Arrays to compare against.
 * 
 * @return    array - Returns an array containing all the values from array that are not present in any of the other arrays.
 * 
 * Run: php arrays/array_diff_assoc.php
 * 
 * PHP version 8.0 and above.
 * 
 * @author    Enkhjargal Lkhagvaa
 * @since     September 9, 2023
 * @copyright 2023 Enkhjargal Lkhagvaa
 * @link      https://github.com/enkhjargal/php-zend-cert
 * @see       https://www.zend.com/training/php
 */

// Default Configuration
$defaultConfig = [
  'theme' => 'light',
  'font_size' => 16,
  'language' => 'english',
  'timezone' => 'Asia/Seoul',
];

// User-specific Configuration
$userConfig = [
  'theme' => 'dark',
  'font_size' => 18,
  'language' => 'español',
];

// Check differences between default config and user config.
$changes = array_diff_assoc($userConfig, $defaultConfig);

var_dump(
  'check differences between arrays',
  __LINE__,
  $changes
);
