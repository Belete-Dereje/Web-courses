<?php
class car{
  public function start(){
    echo "Car started <br>";
  }
}

class student{
  public$name;
  public$age;
  public function showinfo(){
    echo "$this->name is $this->age old Years <br>";
  }
}

$student1=new student();
$student1->name="Belete";
$student1->age=22;
$student1->showinfo();

$car1=new car();
$car1->start();


?>