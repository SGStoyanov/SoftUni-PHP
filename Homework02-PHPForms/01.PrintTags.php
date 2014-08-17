<!--Problem 1.	Print Tags
Write a PHP script PrintTags.php which generates an HTML input text field and a submit button.
In the text field the user must enter different tags, separated by a comma and a space (", ").
When the information is submitted, the script should split the tags, put them in an array and print out the array.
Semantic HTML is required. Styling is not required.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 1 - Print Tags</title>
</head>
<body>
    <section>
        <p>Enter Tags:</p>
        <form method="post" action="">
            <input type="text" name="tags" id="tags">
            <input type="submit" name="submitter" id="submitter" value="Submit">
        </form>
        <br />
    </section>
</body>
</html>
<?php
if (isset($_POST['tags']) && strlen($_POST['tags']) > 0) { // Two checks for empty text field
    $inputStr = htmlentities($_POST['tags']); // Getting the input tags as a string
    $inputArr = explode(',', $inputStr); // Splitting the input string to separate array elements
    $inputArr = array_map('trim', $inputArr); // Removing any whitespaces from the array elements

    for ($i = 0; $i < count($inputArr); $i++) { // Iterating until the length of the array minus 1.
        echo $i . ' : ' . $inputArr[$i] . '<br />'; // Printing the results
    }
} elseif (strlen($_POST['tags']) == 0 && isset($_POST['submitter'])) { // If nothing has been entered in the text field
    echo 'You have to submit something first!';                        // but the submit button has been clicked, then...
} else {
    die;
}
?>