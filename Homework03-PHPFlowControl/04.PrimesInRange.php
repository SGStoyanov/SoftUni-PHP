<!-- Problem 4.	Find Primes in Range
Write a PHP script PrimesInRange.php that receives two numbers – start and end – from an input field and displays all
numbers in that range as a comma-separated list. Prime numbers should be bolded. Styling the page is optional. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html; charset=utf-8') ?>
    <title>Primes in Range</title>
</head>
<body>
    <main>
        <form method="post" action="">
            <label for="startIndex">Starting Index: </label>
            <input type="number" name="startIndex">
            <label for="endIndex">End: </label>
            <input type="number" name="endIndex">
            <input type="submit" name="submitter" value="Submit">
        </form>
        <br />
        <?php
        $start = intval(htmlentities($_POST['startIndex']));
        $end = intval(htmlentities($_POST['endIndex']));

        function isPrime($number) {
            if ($number == 1) {
                return false;
            }
            // 2 is the only even prime number
            if ($number == 2) {
                return true;
            }
            // square root algorithm speeds up testing of bigger prime numbers
            $x = sqrt($number);
            $x = floor($x);
            for ($i = 2 ; $i <= $x ; ++$i) {
                if ($number % $i == 0) {
                    break;
                }
            }
            if($x == $i-1) {
                return true;
            } else {
                return false;
            }
        }
        if (isset($_POST['submitter'])) {
            for ($i = $start; $i <= $end; $i++) {
                if (!isPrime($i) && $i < $end) {
                    echo $i . ', ';
                } elseif(!isPrime($i) && $i == $end) {
                    echo $i;
                } elseif (isPrime($i) && $i < $end) {
                    echo "<span style=\"font-weight: bold\">" . $i . ", </span>";
                } elseif (isPrime($i) && $i == $end) {
                    echo "<span style=\"font-weight: bold\">" . $i . "</span>";
                }
            }
        }
        ?>
    </main>
</body>
</html>