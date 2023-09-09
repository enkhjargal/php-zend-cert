<?php
/**
 * This PHP project is designed for preparation and practice in pursuit of Zend PHP certification learning. 
 * It is an open and freely available resource for use and sharing by others.
 * 
 * The usage examples of the array_column function.
 * 
 * This function retrieves the values contained in a solitary column within the input array.
 * 
 * Usage:
 *      array_column(array $array, int|string|null $column_key, int|string|null $index_key = null): array
 * 
 * @param:
 *      $array - A multi-dimensional array or an array of objects is required to extract a column of values.
 *                When dealing with an array of objects, it's possible to directly access public properties.
 *                However, to access protected or private properties, the class must implement both
 *                the __get() and __isset() magic methods.
 *      $column_key - Indicate the target column: use an integer for column index, a string for
 *                associative arrays or property names, or null to retrieve complete arrays/objects
 *                (helpful with index_key for array restructuring).
 *      $index_key - Select the index/key column for the output array. It can be an integer or
 *                string key (or, in PHP versions prior to 8.0.0, an object that converts to a string).
 * 
 * @return    array - Returns an array with values from a single input array column.
 * 
 * Run: php arrays/array_column.php
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
$books = [
  [
    'title' => 'The Catcher in the Rye',
    'author' => 'J.D. Salinger',
    'publication_year' => 1951,
    'genre' => 'Fiction',
  ],
  [
    'title' => 'To Kill a Mockingbird',
    'author' => 'Harper Lee',
    'publication_year' => 1960,
    'genre' => 'Classics',
  ],
  [
    'title' => '1984',
    'author' => 'George Orwell',
    'publication_year' => 1949,
    'genre' => 'Science Fiction',
  ],
  [
    'title' => 'Pride and Prejudice',
    'author' => 'Jane Austen',
    'publication_year' => 1813,
    'genre' => 'Classics',
  ],
];

$book_titles = array_column($books, 'title');

var_dump(
  'books titles',
  __LINE__,
  $book_titles
);

echo PHP_EOL; // Print an empty line to separate different tests.

$book_by_genre = array_column($books, 'title', 'genre');

var_dump(
  'book by genre',
  __LINE__,
  $book_by_genre
);