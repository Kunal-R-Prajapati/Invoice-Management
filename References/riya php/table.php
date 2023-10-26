<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
  $data=array(
  array('NAME'=>"riya", "Class"=>"BCA","City"=>"Rishikesh"),
  array('NAME'=>"Priya", "Class"=>"MCA","City"=>"Haridwar"),
  array('NAME'=>"Sriya", "Class"=>"BBA","City"=>"Dehradun"),
  array('NAME'=>"Triya", "Class"=>"BA","City"=>"Rorkee"),
  )
  ?> 
  
  <table  border="1px" width="500px" cellspacing="0" cellpadding='10'  >

  <thead>
  <th>NAME</th>
  <th>ClASS</th>
  <th>CITY</th>


  </thead>

  <tbody>
<?php foreach($data as $rm) { ?> 
<tr>
<td><?php echo $rm['NAME'];?></td>
<td><?php echo $rm['Class'];?></td>
<td><?php echo $rm['City'];?></td>


</tr>
<?php }?>

  </tbody>
  </table>
</body>
</html>