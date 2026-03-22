<?php
class student{
  public $name;
  public $id;
  public function learn(){
    echo "I learn Software Engineering<br>";
  }
}

$stud1=new student();
$stud1->name="Solomon";
$stud1->id=124532;

$stud1->learn();
?>