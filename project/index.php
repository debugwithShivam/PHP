<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "trip";

$con = mysqli_connect($server,$username,$password,$database);

if(!$con){
    die("Connection to this database failed due to" .mysqli_connect_error());
}
// echo "Success Connection to the DB"

$submit = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name']; 
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";



  if (mysqli_query($con, $sql)) { 
    echo "Successfully inserted into database!";
$submit = true;
  } else {
     echo "Error: " . mysqli_error($con);
     $submit = false;
  } 
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel From</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Sriracha&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="kharagpur.webp" class="bg" alt="">
    <div class="container">
        <h3>Welcome To IIT kharagput US Trip from</h3>
        <p>Enter your details and submit this from to comfirm your participation in the trip</p>
        <?php
        if ($submit == true) {
            echo '<p class="submitMsg">Thank you for submitting your form. We are happy to see you joining us for the US trip.</p>';
        }
        ?>
        
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="desc" cols="30" role="10"
                placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>



