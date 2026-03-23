<?php

// Abstract class
abstract class Animal {

    // Abstract method (no body)
    abstract public function makeSound();

    // Normal method
    public function sleep() {
        echo "Animal is sleeping <br>";
    }
}

// Child class
class Dog extends Animal {

    // Implementing the abstract method
    public function makeSound() {
        echo "Dog barks <br>";
    }
}

// Another child class
class Cat extends Animal {

    public function makeSound() {
        echo "Cat meows <br>";
    }
}

// Create objects
$dog = new Dog();
$cat = new Cat();

// Call methods
$dog->makeSound();
$dog->sleep();

$cat->makeSound();
$cat->sleep();

$a=30;
$b=30;
echo $a==$b;
?>