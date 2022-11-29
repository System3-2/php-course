<?php

// What is class and instance
class Person
{
  public $name;
  public $surname;
  private $age;

  public function __construct($name, $surname)
  {
    $this->name = $name;
    $this->surname = $surname;
    echo $this->name;
  }
}


$person1 = new Person('Brad', "Traversy");
$person1->name = "Brad";
$person1->surname = 'Traversy';
// $person1->age = 33;
echo '<pre>';
var_dump($person1);
echo '</pre>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter