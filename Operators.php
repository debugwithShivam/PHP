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


?>


<!-- 
Spaceship Operator (<=>)

| Comparison   | Result |
| ------------ | ------ |
| Left < Right | -1     |
| Equal        | 0      |
| Left > Right | 1      |
 -->
