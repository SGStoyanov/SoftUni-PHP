<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html; charset=utf-8');  ?>
    <style>
        table, tr, td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <section>
        <form method="post" action="">
            <label for="inputStr">Input string: </label>
            <input type="text" name="inputStr" id="inputStr">
            <input type="submit" name="submitter" value="Submit">
        </form>
        <br />
            <?php
            if (isset($_POST['submitter']) && strlen(htmlentities($_POST['inputStr'])) > 0) {
                $numArr = explode(', ', $_POST['inputStr']);
                echo
                    '<table>
                        <tbody>';
                foreach ($numArr as $numInd => $num) {
                    if (intval($num) > 0) {
                        $sum = 0;
                        for ($i = 0; $i < strlen($num); $i++) {
                            $sum += intval($num[$i]);
                        }
                        echo '<tr><td>' . $num . '</td><td>' . $sum . '</td></tr>';
                    } else {
                        echo '<tr><td>' . $num . '</td><td>I cannot sum that</td></tr>';
                    }
                }
            }
            ?>
                        </tbody>
                    </table>
    </section>
</body>
</html>