<?php
  $arr=["banana","mango","avocado","strawberry"];
  foreach($arr as $ar){
    echo $ar."<br>";
  }

  echo "<br>Associative array<br>";
  $person=["Abebe"=>23,"Belete"=>22,"Tekele"=>42];
  foreach($person as $name=>$age){
    echo "$name is $age years old<br>";
  }
?>
