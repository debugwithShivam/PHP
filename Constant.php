<?php
// What is a constant?
// Constant = a named value whose value cannot be changed once it is set.
// Variable:
$x = 10;
$x = 20;
// Allowed
// Constant : define("PI", 3.14);
define("PI", 3.14);
// If you try to change it later:
// define("PI", 5);
// Not allowed.

// There are 2 ways to create a constant
// Method 1 — define()
// Most common.
// Syntax : define("NAME", value);

// Example
define("SITE_NAME", "My Website");
echo SITE_NAME;
echo PI;
?>