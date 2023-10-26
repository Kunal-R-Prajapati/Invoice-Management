<?php



function generatePasword(){
    $str="ABCDEFGHIJKLMNOPRQSTUVWXYZ123456789abcdefghijklmnopqrstuvwxyz@#$%&*_";
    $pass=str_shuffle($str);
    return substr($pass,0,10);
}



$txt1="STU".time().mt_rand(100,999);
$txt2=$_POST['stuname'];
$txt3=$_POST['dob'];
$txt4=$_POST['fee'];
$txt5=generatePasword();


function checkName($cn,$stuname){
  $cmd="SELECT *FROM riyainfo WHERE stuname='$stuname'";
  $n=$cn->query($cmd)->num_rows;
  if($n>0){
    return true;
  }
  else{
    return false;
  }
  
  
}


$cmd="INSERT INTO riyainfo VALUES ('$txt1','$txt2','$txt3','$txt4','$txt5')";
$conn=new mysqli('localhost','root','','student');

if($conn->connect_error){


    die($conn->connect_error);
}

else{
  if (checkName($conn,$txt2)){
    header('location:form.php?riya=Name alerady exist');
  }
  else{
    if( $conn->query($cmd)==true)
    {
      header('location:form.php?riya=data saved');
    }
    else{
     echo $conn->error;
    }
  }
  

    
      
  
}


?>