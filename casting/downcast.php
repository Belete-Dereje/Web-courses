<?php

// Parent class
class Animal {
    public function makeSound() {
        echo "Animal makes a sound<br>";
    }
}

// Child class
class Dog extends Animal {
    public function fetch() {
        echo "Dog is fetching<br>";
    }
}

// Downcasting
$animal = new Dog(); // stored as Animal

if ($animal instanceof Dog) {
    $dog = $animal; // Animal → Dog
    $dog->fetch();  // Dog is fetching
}

?>