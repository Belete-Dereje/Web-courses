<?php
class calculator{
  public function __call($name,$arguments){
    if($name==='add'){
      $sum=0;
      $count=count($arguments);
      for($i=0;$i<$count;$i++){
        $sum+=$arguments[$i];
        
      }
      echo "Result = $sum";
    }else{
      echo "Invalid number of Argument";
    }
  }
}
$calc= new calculator();
$calc->add(10,10,10,10,10,10,1000,10,10,10);
?>