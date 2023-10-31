<?php 
$txt1=$_POST['sid'];
$txt2=$_POST['saddress'];
$txt3=$_POST['srent'];
$txt4=$_POST['sstatus'];
$txt5=$_POST['tenant'];
$cmd="INSERT INTO shop_data VALUES ('$txt1','$txt2','$txt3','$txt4','$txt5')";
$conn=new mysqli('localhost','root','','invoice_management');
if($conn->connect_error)
{
    die($conn->connent_error);
}
else 
{
   if($conn->query($cmd)==true)
   {
    // echo "DATA SAVED";
    header('location:shoptablefront.php?token=Data Saved');
   }
   else
   {
    echo $conn_error;
   }
   
}
?>