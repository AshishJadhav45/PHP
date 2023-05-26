
<head>
<body>
    
<?php
// First method to create associative aray



$salaries = array("Mangesh" => 2000, "sumit" => 3500, "shubham"=> 4000);

echo "Mangesh salary is ". $salaries['Mangesh'] . "<br />";
echo "sumit salary is ".   $salaries['sumit'] . "<br />";
echo "shubham salary is ". $salaries['shubham'] . "<br />";

# Second method to create a associative array in php

$salaries['Mangesh'] = "High";
$salaries['sumit'] = "Mediam";
$salaries['Mangesh'] = "low";

echo "salary of mangesh is ". $salaries['Mangesh'];
echo "salary of sumit is ". $salaries['sumit'];
echo "salary of shubham is ". $salaries['shubham'];








?>






</body>
</head>