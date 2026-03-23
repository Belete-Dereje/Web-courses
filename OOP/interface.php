<?php

// Interface
interface Vehicle {
    public function move();
}

// Parent class
class Machine {
    public function start() {
        echo "Machine starting...<br>";
    }
}

// Child class
class Car extends Machine implements Vehicle {

    // Implement interface method
    public function move() {
        echo "Car is moving on the road.<br>";
    }

    // Additional method
    public function stop() {
        echo "Car has stopped";
    }
}

// Create object
$car = new Car();

// Call methods in order
$car->start();
$car->move();
$car->stop();

?>