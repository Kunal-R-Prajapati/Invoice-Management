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


<?php  include_once('bar.php');?>

  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-4">
         <form method="post" action="back1.php">
          <div class="card">
            <div class="card-header bg success">
              <h4 class="text-dark">User Registration</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>user name</label>
                 <input type="text" name="stuname" required placeholder="enter your user name" class="form-control" />
              </div>
               <div class="form-group"> 
               <label>Date of Birth</label>
               <input type="text" name="dob" required placeholder="enter your dob"  class="form-control"/>
                 </div>
                 <div class="form-group"> 
               <label>Fee Amount</label>
               <input type="text" name="fee" required placeholder="enter your fee"  class="form-control"/>
               </div>
               <button  type="submit" class="btn btn-primary btn-block">Save Data</button>
               
               <?php 
                 if(isset($_GET['riya'])) {  ?>
                 <div class="alert alert-info">
                  <strong>information</strong>
                  <span>
                  <?php echo $_GET['riya']; ?>


                  </span>
                 </div>
                 
                 
                 <?php } ?> 

            </div>
          </div>
          </form>
      </div>

      <div class="col-md-8">
        <div class="card-header  bg-secondary">
          <h4 class="text-light">Available Data</h4>
   

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-success">

            
             <thead>
  <th>S.NO</th>
  <th>NAME</th>
  <th>DOB</th>
  <th>FEE</th>
  <th>PASSWORD</th>
  <th>ACTION</th>



  </thead>
  <tbody>
      <?php

$conn=new mysqli('localhost','root','','student');
$result=$conn->query("SELECT * FROM riyainfo");

while($rw=$result->fetch_assoc())
 {?>
 <tr>
<td><?php echo $rw['sr']; ?></td>
<td><?php echo $rw['stuname']; ?></td>
<td><?php echo $rw['dob']; ?></td>
<td><?php echo $rw['fee']; ?></td>
<td><?php echo $rw['spassword']; ?></td>
<td><a href="delete.php?srr=<?php echo $rw['sr'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
<td><a href="update.php?srr=<?php echo $rw['sr'];?>" class="btn btn-info"><i class="fa fa-edit"></i></a></td>





 </tr>
 
 <?php }?>  
  </tbody>

  

  </table>
  <?php 
   if(isset($_GET['riya'])) {  ?>
  <div class="alert alert-info">
  <strong>information</strong>
  <span>
   <?php echo $_GET['riya']; ?>
  </span>
  </div>
  <?php } ?> 

  </div>
  </div>


</div >
  </div>

  
   

   



    

   


  
  


 
</body>
</html>