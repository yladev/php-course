<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden</title>
</head>
<body>
    
    <form action="hidden.php" method="post">
        <input type="hidden" name="section" value="L5DC104">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" name="submit" value="Send">
        <input type="reset" name="reset" value="Clear">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $section = $_POST['section'];
        $name = $_POST['name'];

        echo "Name: $name <br> $section<br>";
    }
    ?>
</body>
</html>