<?php
$_id=$_GET['shop_id'];
// echo $_sr;
$conn =new mysqli('localhost','root','','invoice_management');
$cmd=" ALTER TABLE customDELETE FROM shop_data WHERE shop_id='$_id' ";
if($conn->query($cmd)==true){
    header('location:shoptablefront.php?token=Data Deleted');
}
else{
    echo $conn->error;
}