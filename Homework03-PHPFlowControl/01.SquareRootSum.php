<!-- Problem 1.	Square Root Sum
Write a PHP script SquareRootSum.php that displays a table in your browser with 2 columns.
The first column should contain a number (even numbers from 0 to 100) and the second column should contain the
square root of that number, rounded to the second digit after the decimal point. The last row of the table should
contain the sum of all values in the Square column. Styling the page is optional. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html;charset=utf-8') ?>
    <title>Square Root Sum</title>
    <style>
        table, tr, th, td {
            border: 1px solid black;
        }
        thead, tfoot {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <section>
        <table>
            <thead>
            <tr>
                <th>Number</th><th>Square</th>
            </tr>
            </thead>
            <tbody>
        <?php
        $sum = 0;
        for ($i = 0; $i <= 100; $i+=2) :
            $squareRoot = sqrt($i);
            $sqrtRounded = round($squareRoot, 2);
            $sum += $squareRoot;
        ?>
                <tr>
                    <td><?php echo $i . '</td><td>' . $sqrtRounded ?></td> <!-- $squareRoot + 0 - removing the trailing zeros -->
                </tr>
        <?php endfor; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>Total:</td><td><?php echo round($sum, 2) ?></td>
                </tr>
            </tfoot>
        </table>
    </section>
</body>
</html>