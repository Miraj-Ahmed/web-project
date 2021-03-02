<?php
$server ="localhost";
$user ="root";
$password ="";
$dbname ="project1";

$con = mysqli_connect($server,$user,$password,$dbname);


if ($con) 
{
	?>
		<script>
			alert('connection successfull');
		</script>
	<?php
}
else
{
	?>
		<script>
			alert('connection failed');
		</script>
	<?php
}
?>