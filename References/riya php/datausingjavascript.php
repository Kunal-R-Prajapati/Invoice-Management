 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select id="sr" onchange="setValue()">
<?php
require_once('connection.php');
$result=$conn->query("SELECT  * FROM riyainfo");
while($rw=$result->fetch_assoc())
{?>
<option>
    <?php echo$rw['stuname'];?>
</option>
<?php }?>

    </select>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>S.NO</th>
            <th>STUDENT NAME</th>
            <th>DOB</th>
            <th>FEE</th>
            <th>PASSWORD</th>

            


        </thead>
        <tbody>
            <?php


        if(isset($_GET['VAL']))
        {
            $ab=$_GET['VAL'];
            $res=$conn->query("SELECT * FROM riyainfo WHERE stuname='$ab'");
            while($rw=$res->fetch_assoc()){
        ?>
            <tr>
                <td><?php  echo $rw['sr']?></td>
                <td><?php  echo $rw['stuname']?></td>
                <td><?php  echo $rw['dob']?></td>
                <td><?php  echo $rw['fee']?></td>
                <td><?php  echo $rw['spassword']?></td>
                <!-- <td><a href="delete.php?VAL=<?php echo $rw['sr'];?>" class="btn btn-danger"><i class="fa fa-trash">delete</i></a></td> -->

                
            </tr>
            <?php  }}?>
        </tbody>

    </table>
    
</body>
<script type="text/javascript">
    function setValue(){
      let ids=document.getElementById("sr").value;
      window.location.href="datausingjavascript.php?VAL="+ids;
        
    }
</script>

</html>