<?php
$txt1=$_POST['sname'];
$txt2=$_POST['pass'];

if(strcmp($txt1,"riya")==0){
    if(strcmp($txt2,"1234riya")==0){
        header('location:pagehandling.php?riya=login success');
    }
    else{
        header('location:pagehandling.php?riya=invalid password');

    }
}

    else{
        header('location:pagehandling.php?riya=invalid user');
       
    }



?>