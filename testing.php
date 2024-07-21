<?php
echo "Hello<br>";
echo "How are you?<br>";
echo "I'm Yan Linn Aung<br>";
?>

<?php
for ($i=0; $i<=10; $i++) { 
    echo "Hi<br>";
}
?>

<?php
    $name = "Yan Linn Aung";
    echo "$name<br>";
    echo "Hello $name<br>";
?>

<?php
echo "<hr>";

for ($i=1; $i<=10; $i++) { //$i=$i-2
    echo "Hello $i<br>";
}

echo  "<hr>";

$j=1;
while ($j<=10) {
    echo "Hello $j<br>";
    $j++; //increment
}

echo "<hr>";

$k=1;
do {
    echo "Hello $k<br>";
    $k++; //increment
} while ($k <= 10); // end condition, at least once

echo "<hr>";

// array (collection - multiple) Numeric Array
$a = array(100,200,300,400,500,600,700,800,900, 0, 350, -1);

sort($a);

for ($index=0; $index<count($a); $index++) { 
    echo $a[$index];
    echo "<br>";
}
?>