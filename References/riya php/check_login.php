<?php
$txt1=$_POST['stuname'];
$txt2=$_POST['spassword'];

require_once("connection.php");

$cmd="SELECT * FROM riyainfo WHERE stuname='$txt1' AND spassword='$txt2'";

$n=$conn->query($cmd)->num_rows;

if($n>0){
    
    setcookie('stuname',$txt1,time()+30,"/");
    
    header("location:index.php");
}
else{
    header("location:login.php?token=login failed"
);
}


?>