<?php


function generatePasword(){
    $str="ABCDEFGHIJKLMNOPRQSTUVWXYZ123456789abcdefghijklmnopqrstuvwxyz@#$%&*_";
    $spassword=str_shuffle($str);
    return substr($spassword,0,10);
}

echo generatePasword();
?>