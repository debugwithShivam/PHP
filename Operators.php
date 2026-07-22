<?php
// Arithmetic Operators //
$x = 5;
$y = 7;
echo "Addition" . PHP_EOL;
echo $x + $y . PHP_EOL;
echo "Subtraction" . PHP_EOL;
echo 20 - 5 . PHP_EOL;
echo "Multiplication" . PHP_EOL;
echo 4 * 5 . PHP_EOL;
echo "Division" . PHP_EOL;
echo 20 / 5 . PHP_EOL;
echo "Modulus -> Returns the remainder." . PHP_EOL;
echo 10 % 3 . PHP_EOL;


// Comparison Operators //
echo "Equal (==)" . PHP_EOL;
var_dump(5 == 5) . PHP_EOL;
var_dump(5 == "5") . PHP_EOL;
echo "Identical (===)" . PHP_EOL;
var_dump(5 === 5) . PHP_EOL;
var_dump(5 === "5") .PHP_EOL;
echo "Not Equal" . PHP_EOL;
var_dump(10 != 20)  . PHP_EOL;
echo "Not Identical" . PHP_EOL;
var_dump("5" !== 5) . PHP_EOL;
echo "Less Than" . PHP_EOL;
var_dump(5 < 10) . PHP_EOL;
echo "Greater Than" . PHP_EOL;
var_dump(20 > 15) . PHP_EOL;
echo "Less Than or Equal" . PHP_EOL;
var_dump(10 <= 10) . PHP_EOL;
echo "Greater Than or Equal" . PHP_EOL;
var_dump(20 >= 10) . PHP_EOL;
echo "Spaceship Operator Introduced in PHP 7." . PHP_EOL;
echo 100 <=> 100;

// Logical Operators
// Logical OR (||)
$isAdmin = false;
$isModerator = true;

var_dump($isAdmin || $isModerator);
// Logical AND (&&)
$age = 20;
$hasID = true;

var_dump($age >= 18 && $hasID);
// Logical NOT (!)
$isLoggedIn = false;

var_dump(!$isLoggedIn);
// XOR Sirf ek true hona chahiye.
var_dump(true xor false); // output true
// AND
$result = true and false; // output is true
// ($result = true) and false;
// $result = true
// true and false
// Expression false hai, lekin $result pehle hi true assign ho chuka hai.
// final var_dump($result);

// Operator Precedence
// Operator precedence batati hai ki jab ek expression me multiple operators hon, to PHP kis operator ko pehle evaluate karegi.
?>


<!-- 
Spaceship Operator (<=>)

| Comparison   | Result |
| ------------ | ------ |
| Left < Right | -1     |
| Equal        | 0      |
| Left > Right | 1      |
 -->

