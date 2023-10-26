<?php

session_start();

if(isset($_COOKIE['stuname']))
{
    setcookie("stuname","",time()-1."/");
    header("location:login.php?token=Cookie Expired,login Again");
}
else{
    header("location:login.php?token=Cookie Expired,login again")
}
?>