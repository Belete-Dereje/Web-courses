<?php
//TEMPORARY
// Original values
$numberString = "25";
$floatNumber = 10.75;
$booleanValue = true;
$text = "100 students";

// 1. Cast string to integer
$intValue = (int) $numberString;
echo "String to Integer: " . $intValue . "<br>";

// 2. Cast float to integer
$intFromFloat = (int) $floatNumber;
echo "Float to Integer: " . $intFromFloat . "<br>";

// 3. Cast integer to float
$floatValue = (float) $numberString;
echo "Integer/String to Float: " . $floatValue . "<br>";

// 4. Cast to boolean
$boolValue = (bool) $numberString;
echo "String to Boolean: " . $boolValue . "<br>";

// 5. Cast to string
$stringValue = (string) $floatNumber;
echo "Float to String: " . $stringValue . "<br>";

// 6. Cast string with text to integer
$intFromText = (int) $text;
echo "Text to Integer: " . $intFromText . "<br>";


//PERMANENT
// Original variable
$value = "50";

echo "Original value: " . $value . "<br>";
echo "Original type: " . gettype($value) . "<br><br>";

// Convert to integer permanently
settype($value, "integer");

echo "After settype to integer: " . $value . "<br>";
echo "New type: " . gettype($value) . "<br><br>";

// Convert to float
settype($value, "float");

echo "After settype to float: " . $value . "<br>";
echo "New type: " . gettype($value) . "<br><br>";

// Convert to string
settype($value, "string");

echo "After settype to string: " . $value . "<br>";
echo "New type: " . gettype($value) . "<br><br>";

// Convert to boolean
settype($value, "boolean");

echo "After settype to boolean: " . $value . "<br>";
echo "New type: " . gettype($value) . "<br>";


?>