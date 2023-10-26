<?php

$txt1=$_POST['sr'];
$txt2=$_POST['stuname'];
$txt3=$_POST['dob'];
$txt4=$_POST['fee'];
$txt5=$_POST['spassword'];



$conn=new mysqli('localhost','root','','student');
$cmd="UPDATE riyainfo SET  stuname='$txt2',dob='$txt3', fee='$txt4', spassword='$txt5' WHERE sr='$txt1'";

if($conn->connect_error){


    die($conn->connect_error);
}

else{
  

    
      
   if( $conn->query($cmd)==true)
   {
     header('location:form.php?riya=data Updated');
   }
   else{
    echo $conn->error;
   }
}


?>
