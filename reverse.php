<?php
function reverseNumber($number) {
    $reversedNumber = 0;
    
    while ($number > 0) {
        $remainder = $number % 10;
        $reversedNumber = ($reversedNumber * 10) + $remainder;
        $number = (int)($number / 10);
    }
    
    return $reversedNumber;
}

// Example 
$number = 12345;
$reversedNumber = reverseNumber($number);
echo "Reverse of $number is: $reversedNumber";
?>
