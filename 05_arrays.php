<?php

// Create array
$arr = ["Olja",'Olja','muyiwa','moses','olusegun'];
$arr2 = ["rice", 'beans','yam'];

// var_dump($arr);
// Print the whole array

// Get element by index
// echo $arr[0];
// Set element by index
$arr[4] = "Deborah";

// var_dump($arr);
// Check if array has element at index 2
// isset($arr,[2]);
// Append element

// Print the length of the array

// Add element at the end of the array
array_push($arr,"Moses🍔");
echo '<pre>';
var_dump($arr);
echo '</pre>';

// Remove element from the end of the array
array_pop($arr);
echo '<pre>';
var_dump($arr);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($arr,"Gbenga");
echo '<pre>';
var_dump($arr);
echo '</pre>';

// Remove element from the beginning of the array
array_shift($arr);
echo '<pre>';
var_dump($arr);
echo '</pre>';

// Split the string into an array
$arr [] = "Zakaria";
echo '<pre>';
var_dump($arr);
echo '</pre>';

$str = "Muyiwa,Oloja,Moses";
// Combine array elements into string

explode(",",$str);

echo '<pre>';
var_dump($str);
echo '</pre>';

// Check if element exist in the array
echo in_array("Olja", $arr);

$newArr = array_merge($arr,$arr2);

echo '<pre>';
var_dump([...$arr,...$arr2,...$newArr]);
echo '</pre>';

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)
rsort($newArr);
echo '<pre>';
var_dump($newArr);
echo '</pre>';



// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================
$person = [
  'name' => 'Tolu',
  'surname' => 'shonuga',
  'age' => 40,
  'hoobies' => 'hiking'
];
echo '<pre>';
print_r($person);
echo '</pre>';


echo $person['name'];
$person['channel'] = 'ffc🥗';

echo '<pre>';
print_r($person);
echo '</pre>';

// Create an associative array
echo '<pre>';
print_r(array_values($person));
echo '</pre>';

// Get element by key
asort($person);
echo '<pre>';
print_r($person);
echo '</pre>';

// Set element by key
$todos = [
  ['title' => 'todo title 1', 'completed' => false],
  ['title' => 'todo title 2', 'completed' => true],

];

echo '<pre>';
print_r($todos);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys