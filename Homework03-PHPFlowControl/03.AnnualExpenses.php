<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html;charset=utf-8') ?>
    <title>Annual Expenses</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
        }
        td, th {
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
        <form method="post" action="">
            <label for="inputYears">Enter number of years: </label>
            <input type="number" name="inputYears" id="inputYears">
            <input type="submit" name="submitter" value="Show costs">
        </form>
        <br />
        <?php
        if (intval(htmlentities($_POST['inputYears'])) > 0 && isset($_POST['submitter'])) {
            echo ('
                <table>
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>January</th>
                            <th>February</th>
                            <th>March</th>
                            <th>April</th>
                            <th>May</th>
                            <th>June</th>
                            <th>July</th>
                            <th>August</th>
                            <th>September</th>
                            <th>October</th>
                            <th>November</th>
                            <th>December</th>
                            <th>Total:</th>
                        </tr>
                    </thead>
                    <tbody>');
            $years = intval(htmlentities($_POST['inputYears']));
            $currentYear = date(Y);
                for ($i = 0; $i <= $years; $i++) {
                    echo ('<tr>
                            <td>' . $currentYear-- . '</td>
                         ');
                    $sum = 0;
                        for ($j = 0; $j < 12; $j++) {
                            $randNum = rand(0, 999);
                            echo '<td>' . $randNum . '</td>';
                            $sum += $randNum;
                        }
                    echo '<td>' . $sum . '</td>
                        </tr>';
                }
            echo ('</tbody>
                </table>');
        } elseif (isset($_POST['submitter']) && intval(htmlentities($_POST['inputYears'])) <= 0) {
            echo 'Please submit correct data';
        }
        ?>
    </section>
</body>
</html>