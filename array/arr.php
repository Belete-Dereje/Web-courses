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

  $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
  echo "<br>Peter is " . $age["Peter"] . " years old.";
  echo "<br>Ben is " . $age['Ben']. " years old.";
  echo "<br>Joe is " . $age['Joe'] . " years old.";
  $age['Alex'] = 30;
  foreach($age as $name=>$ag){
    echo "<br>$name =>$ag";
  }
?>
