<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP class one</title>
</head>
<body>
    <div class="container">
        <h1>This is my PHP website</h1>
    </div>
    <?php
    echo "hello world and this is printed from php";
    $variable1 = 34;
    $variable2 = 45;
    echo "<br>";
    echo $variable1 ;
    echo "<br>";
    echo $variable2 ;

    // PHP is not case sensitive programming
    EcHo $variable1 + $variable2;
    echo "<br>";
    
    // Operators in PHP
    // Arithmetic Operators
    echo "<h1>Arithmetic Operators</h1>";
    echo "<br>";
    echo "Add  :";
    echo 1+2;
    echo "<br>";
    echo "Sub  :";
    echo 1-2;
    echo "<br>";
    echo "Mul  :";
    echo 1*2;
    echo "<br>";
    echo "Div  :";
    echo 1/2;
    echo "<br>";
    // Assignment Operators
    $newvar = $variable1;
    // $newvar += 1;
    // $newvar -= 1;
    // $newvar *= 2;
    // $newvar /= 2;
    echo "The value of new variable is ";
    echo $newvar;
    echo "<br>";
    // Comparison Operators
    echo "<h1> Comparison Operators </h1>";
    echo "thos value of 1 == 4 is :";
    echo var_dump(1==4);
    echo "<br>";
    echo "thos value of 1 != 4 is :";
    echo var_dump(1!=4);
    echo "<br>";
    echo "thos value of 1 >= 4 is :";
    echo var_dump(1>=4);
    echo "<br>";
    echo "thos value of 1 <= 4 is :";
    echo var_dump(1<=4);
    // Increment/Decrement Operators
    echo "<h1>Increment/Decrement Operators</h1>";
    echo $variable1++;
    echo "<br/>";
    echo $variable1--;
    echo "<br/>";
    echo ++$variable1;
    echo "<br/>";
    echo --$variable1;
    echo "<br/>";
    // Logical Operators
    echo "<h1>Logical Operators</h1>";
    echo "<br/>";
    echo "and (&&) :";
    $myvar1 = (true and false);
    echo var_dump($myvar1);
    echo "<br/>";
    echo "or (||) :";
    $myvar2 = (true or false);
    echo var_dump($myvar2);
    echo "<br/>";
    echo "Not (!) :";
    $myvar3 = (!true);
    echo var_dump($myvar3);
    echo "<br/>";
    echo "XOR (/\) :";
    $myvar4 = (false xor true);
    echo var_dump($myvar4);
    ?>
</body>
</html>