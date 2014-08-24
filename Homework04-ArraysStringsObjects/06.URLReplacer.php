<!-- Problem 6.	URL Replacer
Write a PHP program URLReplacer.php that takes a text from a textarea and replaces all URLs with the HTML syntax
<a href= "…" ></a> with a special forum-style syntax [URL=…][/URL]. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>URL Replacer</title>
</head>
<body>
    <section>
        <form method="post">
            <textarea name="text"></textarea>
            <br />
            <input type="submit" name="submitter" value="Submit">
        </form>
        <br />
        <?php
        if (!empty($_POST['text']) && isset($_POST['submitter'])) {
            $input = $_POST['text'];
            $input = str_replace('</a>', '[/URL]', $input);
            $input = preg_replace('/<a href="(.*?)"/', '[URL=\1]', $input);
            echo htmlentities($input);
        }
        ?>
    </section>
</body>
</html>