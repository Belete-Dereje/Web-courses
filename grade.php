<?php
echo "<h1>Enter Your Score Out of 100% to know what Grade you get</h1>";
$name=$_POST["name"];
$Score=$_POST["Score"];
switch($Score){
  case $Score>=90 && $Score<=100:
    echo("$name you get Grade: A+");
    break;
  case $Score>=85 && $Score<90:
    echo("$name you get Grade: A");
    break;
  case $Score>=80 && $Score<85:
    echo("$name you get Grade: B+");
    break;
  case $Score>=75 && $Score<80:
    echo("$name you get Grade: B");
    break;
  case $Score>=70 && $Score<75:
    echo("$name you get Grade: B-");
    break;
  case $Score>=60 && $Score<70:
    echo("$name you get Grade: C+");
    break;
  case $Score>=50 && $Score<60:
    echo("$name you get Grade:C");
    break;
  case $Score>=0 && $Score<=49:
    echo("$name you get Grade: C-");
    break;
  default:
    echo("$name Please Enter valid Score");
}

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Grade Calculator</title>
  </head>
  <body>
    <form action="grade.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" ><br><br>
    <label for="Score">Score:</label>
    <input type="number" name="Score"><br>
    <input type="Submit" name="Submit">
    </form>
  </body>
</html>