
<?php 
$id=$_GET['srr'];
$conn=new mysqli('localhost','root','','student');
$cmd="SELECT * FROM riyainfo WHERE sr='$id'";

$result=$conn->query($cmd)->fetch_assoc();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4"></div>
      <div class="col-md-4">
         <form method="post" action="back_update.php">
          <div class="card">
            <div class="card-header bg success">
              <h4 class="text-dark">Update Here</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>ID</label>
                 <input type="text" value="<?php echo $result['sr']; ?>" name="sr" required placeholder="enter your user id" class="form-control" readonly />
              </div>
              <div class="form-group">
                <label>User Name</label>
                 <input type="text"  value="<?php echo $result['stuname']; ?>"  name="stuname" required placeholder="enter your user name" class="form-control" />
              </div>
               <div class="form-group"> 
               <label>Date of Birth</label>
               <input type="text"  value="<?php echo $result['dob']; ?>" name="dob" required placeholder="enter your dob"  class="form-control"/>
                 </div>
                 <div class="form-group"> 
               <label>Fee Amount</label>
               <input type="text"  value="<?php echo $result['fee']; ?>" name="fee" required placeholder="enter your fee"  class="form-control"/>
               </div>
               <div class="form-group">
                <label>Password</label>
                 <input type="text" value="<?php  echo $result['spassword'] ?>" name="spassword" required placeholder="enter your password" class="form-control" />
              </div>
               <button  type="submit" class="btn btn-primary btn-block">Update Data</button>
               
              
            </div>
          </div>
          </form>
</div>
<div class="col-md-4"></div>
</div>
      </div>

</body>