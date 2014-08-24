<!-- Problem 3.	Sidebar Builder
Write a PHP program SidebarBuilder.php that takes data from several input fields and builds 3 sidebars. The input
fields are categories, tags and months. The first sidebar should contain a list of the categories, the second sidebar
– a list of the tags and the third should contain the months. The entries in the input strings will be separated by a
comma and space ", ". Styling the page is optional. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html; charset=utf-8') ?>
    <title>Sidebar Builder</title>
    <style>
        table {
            background: #C0D1EA;
            width: 10%;
            margin-bottom: 0.5%;
            border-radius: 10%;
            border: 1px solid black;
        }
            th {
                border-bottom: 1px solid black;
                padding-top: 10%;
                padding-left: 3%;
                font-size: 1.1em;
                font-weight: bolder;
                font-family: sans-serif;
                text-align: left;
            }
                ul {
                    list-style: circle;
                }
                    li {
                        text-decoration: underline;
                    }


    </style>
</head>
<body>
    <aside>
        <form method="post">
            <label for="categories">Categories: </label>
            <input type="text" name="categories" id="categories" required>
            <br />
            <label for="tags">Tags: </label>
            <input type="text" name="tags" id="tags" required>
            <br />
            <label for="months">Months: </label>
            <input type="text" name="months" id="months" required>
            <br />
            <input type="submit" name="submitter" value="Generate">
        </form>
        <br />
        <?php
        if (!empty($_POST['categories']) && !empty($_POST['tags']) && !empty($_POST['months']) && isset($_POST['submitter'])) :
            $categories = explode(', ', $_POST['categories']);
            $tags = explode(', ', $_POST['tags']);
            $months = explode(', ', $_POST['months']);
        ?>
            <table>
                <thead>
                    <tr><th>Categories</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <ul>
                            <?php
                            foreach ($categories as $catInd => $category) {
                                echo "<li>$category</li>";
                            }
                            ?>
                        </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                <tr><th>Tags</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul>
                                <?php
                                foreach ($tags as $tagInd => $tag) {
                                    echo "<li>$tag</li>";
                                }
                                ?>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                <tr><th>Months</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul>
                                <?php
                                foreach ($months as $monInd => $month) {
                                    echo "<li>$month</li>";
                                }
                                ?>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php endif; ?>
    </aside>
</body>
</html>