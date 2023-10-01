<?php
$a = rand(1, 100);

while ($a % 2 != 0) { 
    $a = rand(1, 100); 
    echo $a ;
}

echo "le num est : $a";
?>
