<?php
// array (collection - multiple) Numeric Array
// Numeric Array - index - number starting from zero
$a = array(100,200,300,400,500,600,700,800,900, 0, 350, -1);

rsort($a); // numericArray 

for ($index=0; $index<count($a); $index++) { 
    echo $a[$index];
    echo "<br>";
}

echo "<hr>";

// Numeric Array
// $stdNames = array("Yan", "Dal", "Ngiah", "Linn", "Lun Aung");

// Associative Array - index - number or string
$stdNames = array("001" => "Yan", 
                  "002" =>  "Dal", 
                  "003" =>  "Ngiah", 
                  "004" =>  "Linn", 
                  "005" =>  "Lun Aung");
                  
// sort($stdNames);

/*for ($i=0; $i<count($stdNames); $i++) { 
    echo "[".($i+1)."] ".$stdNames[$i]."<br>";
}*/

// asort($stdNames); // Associative Array
ksort($stdNames);

foreach ($stdNames as $key => $value) { // arrayName as (index)$key => value
    echo $key.": ". $value."<br>";
}
?>