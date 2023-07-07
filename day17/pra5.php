<?php
echo"the orignal array is :<br>";
$a=array("1" => "BMW","3" =>"NISSAN","2" =>"ROLL ROYESH","4" =>"HONDA");
echo"<pre>";
print_r($a);
echo"After sohing...<br>";
ksort($a);
echo"<pre>";
print_r($a);


?>