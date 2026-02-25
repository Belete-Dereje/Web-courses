<?php
echo "Hello World <br>";
$a=2;
$b="2";
var_dump($a+$b."<br>");
echo "<h1> Grade System </h1> <br>";

$name='Belete';
print_r("How Are you $name <br>");
$names=array('Belete','Ahmed','Abreham');
foreach($names as $Names){
  // echo ("Name: $Names <br>");
  // print_r("Names: $Names <br>");
  var_dump("Names: $Names <br>");
}
echo "<br><br>";
$name_age=["Dani"=>25,"Semah"=>13,"Haile"=>41,"Lemma"=>90];
foreach($name_age as $name=>$age){
  echo("$name is $age Years Old <br>");
}


?>