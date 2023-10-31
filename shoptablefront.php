<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php  require_once("headerlink.php");?>
</head>
<body>
    <button class="btn btn-warning"> Add</button>
<div class="container-fluid">
    <div class="row">
    <div class="col-md-4">
        <form  method ="POST"action="shoptableback.php">
                <div class="card">
                    <div class="card-header bg-success">
                        <h4 class="text-light">Shop Registration</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                            <label >Shop id</label>
                            <input type="text" name="sid" required placeholder="Enter shop id" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label >Shop Address</label>
                            <input type="text" name="saddress" required placeholder="Enter shop address" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label >Shop Rent</label>
                            <input type="text" name="srent" required placeholder="Enter Shop rent" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label >Shop Status</label>
                            <input type="text" name="sstatus" required placeholder="Enter Shop Status" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label >Tenant </label>
                            <input type="text" name="tenant" required placeholder="Enter tenant name" class="form-control"/>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Data</button>
                        <br/>
                        <?php  if(isset($_GET['token'])) { ?>
                        <div class="alert alert-info">
                            <strong>Information</strong>
                            <span>
                                <?php echo $_GET['token'];?>
                            </span>
                        </div>
                            <?php }?>
                    </div>
                </div>
            </form>
        </div>
    </div>
      <div class="row">
        <div class="col-md-8">
         <div class="card"> 
                    <div class="card-header bg-success">
                    <h4 class="text-light">shop Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-success">
                            <thead>
                                <TH>SHOP ID</TH>
                                <TH>shop Address</TH>
                                <TH>shop rent</TH>
                                <TH>shop status</TH>
                                <TH>tenant</TH>
                                <!-- <TH>Action</TH> -->

                            </thead>
                            <tbody>
                                <?php
                                $conn=new mysqli('localhost','root','','invoice_management');
                                $result=$conn->query("SELECT * FROM shop_data");
                                while ($rw =$result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                    <td><?php echo $rw['shop_id'];?></td>
                                    <td><?php echo $rw['shop_address'];?></td>
                                    <td><?php echo $rw['shop_rent'];?></td>
                                    <td><?php echo $rw['shop_status'];?></td>
                                    <td><?php echo $rw['tenant'];?></td>
                                </tr>
                                    <?php }?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>

      </div>
    </div>
</body>
</html>