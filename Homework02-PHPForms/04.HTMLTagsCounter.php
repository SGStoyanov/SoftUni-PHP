<!-- Problem 4.	HTML Tags Counter
Write a PHP script HTMLTagsCounter.php which generates an HTML form like in the example below.
It should contain a label, an input text field and a submit button. The user enters HTML tag in the input field.
If the tag is valid, the script should print “Valid HTML tag!”, and if it is invalid – “Invalid HTML Tag!”.
On the second line, there should be a score counter. For every valid tag entered, the score should increase by 1.
Hint: You may use sessions. Use an array to store all valid HTML5 tags. -->


<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tag Counter</title>
</head>
<body>
    <section>
        <p>Enter HTML Tag or a blank line to reset the session:</p>

        <form action="" method="post">
            <input type="text" name="tags" id="tag-box"/>
            <input type="submit" name="submitBtn" id="sub"/>
            <br/>
            <div id="result">
                <?php
                $validTags = array('a', 'abbr', 'acronym', 'address', 'applet', 'area', 'b', 'base', 'basefont',
                    'bdo', 'bgsound', 'big', 'blockquote', 'blink', 'body', 'br', 'button', 'caption', 'center', 'cite',
                    'code', 'col', 'colgroup', 'dd', 'dfn', 'del', 'dir', 'dl', 'div', 'dt', 'embed', 'em', 'fieldset',
                    'font', 'form', 'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html', 'iframe',
                    'img', 'input', 'ins', 'isindex', 'i', 'kbd', 'label', 'legend', 'li', 'link', 'marquee', 'menu' ,
                    'main', 'meta', 'noframe', 'noscript', 'optgroup', 'option', 'ol', 'p', 'pre', 'q', 's', 'samp',
                    'section', 'script', 'select', 'small', 'span', 'strike', 'strong', 'style', 'sub', 'sup', 'table',
                    'td', 'th', 'tr', 'tbody', 'textarea', 'tfoot', 'thead', 'title', 'tt', 'u', 'ul', 'var');
                $count = 0;
                if(isset($_POST['tags'])) {
                    if($_POST['tags'] == '') {
                        if(isset($_SESSION['count'])) {
                            unset($_SESSION['count']);
                        }
                    }
                    if(in_array($_POST['tags'], $validTags)) {
                        if(isset($_SESSION['count'])) {
                            $_SESSION['count']++;
                        }
                        else {
                            $_SESSION['count'] = 0;
                        }
                        echo '<h1>' . "Valid HTML tag!" . '<br />' .
                            "Score: " . $_SESSION['count'] . '</h1>';
                    }
                    else {
                        echo '<h1>' . "Invalid HTML tag!" . '<br />' .
                             "Score: " . $_SESSION['count'] . '</h1>';
                    }
                }
                ?>
            </div>
        </form>
    </section>
</body>
</html>