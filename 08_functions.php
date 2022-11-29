<?php

// Function which prints "Hello I am Zura"
function prin(){
  echo "Hello world <br>";
}

// prin();
// prin();
// prin();
// prin();
// prin();
// prin();
// Function with argument
// $olo = 'oloja';
// $sur = 'muywa';
// function namee($name){
//   echo "My name is $name <br>";
// }

// namee($olo);
// namee($sur);
// Create sum of two functions
// function sum(...$nums){
//   $sum = 0;
//  foreach($nums as $num){
//    $sum += $num;
//  }
//  return $sum;

// }
// echo sum(1,2,2,3,4,6,7);
// Create function to sum all numbers using ...$nums

function sum(...$nums){
  $sum = 0;
 foreach($nums as $num){
   $sum += $num;
 }
 return $sum;

}
// Arrow functions
