
<!DOCTYPE html>
<html>
<head>
<title>view</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div id="tabble1">
	<h2>----view page----</h2>
<table border="3" cellpadding="30" cellspacing="6">
  <tr>
    <th>id</th>
    <th>Email</th>
    <th>name</th>
    <th>address</th>
    <th>phone</th>
    <th>country</th>
    <th colspan="2">operation</th>
  </tr>

  <?php
  include 'dbcon.php';

  $selectquery = "select * from submit";

  $query = mysqli_query($con, $selectquery);
  

   while ($result = mysqli_fetch_assoc($query)) {
   
  
  ?>

  <tr>

  	<td><?php echo $result['id']; ?></td>
  	<td><?php echo $result['Email']; ?></td>
  	<td><?php echo $result['name']; ?></td>
  	<td><?php echo $result['address']; ?></td>
  	<td><?php echo $result['phone']; ?></td>
  	<td><?php echo $result['country']; ?></td>
  	<td><a href="update.php?id=<?php echo $result['id']; ?>"> <i class="fa fa-edit"> </i></a></td>
  	<td><a href="delete.php?ids=<?php echo $result['id']; ?>"> <i class="fa fa-trash" aria-hidden="true"></i></a></td>

  </tr>
<?php


}
  ?>
</table>
</div>
</body>
</html>
