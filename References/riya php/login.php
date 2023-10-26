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
</head>
<body>
    
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5">
                    
                <form method="post" action="check_login.php">
                    <div class="card">
                        <div class="card-header bg-success">
                        <h1 class="text-dark"> Login Here </h1>

                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>NAME</label>
                                <input type="text" name="stuname" required class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>PASSWORD</label>
                                <input type="password" name="spassword" required class="form-control"/>
                            </div>
                            <button type="submit"  class="btn btn-primary btn-block">login</button>
                            <?php 
                 if(isset($_GET['token'])) {  ?>
                 <div class="alert alert-info">
                  <strong>information</strong>
                  <span>
                  <?php echo $_GET['token']; ?>


                  </span>
                 </div>
                 
                 
                 <?php } ?> 


                        </div>
                    </div>
</form>
                </div>
            </div>
        </div>

        
      

        

        
    


    

    <h4>
        <?php
        if(isset($_GET['token']))
        {
            echo$_GET['token'];
        }
        ?>
    </h4>
</body>
</html>