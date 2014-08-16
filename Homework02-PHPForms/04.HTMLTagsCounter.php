<!-- Problem 4.	HTML Tags Counter
Write a PHP script HTMLTagsCounter.php which generates an HTML form like in the example below.
It should contain a label, an input text field and a submit button. The user enters HTML tag in the input field.
If the tag is valid, the script should print “Valid HTML tag!”, and if it is invalid – “Invalid HTML Tag!”.
On the second line, there should be a score counter. For every valid tag entered, the score should increase by 1.
Hint: You may use sessions. Use an array to store all valid HTML5 tags. -->


<?php session_start() ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Problem 4 - HTML Tags Counter</title>
</head>
<body>
    <section>
        <form method="get" action="">
            <label for="tag">Enter HTML tags:</label>
            <br /><br />
            <input type="text" name="tag" id="tag">
            <input type="submit" name="submit" value="Submit">
        </form>
    </section>
</body>
</html>

<?php
$pattern1 = 'abbr|address|area|article|aside|audio|base|bdi|bdo|blockquote|body|br|button|canvas|caption|cite|code|col|colgroup|command|datalist|dd|del|details|dfn|dir|div|dl|dt|em|embed|fieldset|figcaption|figure|footer|form|h1|h2|h3|h4|h5|h6|head|header|hgroup|hr|html|iframe|img|input|ins|kbd|keygen|label|legend|li|link|map|mark|menu|meta|meter|nav|noscript|object|ol|optgroup|option|output|param|pre|progress|rp|rt|ruby|samp|script|section|select|small|source|span|strong|style|sub|summary|sup|table|tbody|td|textarea|tfoot|th|thead|time|title|tr|track|ul|var|video|wbr';
$pattern2 = 'a|q|b|i|p|s|u';
$matches = '';
$tags = $_GET['tag'];
if (isset($_GET['submit']) && strlen($tags) > 0) {
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    } else {
        if (strlen($tags) == 1 && preg_match("($pattern2)", $tags, $matches)) {
            echo '<h1 style="margin: 5">' . 'Valid HTML tag!' . '</h1>';
            $_SESSION['count']++;
        } elseif (strlen($tags) > 1 && preg_match("($pattern)", $tags, $matches)) {
            echo '<h1 style="margin: 5">' . 'Valid HTML tag!' . '</h1>';
            $_SESSION['count']++;
        } else {
            echo '<h1>' . 'Invalid HTML tag!' . '</h1>';
        }
    }
    echo '<h1 style="margin: 0">' . 'Score: ' . $_SESSION['count'] . '</h1>';
}
?>