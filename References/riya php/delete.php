<?php
$id=$_GET['srr'];
$conn=new mysqli('localhost','root','','student');
$cmd="DELETE FROM riyainfo WHERE sr='$id'";

if($conn->query($cmd)==true){
    header('location:form.php?riya=Data Deleted');
}
else{
    echo $conn->error;
}
 
 ?>