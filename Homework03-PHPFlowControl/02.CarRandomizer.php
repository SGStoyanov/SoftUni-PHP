<!-- Problem 2.	Rich People’s Problems
You are a very rich billionaire with an unhidden passion for cars. You like certain car manufacturers but you don’t
really care about anything else, and that’s why you need your own randomizing algorithm that helps you decide how many
and what color cars you should buy. Write a PHP script CarRandomizer.php that receives a string of cars from an input
HTML form, separated by a comma and space (“, “). It then prints each car, a random color and a random quantity in a
table like the one shown below. Use colors by your choice. Use as quantity a random number in range [1...5].
Styling the page is optional. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html;charset=utf-8') ?>
    <title>Cars Randomizer</title>
    <style>
        table, tr, th, td {
            border: 1px solid black;
        }
        table {
            margin-left: 4%;
        }
        thead {
            font-weight: bold;
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
        <form method="get" action="">
            <label for="carsInput">Enter cars </label>
            <input type="text" name="carsInput" id="carsInput">
            <input type="submit" name="submitter" value="Show result">
        </form>
        <?php
        if(strlen($_GET['carsInput']) >= 5 && isset($_GET['submitter'])) {
            echo
            '<br />
            <table>
            <thead>
            <tr>
                <th>Car</th><th>Color</th><th>Count</th>
            </tr>
            </thead>
            <tbody>';
            $carsArr = explode(', ' , $_GET['carsInput']);
            $colorsArr = ['black', 'white', 'yellow', 'red', 'blue', 'green', 'silver', 'purple', 'pink'];

            foreach ($carsArr as $carInd => $car) {
                $randCarKey = array_rand($carsArr);
                $randColorKey = array_rand($colorsArr);
                $randNum = rand(1, 10);
                echo (
                    '<tr><td>' . $car . '</td><td>' . $colorsArr[$randColorKey] . '</td><td>' . $randNum . '</td></tr>'
                );
            }
            echo
            '</tbody>
        </table>';
        } elseif(strlen($_GET['carsInput']) < 5 && isset($_GET['submitter'])) {
            echo '<p>Please submit cars first</p>';
        }
        ?>
    </section>
</body>
</html>