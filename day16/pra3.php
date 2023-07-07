<?php
    $ar1 = array("key1"=>50,"key 2" =>70,"key 3" =>30);
    var_dump ($ar1);
    echo "<br>";
    $ar2 = array(50,20,70,40);
    var_dump ($ar2);
    echo "<br>";
    $ar3 = ["value 1","value 2","value 3"];
    var_dump ($ar3);
    echo "<br>";
    $ar4 = array("1" => array("1-1"=>"1","1-2"=>"2","1-3"=>"3"),"2" => array("2-1"=>"4","2-2"=>"5","3-3"=>"6"),"3"=>array("3-1"=>"7","3-2"=>"8","3-3"=>"9"));
    print_r($ar4);
    echo"<br>";
//
rsort($ar1);
ksort($ar2);

print_r($ar1);
print_r($ar2);

    ?>