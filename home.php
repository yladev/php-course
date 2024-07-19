<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Student Result</h1>

    <?php
    $stdName = "Yan Linn Aung";
    $stdID = "P00200770";
    $stdEmail = "yanlinnaung881@gmail.com";
    $stdInfo = "Level 5 Diploma in Compiuting";
    $stdMark1 = 70;
    $stdMark2 = 80;
    $stdMark3 = 75;
    // $result = false;

    // >=40 <40 Condition
    echo "Name: $stdName, ID: $stdID <br>";
    if ($stdMark1<40 || $stdMark2<40 || $stdMark3<40) {
        echo "<b>Fail!<b>"; // True Case
    }
    else{
        if ($stdMark1>=70 || $stdMark2>=70 || $stdMark3>=70) {
            echo "Pass with Distinction";
        }
        elseif ($stdMark1>=60 && $stdMark2>=60 && $stdMark3>=60) {
            echo "Pass with Merit.";
        }
        else
        {
            echo "Pass";
        }
    }

    echo "<hr>";

    $num = 0;
    if ($num>0) {
        echo "Number is Positive";
    }
    elseif ($num==0) {
        echo "Number is Zero";
    }
    else {
        echo "Number is Negative";
    }

    echo "<hr>";

    $num = 100;
    if ($num%2==0) {
        echo "$num is even number";
    }
    else {
        echo "$num is odd number";
    }

    echo "<hr>";

    // vowel or non-vowel
    // case sensitive - Upper Case / Lower Case
    $ch = "E";
    $ch = strtolower($ch);
    echo "$ch<br>";
    if ($ch=="a" || $ch=="e" || $ch=="i" || $ch=="o" || $ch=="u") {
        echo "$ch is vowel<br>";
    }
    else {
        echo "$ch is non-vowel<br>";
    }
 
    ?>
</body>
</html>