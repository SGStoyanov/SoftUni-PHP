<!-- Problem 2.	Most Frequent Tag
Write a PHP script MostFrequentTag.php which generates an HTML input text field and a submit button.
In the text field the user must enter different tags, separated by a comma and a space (", "). When the information is
submitted, the script should generate a list of the tags, sorted by frequency.
Then you must print: "Most Frequent Tag is: [most frequent tag]". Semantic HTML is required. Styling is not required. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 2 - The Most Frequent Tag</title>
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

    $count = array_count_values($inputArr); // Get the count of repeated tags
    arsort($count); // Sort them by descending
    $keys = array_keys($count); // Get only the tags(keys) and their index
    foreach ($count as $tag => $value) { // Iterate over the array
        echo $tag . ' : ' . $value . ' times' . '<br>'; // Print the results
    }

    echo '<br>' . 'Most Frequent Tag is: ' . $keys[0];

} elseif (strlen($_POST['tags']) == 0 && isset($_POST['submitter'])) { // If nothing has been entered in the text field
    echo 'You have to submit something first!';                        // but the submit button has been clicked, then...
} else {
    die; // Else .. stop
}
?>