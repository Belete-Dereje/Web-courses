<?php
define("SITE_NAME", "My Website");
echo SITE_NAME . "<br>";

define("COLORS", ["Red", "Green", "Blue"]);
echo COLORS[0] . "<br>";

// Using const
const COMPANY = "Tech Company";
echo COMPANY . "<br>";

// const with array
const FRUITS = ["Apple", "Banana", "Orange"];
echo FRUITS[1] . "<br>";


// const inside class
class MyClass {
    const STATUS_ACTIVE = 1;
}

echo MyClass::STATUS_ACTIVE;

?>