<?php

$number = -18;
$count=0;

// Positive, Negative, Zero 
if ($number > 0) {
    echo "The number is Positive <br>";
} elseif ($number < 0) {
    echo "The number is Negative <br>";
} else {
    echo "The number is Zero <br>";
}

//Even Odd Identifier
if ($number % 2 == 0) {
    echo "The number is Even <br>";
} else {
    echo "The number is Odd <br>";
}

//Prime or Composite check
$isPrime = true;

if ($number <= 1) {
    $isPrime = false;
} else {
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $count++;
            if($count>2){
              $isPrime = false;
            }
            
        }
    }
}

if ($isPrime) {
    echo "The number is Prime";
} else {
    echo "The number is Composite";
}

?>