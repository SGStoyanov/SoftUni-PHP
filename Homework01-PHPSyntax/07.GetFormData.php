<!--Problem 7.	Form Data-->
<!--Write a PHP script GetFormData.php which retrieves the input data from an HTML form, and displays it as string. -->
<!--The input fields should hold name, age and gender (radio buttons). The returned string should be a message containing -->
<!--the information submitted by the form. 100% accuracy is NOT required. Semantic HTML is required.-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Problem 7 - Get Form Data</title>
</head>
<body>
<main>
    <form id="myForm" method="post" action="07.GetFormData.php">
        <input type="text" name="name" id="name" placeholder="Name..">
        <br>
        <input type="number" name="age" id="age" placeholder="Age..">
        <br>
        <input type="radio" id="sexMale" name="sex" value="male">Male
         <br>
        <input type="radio" id="sexFemale" name="sex" value="female">Female
        <br>
        <input type="submit" value="Изпращане" name="mySubmit">
        <br>
    </form>
</main>
</body>
</html>

<?php
if (isset($_POST['mySubmit'])) {
    echo 'My name is ' . htmlentities($_POST["name"]) . '.' . ' I am ' . htmlentities($_POST["age"]) . ' years old. I am ' . $_POST["sex"] . '.';
}
?>