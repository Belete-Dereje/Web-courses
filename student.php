<?php
$student=[["name"=>"Belete","score"=>[60,90,50,80]],
["name"=>"Kasahun","score"=>[90,80,100,89]],
["name"=>"Birtukan","score"=>[80,32,12,10]]];

foreach ($student as $students){
  $total=array_sum($students["score"]);
  $count=count($students["score"]);
  $average=$total/$count;

  if($average >= 60){
    $result="Pass";
  }
  else{
    $result="Fail";
  }
  echo ("Student $students[name]: Average = $average <br> result: $result <br><br>");
}
?>