<!-- Problem 5.	Sentence Extractor
Write a PHP program SentenceExtractor.php that takes a text from a textarea and a word from an input field and
prints all sentences from the text, containing that word. A sentence is any sequence of words ending with ., ! or ?. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sentence Extactor</title>
</head>
<body>
    <section>
        <form method="post">
            <textarea name="text"></textarea>
            <br />
            <input type="text" name="filter">
            <br />
            <input type="submit" name="submitter">
        </form>
        <br />
        <?php
        if (!empty($_POST['text']) && !empty($_POST['filter']) && isset($_POST['submitter'])) {
            $sentences = preg_split("/(?<=[.?!])\s*/", $_POST['text'], -1, PREG_SPLIT_NO_EMPTY);
            $sentences = array_map('trim', $sentences);
            $word = $_POST['filter'];
            foreach ($sentences as $sentence) {
                if (preg_match("/\s+$word\s+.*[.?!]+$/", $sentence)) {
                    echo "$sentence<br>";
                }
            }
        }

        ?>
    </section>
</body>
</html>