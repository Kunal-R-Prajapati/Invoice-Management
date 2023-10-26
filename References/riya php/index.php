<?php require_once('manage_session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h1> USER PROFILE</h1>
<table border="1" cellspacing="0" cellpadding=""10>

<tr>
    <td>USER ID</td>
    <td><?php echo $userid;?></td>

</tr>

<tr>
    <td>USER NAME</td>
    <td><?php echo  $username ;?></td>

</tr>

<tr>
    <td>USER DOB</td>
    <td><?php echo $userdob;?></td>

</tr>

<tr>
    <td>USER FEE</td>
    <td><?php echo $userfee;?></td>

</tr>

<tr>
    <td>USER PASSWORD</td>
    <td><?php echo $userpassword;?></td>

</tr>
</table>
<a href="login.php">logout</a>

</body>
</html>