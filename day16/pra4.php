<?php

$i=0;
for($x=0;$x<=10;$x++)
{
    echo"the number is:$x<br>";
}
$colors = array("rad","green","blue","yellow");

foreach($colors as $value)
{
    echo"$value <br>";
}

$age = array("peter"=>"35","ben"=>"37","joe"=>"43");

foreach($age as $x =>$val)
{
    echo "$x = $val<br>";
}

?>



