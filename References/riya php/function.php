<?php
function checkPrime($n){

$count=0;
for ($i=1;$i<=$n;$i++){
    if($n%$i==0){
        $count++;
    }
}  
if ($count==2){
    return 1;
}
else {
    return 0;
}
}

if(checkPrime(12)){
    echo"prime no";
}

else
{
    echo"NOt prime";
}




?>