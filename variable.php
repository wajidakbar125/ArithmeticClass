<?php  declare(strict_types=1); // strict requirement

function addNumbers(int $a,int $b)
{
    return $a + $b;
}
echo addNumbers(5, 4);
echo '<br>';

$x = 5;
$y = 10;
function myTest()
{
    global $x, $y;
    $y = $x + $y;
    echo $y;
    echo '<br>';
}

myTest();  // run function
echo $y; // output the new value for variable $y
echo '<br>';

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
?>

