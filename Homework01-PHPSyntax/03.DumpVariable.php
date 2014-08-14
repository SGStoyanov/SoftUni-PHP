<!--Problem 3.	Dump Variable-->
<!--Write a PHP script DumpVariable.php that declares a variable. If the variable is numeric, print it by the built-in function var_dump(). -->
<!--If the variable is not numeric, print its type at the input.-->

<?php

$input = array(1,2,3);

if (is_numeric($input)) {
    echo var_dump($input);
} else {
    echo gettype($input);
}
?>