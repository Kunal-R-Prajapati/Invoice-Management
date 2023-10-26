<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $file_name = $_FILES['file_name']['name'];
    $file_size = $_FILES['file_name']['size'];
    $file_temp = $_FILES['file_name']['tmp_name'];
    $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    

    $imgid = 'FILES' . time() . mt_rand(100,999);
    $new_file_name='IMG' . time() . "." . $file_type;
    $dir="files/" . $new_file_name;
    $file_sizekb = $files_size/1024;
    $time=date("Y-m-d H:i:s");


    require_once('connection.php');
if($file_type == 'jpg' || $file_type == 'jpeg'|| $file_type == 'png')
{ 
    if($file_sizekb <= 500){
        if(move_uploaded_file($file_temp,$dir)){
            $cmd = "INSERT INTO imgdata VALUES ('$imgid','$new_file_name','$title','$time')";
        if($conn->query($cmd) == true){
            header("location:imagemaking.php?token=file uploaded");      
        }
        else{
            header("location:imagemaking.php?token=" . $conn->error);      
        }   
    }
    else{
        header("location:imagemaking.php?token=File Updated Failed");
    }
 }
    else{
        header("location:imagemaking.php?token=Upload file less tha 500kb,your file size is " . round($file_sizekb) . "KB");

    }

  }


  else{
   header("location:imagemaking.php?token=Invalid file type");
  }

}
else{
 header("location:imagemaking.php?token=Invalid Request");
}


?>