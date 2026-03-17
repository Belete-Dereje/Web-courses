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

    public function fetch() {
        echo "Dog is fetching<br>";
    }
}

// 🔹 Upcasting (Child → Parent)
$dog = new Dog();
$animal = $dog; // Upcasting (automatic in PHP)

$animal->makeSound(); // Dog barks

// 🔹 Downcasting (Parent → Child)
$animal2 = new Dog(); // actually Dog object

if ($animal2 instanceof Dog) {
    $dog2 = $animal2; // Downcasting
    $dog2->fetch();   // Dog is fetching
}

?>