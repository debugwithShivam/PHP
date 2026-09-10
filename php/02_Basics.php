<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops for Beginners</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box
        }
        .container{
            max-width: 900px;
            background-color: #f8eeee;
            margin: auto;
            padding: 23px;
        }
        h1, h2, h3 {
            margin: 15px 0 8px;
        }
        .note {
            background: #fff;
            padding: 10px;
            margin: 8px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Loops: Beginner Guide</h1>
        <div class="note">
            Loop ka matlab hai ek hi kaam ko baar-baar karna. Har loop mein hum
            decide karte hain: kahan se start karna hai, kab tak chalana hai,
            aur har round ke baad value ko kaise badhana hai.
        </div>
        <?php
        echo "<h2>1. While Loop</h2>";
        echo "<p>While loop pehle condition check karta hai. Condition true hone tak code repeat hota hai.</p>";

        // Start: $number = 1 | Condition: $number <= 5 | Update: $number++
        $number = 1;
        while ($number <= 5) {
            echo "Number: " . $number . "<br>";
            $number++;
        }

        echo "<h2>2. Do...While Loop</h2>";
        echo "<p>Do...while loop code ko kam se kam ek baar zaroor chalata hai, phir condition check karta hai.</p>";

        $number = 1;
        do {
            echo "Number: " . $number . "<br>";
            $number++;
        } while ($number <= 5);

        echo "<h2>3. For Loop</h2>";
        echo "<p>Jab start, condition aur update ek saath likhne hon, tab for loop useful hota hai.</p>";

        // for (start; condition; update)
        for ($number = 1; $number <= 5; $number++) {
            echo "Number: " . $number . "<br>";
        }

        echo "<h2>4. Foreach Loop</h2>";
        echo "<p>Foreach array ke har item ko ek-ek karke read karta hai.</p>";

        $fruits = ["Apple", "Banana", "Orange"];
        foreach ($fruits as $fruit) {
            echo "Fruit: " . $fruit . "<br>";
        }

        echo "<h3>Foreach with an associative array</h3>";
        echo "<p>Associative array mein key aur value dono hote hain.</p>";

        $student = [
            "name" => "John",
            "age" => 22,
            "course" => "PHP"
        ];

        foreach ($student as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }

        echo "<h2>5. Loop ke saath array index</h2>";
        $languages = ["Python", "C++", "PHP", "Node.js"];

        // Array ka index 0 se start hota hai. count() total items batata hai.
        for ($index = 0; $index < count($languages); $index++) {
            echo "Index " . $index . ": " . $languages[$index] . "<br>";
        }

        echo "<h2>6. Array values ko update karna</h2>";
        $numbers = [1, 2, 3, 4];

        foreach ($numbers as &$number) {
            $number = $number * 2;
        }
        unset($number); // Reference ko remove karna achhi practice hai.

        echo "Updated numbers: ";
        print_r($numbers);

        echo "<div class='note'><strong>Important:</strong> While, do...while aur for mein condition galat ho to loop kabhi khatam nahi ho sakta. Isliye counter ko update karna mat bhoolna.</div>";


        ?>
    </div>
</body>
</html>