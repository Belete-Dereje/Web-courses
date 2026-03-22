<?php
class fruit{
  public $name;
  function __construct($name){
    $this->name=$name;
  }
  function __destruct(){
    echo "yhis fruit is {$this->name}";
  }

}
$apple=new fruit("apple");
?>