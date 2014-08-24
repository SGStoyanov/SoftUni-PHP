<!-- Problem 4.	Text Filter
Write a PHP program TextFilter.php that takes a text from a textfield and a string of banned words from a text input field.
All words included in the ban list should be replaced with asterisks "*", equal to the word’s length.
The entries in the banlist will be separated by a comma and space ", ". -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html; charset=utf-8') ?>
    <title>Text Filter</title>
</head>
<body>
    <section>
        <form method="post">
            <input type="text" name="inputText" placeholder="Text...">
            <br />
            <input type="text" name="banlist" placeholder="Ban list">
            <br />
            <input type="submit" name="submitter">
        </form>
        <br />
        <?php
        if(!empty($_POST['inputText']) && !empty($_POST['banlist']) && isset($_POST[submitter])) {
        $text = $_POST['inputText'];
        $banlist = $_POST['banlist'];
        $banlistArr = explode(', ', $banlist);

        foreach ($banlistArr as $word) {
            $text = str_replace($word, str_repeat('*', strlen($word)), $text);
        }

        echo $text;
        }
        ?>
    </section>
</body>
</html>