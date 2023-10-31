<?php 
$txt1=$_POST['sid'];
$txt2=$_POST['saddress'];
$txt3=$_POST['srent'];
$txt4=$_POST['sstatus'];
$txt5=$_POST['tenant'];

$conn=new mysqli('localhost','root','','invoice_management');
$cmd="UPDATE shop_data SET shop_address='$txt2',shop_rent='$txt3',shop_status='$txt4',tenant='$txt5' WHERE shop_id='$txt1'";
if($conn->connect_error)
{
    die($conn->connect_error);
}
else
{
    if($conn->query($cmd)==true)
    {
        header('location:shoptablefront.php?token=Data Update');
    }
    else{
        echo $conn->error;
    }
}
?>