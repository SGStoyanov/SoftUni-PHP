<!--Problem 2.	Sum Two Numbers-->
<!--Write a PHP script SumTwoNumbers.php that declares two variables, firstNumber and secondNumber. -->
<!--They should hold integer or floating-point numbers (hard-coded values). Print their sum in the output in the format shown in the examples below. -->
<!--The numbers should be rounded to the second number after the decimal point. Find in Internet how to round a given number in PHP.-->

<?php
$firstNumber = 2;
$secondNumber = 5;

$result = $firstNumber + $secondNumber;

echo '$firstNumber' . ' + ' . '$secondNumber' . ' = ' . $firstNumber . ' + ' . $secondNumber . ' = ' . number_format($result, 2) . '<br>';

$firstNumber = 1.567808;
$secondNumber = 0.356;

$result = $firstNumber + $secondNumber;

echo '$firstNumber' . ' + ' . '$secondNumber' . ' = ' . $firstNumber . ' + ' . $secondNumber . ' = ' . number_format($result, 2) . '<br>';

$firstNumber = 1234.5678;
$secondNumber = 333;

$result = $firstNumber + $secondNumber;

echo '$firstNumber' . ' + ' . '$secondNumber' . ' = ' . $firstNumber . ' + ' . $secondNumber . ' = ' . number_format($result, 2) . '<br>';
?>