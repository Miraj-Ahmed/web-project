
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="img/images.jpg">
</head>
<body>


  <!------------------------menu------------>
  <section id="menu">
  
      <nav id="navbar-example2" class="navbar navbar-light bg-light">
        <img src="img/images.jpg">
  <a class="navbar-brand" href="#"> <b>Explore Bangladesh </a>
  <ul class="nav nav-pills">
     <li class="nav-item">
      <a class="nav-link" href="index.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#us">about us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#accessories">Accesorries</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="select.php">check Form</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Spots </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Hill_side.html">Hill side</a>
         <a class="dropdown-item" href="Sea_beach.html">Sea beach</a>
         <a class="dropdown-item" href="Dhaka.html">Inside Dhaka</a>

      </div>
    </li>
  </ul>
</nav>
<hr>
	<!--------------form------------->
	<section id="form">
		<div class="container">
			<form action="" method="POST">

<?php

include 'dbcon.php';

$id=$_GET['id'];

 $selectquery = " select * from submit where id=$id";

  $query = mysqli_query($con, $selectquery);

 $result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
  $id=$_GET['id'];
  
  $Email = mysqli_real_escape_string($con, $_POST['Email']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $country = mysqli_real_escape_string($con, $_POST['country']);
}

  $updatequery = "update INTO submit set id=$id, Email=$Email, name=$name, address=$address, phone=$phone, country=$country where id=$id" ;


  

  $query = mysqli_query($con, $updatequery);

  if ($query) 
{
  ?>
    <script>
      alert('Inserted successfull');
    </script>
  <?php
}
else
{
  ?>
    <script>
      alert('Inserted failed');
    </script>
  <?php
}

?>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="Email" value="<?php echo $result['Email']; ?>"  aria-describedby="emailHelp" placeholder="Enter email">
   </div>
  <br>
   <div class="form-group">
    <label for="exampleInputEmail1">Enter your name : </label>
    <input type="name" class="form-control"  name="name" value="<?php echo $result['name']; ?>" id="exampleInputname" aria-describedby="nameHelp" placeholder="Enter your name">
   </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter your address : </label>
    <input type="address" class="form-control" name="address" value="<?php echo $result['address']; ?>" id="exampleInputaddress" aria-describedby="addresslHelp" placeholder="Enter your address">
   </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile Number</label>
    <input type="tel" class="form-control" name="phone" value="<?php echo $result['phone']; ?>" id="exampleInputnumber" placeholder="Number">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">country</label>
    <input type="text" class="form-control" id="exampleInputcountry" name="country" value="<?php echo $result['country']; ?>" placeholder="country">
  </div>
  <br>
 
  <button type="submit" value="update" class="btn btn-primary" style="
    color: #19bd0d;
    background-color: rgba(230, 213, 234, 0.9);">Submit</button>
</form>			
		</div>
		
	</section>


	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/isotope.function.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>



