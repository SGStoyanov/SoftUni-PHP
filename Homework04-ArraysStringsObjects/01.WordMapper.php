<!-- Problem 1.	Word Mapping
Write a PHP program WordMapper.php that takes a text from a textarea and prints each word and the number of times
it occurs in the text. The search should be case-insensitive. The result should be printed as an HTML table. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html;charset=utf-8') ?>
    <title>Word Mapping</title>
    <style>
        table, th, td {
            border: 1px solid green;
        }
    </style>
</head>
<body>
    <section>
        <form method="post" action="">
            <input type="text" name="inputText" id="inputText">
            <br />
            <input type="submit" name="submitter" value="Count words">
        </form>
        <br />
        <?php
        $text = strtolower($_POST['inputText']);

        if (strlen($_POST['inputText']) > 0 && isset($_POST['submitter'])) :
            $inputStrArr = preg_split("/[^a-zA-Z]+/", $text);
            foreach ($inputStrArr as $str => $word) {
                if (strlen($word) == 0) {
                    unset($inputStrArr[$str]);
                }
            }
        $newArr = array_count_values($inputStrArr); ?>
        <table>
            <?php
            foreach ($newArr as $word => $count) {
                echo "<tr>
                        <td>$word</td><td>$count</td>
                      </tr>";
            }
            ?>
        </table>

        <?php endif ?>


    </section>
</body>
</html>
