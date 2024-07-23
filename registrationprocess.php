<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Process Form</title>
</head>
<body>
    <h1>Registration Process</h1>

    <?php
        if (isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            $phone = $_POST['phone'];

            $address = $_POST['address'];
            $countries = $_POST['countries'];

            echo "First Name: ".$fname."<br>";
            echo "Last Name: ".$lname."<br>";
            echo "Date of Birth: ".$dob."<br>";
            echo "Address: ".$address."<br>";
            echo "Countries: ".$countries."<br>";
        }
    ?>
</body>
</html>