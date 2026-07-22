<?php
// Type Casting vs Type Juggling
//
// Type juggling: PHP automatically converts values based on context.
// Example: adding a string number to an integer.

$x = "5";
$y = 10;
echo $x + $y; // 15

// PHP decides conversion from the operator context:
// Addition -> numeric conversion
// Concatenation (.) -> string conversion
// Condition -> boolean conversion

$a = 5;
$b = "10";
echo $a . $b; // "510"

// Type casting: the programmer forces a conversion.
// Syntax: (type) value
// Common casts: (int), (float), (string), (bool), (array)

// String to integer
$k = "50";
$num = (int)$k;
var_dump($num); // int(50)

// Integer to string
$i = 100;
$str = (string)$i;
var_dump($str); // string(3) "100"

// Values that cast to false in boolean context:
// false, 0, 0.0, "", "0", null, []
?>