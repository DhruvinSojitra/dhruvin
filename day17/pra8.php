<?php
 $str="apple's lab";
 $result=addslashes($str);
 echo $str.'<br/>';
 echo $result;
 echo '<br/>'.'<br/>'.'<br/>';
 
 $str1="Nissan,BMW,audi,suzki";
 $result1 = explode(',',$str1);
echo'<pre/>';
print_r($result1);

echo '<br>'.'<br>'.'<br>';
$str="Hello world.it's beautifull day.";
print_r(explode(" ",$str));
echo'<pre/>';
echo '<br>'.'<br>'.'<br>';

$implode = implode(' ',$result1);
echo $implode;
echo '<br>'.'<br>'.'<br>';

echo strpos("Hello..hi good morning!","Hi");
echo '<br>'.'<br>'.'<br>';

echo strlen("Helloo..");
echo '<br>'.'<br>'.'<br>';

echo stripos("Hello..hi good morning!","Hi");
echo '<br>'.'<br>'.'<br>';

echo strrpos("Hello..hi good morning!","Hi");
echo '<br>'.'<br>'.'<br>';

$htmlentity ="&lt;H&gt;";
htmlentities($htmlentity);
echo$htmlentity;
echo '<br>'.'<br>'.'<br>';

html_entity_decode($htmlentity);
echo$htmlentity;
echo '<br>'.'<br>'.'<br>';

$text = "TEXT IS NICE TEXT";
echo lcfirst($text);
echo '<br>'.'<br>'.'<br>';

$text = "this is nice text";
echo ucfirst($text);
echo '<br>'.'<br>'.'<br>';

$text = "this is nice text";
echo ucwords($text);
echo '<br>'.'<br>'.'<br>';

$psswrd = "Abc@123";
echo md5($psswrd);
echo '<br>'.'<br>'.'<br>';

$psswrd1 = "Abc@123";
echo sha1($psswrd1);
echo '<br>'.'<br>'.'<br>';

$text1 ="    Abc@123";
echo ltrim($text1);
echo '<br>'.'<br>'.'<br>';


$text1 ="Abc@123&nbsp;&nbsp;";
echo rtrim($text1);
echo '<br>'.'<br>'.'<br>';

$text1 ="    Abc@123#     ;";
echo trim($text1);
echo '<br>'.'<br>'.'<br>';


$rtext = "Hellooo";
$text2 = "Good Morning";
echo str_replace("Good",$rtext,$text2);
echo '<br>'.'<br>'.'<br>';

$amount = 1000;
$informat = number_format($amount,2);
echo $informat;
?>
