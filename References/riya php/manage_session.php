<?php 
// session_start();
$dob="";
if(isset($_COOKIE['stuname']))
{

    require_once("connection.php");
    $dob=$_COOKIE['stuname'];
    $cmd="SELECT *FROM riyainfo WHERE stuname='$dob'";
    $result=$conn->query($cmd)->fetch_assoc();
    $userid=$result['sr'];
    $username=$result['stuname'];
    $userdob=$result['dob'];
    $userfee=$result['fee'];
    $userpassword=$result['spassword'];



}
else{
    header("location:login.php?token=Cookie Expired");
}
?>
