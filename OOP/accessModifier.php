<?php

class Person {

    public $name = "Abel";        // accessible everywhere
    private $age = 22;            // accessible only inside this class
    protected $city = "Addis Ababa"; // accessible inside this class and child classes

    // Method inside the same class
    public function showPersonInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "City: " . $this->city . "<br>";
    }
}

// Child class
class Student extends Person {

    public function showCity() {
        // protected variable can be accessed in child class
        echo "City from child class: " . $this->city . "<br>";
    }
}

// Create object
$person = new Person();
$person->showPersonInfo();

echo "<br>";

// Accessing public property (allowed)
echo "Access public property: " . $person->name . "<br>";

// These would cause errors if uncommented
// echo $person->age;   // private cannot be accessed outside
// echo $person->city;  //protected cannot be accessed outside

echo "<br>";

// Child class object
$student = new Student();
$student->showCity();

?>