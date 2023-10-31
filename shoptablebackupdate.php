<?php
$_id=$_GET['shop_id'];
$conn =new mysqli('localhost','root','','invoice_management');
$cmd="SELECT * FROM shop_data WHERE shop_id='$_id' ";
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
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4 mt-5">
            <form  method ="POST" action="shoptablebackupdateback.php" >
                <div class="card">
                    <div class="card-header bg-success">
                        <h4 class="text-light">Update Here</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                            <label >Shop id</label>
                            <input type="text" value="<?php echo $result['shop_id']?>" name="sid" readonly placeholder="Enter shop id" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label >Shop Address</label>
                            <input type="text" value="<?php echo $result['shop_address']?>" name="saddress" required placeholder="Enter shop address" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label >Shop Rent</label>
                            <input type="text" name="srent"  value="<?php echo $result['shop_rent']?>" required placeholder="Enter Shop Rent" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label >Shop Status</label>
                            <input type="text" name="sstatus" value="<?php echo $result['shop_status']?>" required placeholder="Enter Shop Status" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label >Tenant</label>
                            <input type="text" name="tenant"value="<?php echo $result['tenant']?>" required readonly placeholder="Enter Tenant name" class="form-control"/>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                        <br/>
                        
                    </div>
                </div>
            </form>
        <div class="col-md-4"></div>

        </div>
        </div>