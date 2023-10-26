<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form handling</title>
</head>
<body>

<form action="backpage.php" method="post">
<input type="text" name="sname" required placeholder="enter your name"/><br/>
<input type="text" name="pass" required placeholder="enter your password"/><br/>



<input type="submit" value="login in"/><br/>

</form>

<h1>
<?php
if (isset($_GET['riya']))

{
    echo $_GET['riya'];
}
?>

</h1>
    
</body>
</html>