<?php
// What is constant 
// Constant = ऐसा named value जिसकी value once set होने के बाद बदली नहीं जा सकती।
// Variable:
$x = 10;
$x = 20;
// Allowed
// Constant : define("PI", 3.14);
define("PI", 3.14);
// अगर बाद में बदलना चाहो:
// define("PI", 5);
// Allowed नहीं।

// Constant बनाने के 2 तरीके
// Method 1 — define()
// सबसे common।
// Stntax : define("NAME", value);

// Example
define("SITE_NAME", "My Website");
echo SITE_NAME;
?>