<?php
class fruit{
  public $name;
  public $color;
  public function __construct($name,$color){
    $this->name=$name;
    $this->color=$color;

  }
  public function intro(){
    echo "The $this->name has $this->color color";

  }
}
class mango extends fruit{
  public function message(){
    echo "It is Mango";
  }
}
$mang=new mango("Mango","Green");
$mang->message();
$mang->intro();


?>