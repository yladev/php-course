<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
</head>
<body>
    <h1>Process</h1>

    <?php
    if (isset($_POST["submit"])) {
        $uname = $_POST["uname"];
        $pw = $_POST["pw"];
        if ($uname=="ayeaye" && $pw=="12345") {
            echo "Valid User!";
        }
        else {
            echo "Invalid User!";
        }
    }
    else {
        echo "Not Submitted!";
    }
    
    ?>

    <hr>
    <a href="test.php?uname=ayeaye&id=100&city=Yangon">Go to Test</a>
</body>
</html>