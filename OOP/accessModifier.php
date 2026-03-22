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

// echo $person->age;   // private cannot be accessed outside
// echo $person->city;  //protected cannot be accessed outside

echo "<br>";

// Child class object
$student = new Student();
$student->showCity();


// class BankAccount {
//   private $balance;

//         public function __construct($initialBalance) {
//             $this->balance = $initialBalance; 
//         }

//         public function deposit($amount) {
//             if ($amount > 0) {
//                 $this->balance += $amount; 
//             } 
//         }
//         public function getBalance() {
//             return $this->balance;
//         } 
//       }
//     $account = new BankAccount(100);
//     $account->deposit(50);
//     echo $account->getBalance();
//     // echo $account->balance; // This would cause an error

    class bank{
      private $balance;
      function __construct($inibalance){
        $this->balance=$inibalance;
      }
      function deposit($amount){
        if($amount>0){
          $this->balance+=$amount;
        }
      }
      function getbalance(){
        echo "$this->balance";
      }
    }
    $b1=new bank(1000);
    $b1->deposit(10000);
    $b1->getbalance();

?>