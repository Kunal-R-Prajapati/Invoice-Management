<div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
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