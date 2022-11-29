<?php

// while
$counter  = 0;
// while($counter < 10){
//   echo "$counter <br>";
//   $counter++;
// }
// Loop with $counter

// do - while

// for
// for($i = 0;$i < 100;$i++){
//   echo "$i <br>";
// }
// foreach
// $fruits = ['banana','mango','pear'];

// foreach($fruits as $i => $fruit){
//   echo "$i <br>";
//   echo "$fruit <br>";
// }

$person = [
  'name' => 'Timi',
  'surname' => 'oloja',
  'age' => 39,
  'hoobies' => 'football',

  'name' => 'Tolu',
  'surname' => 'shonuga',
  'age' => 40,
  'hoobies' => 'hiking',

  'name' => 'Tolu',
  'surname' => 'shonuga',
  'age' => 40,
  'hoobies' => 'hiking',

  'name' => 'Tolu',
  'surname' => 'shonuga',
  'age' => 40,
  'hoobies' => 'hiking'
];

foreach($person as $key => $value){
  echo "$key $value <br>";
}
// Iterate Over associative array.