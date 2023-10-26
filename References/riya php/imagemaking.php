<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4">
            <h3 class="mt-4">UPLOAD IMAGE</h3>
            <form method="post" action="behind.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>title</label>
                    <input class="form-control" type="text" name="title" required placeholder="enter tiltle here"/>
                </div>
                <div class="form-group">
                    <label>upload image</label>
                    <input type="file" required class="form-control" name="file_name"/>
                </div>
                <button type="submit" class="btn btn-primary btn-block">upload</button>

            </form>
            <h4 class="mt-4">
                <?php
                if(isset($_GET['token']))
                {
                    echo $_GET['token'];
                }
                ?>

                
             

            </h4>


        </div>    
        
        <div class="col-lg-8">
            <div class="row">

            <?php
            require_once('connection.php');
            $result=$conn->query("select* from imgdata");
            while($row=$result->fetch_assoc()){?>
             <div class="col-md-3  m-3">
                <img src="files/ <?php echo $row['imgname'] ?>" class="img-fluid" />
                <h4 class="mt-2"><?php echo $row['title']; ?></h4>
                <span class="small text-secondary"><?php echo $row['timing']; ?></span>
             </div>
           <?php } ?>            
            
            </div>
        </div>
    </div>

    </div>
</body>
</html>