<?php

$text = "Hello World from PHP";

// 1. String length
echo "strlen(): " . strlen($text) . "<br>";

// 2. Word count
echo "str_word_count(): " . str_word_count($text) . "<br>";

// 3. Reverse string
echo "strrev(): " . strrev($text) . "<br>";

// 4. Convert to uppercase
echo "strtoupper(): " . strtoupper($text) . "<br>";

// 5. Convert to lowercase
echo "strtolower(): " . strtolower($text) . "<br>";

// 6. First letter uppercase
echo "ucfirst(): " . ucfirst("hello") . "<br>";

// 7. First letter of each word uppercase
echo "ucwords(): " . ucwords("hello world") . "<br>";

// 8. Find position of a word
echo "strpos(): " . strpos($text, "World") . "<br>";

// 9. Replace text
echo "str_replace(): " . str_replace("World", "Students", $text) . "<br>";

// 10. Substring
echo "substr(): " . substr($text, 6, 5) . "<br>";

// 11. Repeat string
echo "str_repeat(): " . str_repeat("PHP ", 3) . "<br>";

// 12. Remove spaces from start/end
$spaceText = "   PHP Programming   ";
echo "trim(): " . trim($spaceText) . "<br>";

// 13. Compare strings
echo "strcmp(): " . strcmp("apple", "banana") . "<br>";

// 14. Split string into array
print_r(explode(" ", $text));
echo "<br>";

// 15. Join array into string
$arrayWords = ["I", "love", "PHP"];
echo "implode(): " . implode(" ", $arrayWords) . "<br>";

?>