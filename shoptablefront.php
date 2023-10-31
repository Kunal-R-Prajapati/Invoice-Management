<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <?php  require_once("headerlink.php");?>
    <script>
        $(document).onclick(function(){
            $('#mymodal').modal({
                backdrop:"static",
                
            });
        });
    </script>
</head>

<body>
    <!-- <button class="btn btn-warning"> Add</button> -->
    <button class="btn btn-warning d-block m-auto" data-toggle="modal" data-target="#mymodal">Add</button>
    <div class="modal fade" id="mymodal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
            <div class="modal-content">
            <!-- <button class="close" data-dismiss="modal">&times;</button> -->
                <div class="modal-body">
            <div class="row">
    <div class="col-fluid">
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
                            <input type="text" name="tenant"  placeholder="Enter tenant name" class="form-control"/>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Data</button>
                        <br/>
                      
                    </div>
                </div>
            </form>
        </div>
    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div></div></div></div>

<div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
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
                                <TH>Action</TH>

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
                                      <td>
                                        <!-- <a href="shoptablebackdelete.php?shop_id=<?php echo $rw['shop_id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a> -->
                                        <a href="shoptablebackupdate.php?shop_id=<?php echo $rw['shop_id'];?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                    <?php }?>
                            </tbody>
                            <?php  if(isset($_GET['token'])) { ?>
                        <div class="alert alert-info">
                            <strong>Information</strong>
                            <span>
                                <?php echo $_GET['token'];?>
                            </span>
                        </div>
                            <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
        </div>

      </div>
    </div>
</body>

</html>