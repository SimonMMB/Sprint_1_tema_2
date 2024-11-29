<?php

$integer = 5; 
$double = 3.141593;
$string = "Hello world";
$summer = false;
define("NAME_SURNAME", "Simón Menendez Bravo");

echo "Integer: " . $integer . "<br>";
echo "Double: " . $double . "<br>";
echo "String: " . $string . "<br>";
echo "Boolean: " . ($summer ? "true" : "false") . "<br>";

echo "<h1>" . NAME_SURNAME . "</h1>";

$hello = "Hello, world!";
echo $hello . "<br>";
$helloUpperCase = strtoupper($hello);
echo $helloUpperCase . "<br>";
$helloLength = strlen($hello);
echo "The phrase '" . $hello . "' has a length of " . strlen($hello) . " characters" . "<br>";   
$reverseHello = strrev($hello);
echo "The reverse of '" . $hello . "' is '" . $reverseHello . "' <br>";
$message = "Aquest és el curs de PHP";
echo $hello . " / " . $helloUpperCase . " / " . $reverseHello . " / " . $message . "<br>";

$x = 10;
$y = 50;
$n = 3.141593;
$m = 5.555555;

echo "X = " . $x . "<br>"
    . "Y = " . $y . "<br>"; 
echo "X + Y = " . ($x + $y) . "<br>";
echo "X - Y = " . ($x - $y) . "<br>";
echo "X x Y = " . ($x * $y) . "<br>";
echo "X % Y = " . ($x % $y) . "<br>";

echo "N = " . $n . "<br>"
    . "M = " . $m . "<br>"; 
echo "N + M = " . ($n + $m) . "<br>";
echo "N - M = " . ($n - $m) . "<br>";
echo "N x M = " . ($n * $m) . "<br>";
echo "N % M = " . ($n % $m) . "<br>";

echo "The double of X is " . ($x * 2) . "<br>";
echo "The double of Y is " . ($y * 2) . "<br>";
echo "The double of M is " . ($n * 2) . "<br>";
echo "The double of N is " . ($m * 2) . "<br>";

echo "X + Y + N + M = " . ($x + $y + $n + $m)  . "<br>";
echo "X x Y x N x M = " . ($x * $y * $n * $m)  . "<br>";

function calculator($num1, $num2, $operator) {
    if ($operator == "+") {
        $result = $num1 + $num2;
        $message = $num1 . " + " . $num2 . " = " . $result . "<br>";
    } else if ($operator == "-") {
        $result = $num1 - $num2;
        $message = $num1 . " - " . $num2 . " = " . $result . "<br>";
    } else if ($operator == "*") {
        $result = $num1 * $num2;
        $message = $num1 . " x " . $num2 . " = " . $result . "<br>";
    } else if ($operator == "/") {
        $result = $num1 / $num2;
        $message = $num1 . " / " . $num2 . " = " . $result . "<br>";
    } else {
        $message = "Error. Operator must be either +, -, * or / <br>";
    }
    return $message;
}

echo calculator(3, 2, "+");
echo calculator(9, 5, "-");
echo calculator(3, 2, "*");
echo calculator(9, 5, "/");
echo calculator(3, 2, "&");

function counter($num = 10, $stepNum = 1) {
    for ($i = 0; $i < $num; $i += $stepNum) {
        echo $i . " / ";
    }
}

echo counter(10, 1) . "<br>";
echo counter(50, 2) . "<br>";

function grade($grade) {
    if ($grade >= 60) {
        $message = "Student grade: First division <br>";
    } else if ($grade >= 45) {
        $message = "Student grade: Second division <br>";
    } else if ($grade >= 33) {
        $message = "Student grade: Third division <br>";
    } else if ($grade < 33) {
        $message = "Failed student <br>";
    }
    return $message;
}

echo grade(60);
echo grade(45);
echo grade(44);
echo grade(33);
echo grade(25);

function isBitten() {
    $isBitten = false;
    $num = rand(0,1);
    if ($num == 1) {
        $isBitten = true;
    }
    if ($isBitten) {   
        $message = "Charlie bit my finger! <br>";
    } else {
        $message = "My fingers are safe <br>";
    }
    return $message;
}

echo isBitten();
echo isBitten();
echo isBitten();
echo isBitten();
echo isBitten();
echo isBitten();
echo isBitten();
echo isBitten();
echo isBitten();
echo isBitten();

?>

