<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="https://wa.me/9811442710" target="_blank">come with me</a>
    <?php
    function prints(){
        echo "5";
    };
    prints();
    prints();
    prints();
    prints();
    function printe_Number($number){
        echo "<br/>Numvber is ";
        echo $number;
    };
    printe_Number(45);
    printe_Number(40);
    printe_Number(35);
    ?>
    <?php
    $str = "This is a string";
    $lenght =  strlen($str) ;
    echo "<br/>". "the lenght of this string is : " . $lenght . "<br/>";
    echo "<br/>". "totle number in string is : " . str_word_count($str) . "<br/>"; //output is 4 
    echo "<br/>". "the reversed string is : " . strrev($str) . "<br/>"; 
    echo "<br/>". "the search for is in this string is : " . strpos($str,"is") . "<br/>"; //output is 2
    echo "<br/>". "The replaced string is : " . str_replace("is","at",$str) . "<br/>"; //output is this at a string
    ?>
</body>
</html>