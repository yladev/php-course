<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>Test</h1>
    <body>
        This is my Test Page.
    </body>
    <a href="index.php">Go to index</a>
    <hr>
    <?php
    echo $_GET['uname']."<br>";
    echo $_GET['id']."<br>";
    echo $_GET['city']."<br>";
    ?>
</body>
</html>