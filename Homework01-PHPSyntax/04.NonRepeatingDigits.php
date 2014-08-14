<!--Problem 4.	Non-Repeating Digits-->
<!--Write a PHP script NonRepeatingDigits.php that declares an integer variable N, and then finds all 3-digit numbers that are less or equal -->
<!--than N (<= N) and consist of unique digits. Print "no" if no such numbers exist.-->

<?php

$input = 247;

if ($input < 100) {
    echo 'no';
} else {
    for ($i = 100; $i <= $input; $i++) {
        if ($i < 1000) {
            $firstDigit = $i % 10;
            $secondDigit = floor($i % 100 / 10);
            $thirdDigit = floor($i % 1000 / 100);
            if ($firstDigit != $secondDigit && $firstDigit != $thirdDigit && $secondDigit != $thirdDigit) {
                echo $i . ', ';
            }
        }
    }
}
?>