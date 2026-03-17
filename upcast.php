<?php

// Parent class
class Animal {
    public function makeSound() {
        echo "Animal makes a sound<br>";
    }
}

// Child class
class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks<br>";
    }
}

// Upcasting
$dog = new Dog();
$animal = $dog; // Dog → Animal

$animal->makeSound(); // Dog barks

?>