<?php
$ab=array(34,23,45,56,78);

print_r($ab);

echo $ab[2]."<br>";

echo"for each fn"."<br>";

foreach($ab as $i){
    echo$i."<br>";
}
echo"size of aaray"."<br>";
echo sizeof($ab)."<br>";


echo"adding value in end "."<br>";

array_push($ab,78);
array_shift($ab);
array_unshift($ab,10);


foreach($ab as $i){
    echo$i."<br>";
}

echo"sorting of number"."<br>";
$ab=array_unique($ab);
foreach($ab as $p){
    echo $p."<br/>";
}







?>