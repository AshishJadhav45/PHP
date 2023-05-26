<?php



function interchange(&$a , &$b){
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    

    echo "After interchange: \n";
    echo "A = $a\n";
    echo "B= $b\n";
}

$a = 5;
$b = 10;

echo "before interchange :\n";
echo "a = $a\n";
echo "b = $b\n";

interchange($a,$b);

?>