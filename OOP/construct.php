<?php
// class person{
//   public $name;
//   public $age;
//   function __construct($name,$age){
//     $this->name=$name;
//     $this->age=$age;

//   }
//   function showinfo(){
//     echo "$this->name is $this->age years old<br>";
//   }
// }
//     $p1=new person("Abera",21);
//     $p2=new person("Asmamaw",27);
//     $p1->showinfo();
//     $p2->showinfo();

    //WITHOUT CONSTRUCTOR
  class   Person{
    public $name;
    public $age;
    function setinfo($name,$age){
      $this->name=$name;
      $this->age=$age;
    }
    function showinfo(){
      echo "$this->name is $this->age years old <br>";
  }
  }
    $p1=new Person();
    $p2=new Person();
    $p1->setinfo("Abera",21);
    $p2->setinfo("Asmamaw",27);
    $p1->showinfo();
    $p2->showinfo();
?>