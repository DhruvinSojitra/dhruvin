<?php
$x = 0;
 
while($x<10)
{
    if($x==4){
        break;
    }
echo"the number is :$x<br>";
$x++;
}
$x = 0;
while($x<10)
{
    if($x==4)
    {
        $x++;
    }
    echo"the number is:$x<br>";
    $x++;
}



$number1 = 10;
$number2 = 5;

if ($number1 > $number2) {
    echo "$number1 is greater than $number2";
} elseif ($number1 < $number2) {
    echo "$number1 is less than $number2";
} else {
    echo "$number1 is equal to $number2";
}


$number = 7;

if ($number % 2 == 0) {
    echo "$number is even";
} else {
    echo "$number is odd";
}
?>
