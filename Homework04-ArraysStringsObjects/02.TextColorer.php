<!-- Problem 2.	Coloring Texts
Write a PHP program TextColorer.php that takes a text from a textfield, colors each character according to its ASCII
value and prints the result. If the ASCII value of a character is odd, the character should be printed in blue.
If it’s even, it should be printed in red. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html; charset=utf-8') ?>
    <title>Text Colorer</title>
    <style>
        .blue {
            color: blue;
        }
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="inputText">
        <br />
        <input type="submit" name="submitter" value="Color text">
    </form>
    <br />
    <?php
    if (strlen($_POST['inputText']) > 0 && isset($_POST['submitter'])) {
        $charArr = str_split($_POST['inputText']);
        foreach ($charArr as $chInd => $char) {
            $charVal = ord($char);
            if ($charVal % 2 != 0) {
                echo "<span class=\"blue\">$char</span> "; // odd char ASCII value and blue color
            }
            else {
                echo "<span class=\"red\">$char</span> "; // even char ASCII value and red color
            }
        }
    }
    ?>
</body>
</html>