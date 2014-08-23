<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html; charset=utf-8'); ?>
    <title>String Modifier</title>
</head>
<body>
    <main>
        <form method="post" action="">
            <input type="text" name="inputText">
            <label for="palindrome">Check Palindrome</label>
            <input type="radio" name="operation" id="palindrome" value="palindrome">
            <label for="revString">Reverse String</label>
            <input type="radio" name="operation" id="revString" value="revString">
            <label for="splitStr">Split</label>
            <input type="radio" name="operation" id="splitStr" value="splitStr">
            <label for="hashStr">Hast String</label>
            <input type="radio" name="operation" id="hashStr" value="hashStr">
            <label for="shuffleStr">Shuffle String</label>
            <input type="radio" name="operation" id="shuffleStr" value="shuffleStr">
            <input type="submit" name="submitter" value="Submit">
        </form>

        <?php
        function isPalindrome($str) {
            $tempStr = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));
            return $tempStr == strrev($tempStr);
        }
        function reverseString($str) {
            $reversedStr = strrev($str);
            return $reversedStr;
        }
        function splitString($str) {
            $strToChars = str_split($str);
            return $strToChars;
        }
        function hashString($str) {
            $hashedPass = '';
            $usedAlgo = '';
            if (CRYPT_SHA256 == 1) {
                $hashedPass = crypt($str, 'som5eRandomAReallllyRandomStr8ForPass');
                $usedAlgo = 'SHA256';
            } elseif (CRYPT_BLOWFISH == 1) {
                $hashedPass = crypt($str, 'vuehveiurhiwueh4cU');
                $usedAlgo = 'Blowfish';
            } elseif (CRYPT_STD_DES == 1) {
                $hashedPass = crypt($str, 'jb');
                $usedAlgo = 'DES Standard';
            }
            return array($hashedPass, $usedAlgo);
        }
        function shuffleString($str) {
            $shuffledStr = str_shuffle($str);
            return $shuffledStr;
        }
        $inputStr = htmlentities($_POST['inputText']);
        $chosenFunc = $_POST['operation'];

        if (isset($_POST['submitter']) && strlen(htmlentities($_POST['inputText'])) > 0 && isset($_POST['operation'])) {
            switch($chosenFunc) {
                case 'palindrome':
                    if (isPalindrome($inputStr)) {
                        echo $inputStr . ' is a palindrome!';
                    } else {
                        echo $inputStr . ' is not palindrome!';
                    }
                    break;
                case 'revString':
                    echo reverseString($inputStr);
                    break;
                case 'splitStr':
                    $tempArr = splitString($inputStr);
                    foreach ($tempArr as $charInd => $char) {
                        echo $char . ' ';
                    }
                    break;
                case 'hashStr':
                    echo 'Hashed password: ' . hashString($inputStr)[0] . "<br />" . 'Hashing algorithm: ' . hashString($inputStr)[1];
                    break;
                case 'shuffleStr':
                    echo shuffleString($inputStr);
                    break;
                default:
            }
        } elseif (isset($_POST['submitter']) && strlen(htmlentities($_POST['inputText'])) == 0 && isset($_POST['operation'])) {
            echo 'Please enter some text!';
        } elseif (isset($_POST['submitter']) && strlen(htmlentities($_POST['inputText'])) > 0 && !isset($_POST['operation'])) {
            echo 'Please choose an operation!';
        } else if (isset($_POST['submitter']) && strlen(htmlentities($_POST['inputText'])) == 0 && !isset($_POST['operation'])) {
            echo 'Please enter some text and choose operation!';
        }
        ?>
    </main>
</body>
</html>