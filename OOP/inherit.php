<?php
// class fruit{
//   public $name;
//   public $color;
//   public function __construct($name,$color){
//     $this->name=$name;
//     $this->color=$color;

//   }
//   public function intro(){
//     echo "The $this->name has $this->color color";

//   }
// }
// class mango extends fruit{
//   public function message(){
//     echo "It is Mango<br>";
//   }
// }
// $mang=new mango("Mango","Green");
// $mang->message();
// $mang->intro();



// Parent class
class Car {

    public $speed;        // public property
    protected $color;     // protected property
    private $engine;      // private property

    // Constructor
    public function __construct($speed, $color, $engine) {
        $this->speed = $speed;
        $this->color = $color;
        $this->engine = $engine;
    }

    // Method to display car information
    public function Info() {
        echo "Car Speed: " . $this->speed . "<br>";
        echo "Car Color: " . $this->color . "<br>";
        echo "Car Engine: " . $this->engine . "<br>";
    }
}

// Subclass
class Volvo extends Car {

    public function display() {
        echo "I am Volvo <br>";
    }
}

// Create object from subclass
$car1 = new Volvo(180, "Black", "V8");

// Call the display method
$car1->display();

// Call Info method
$car1->Info();


?>