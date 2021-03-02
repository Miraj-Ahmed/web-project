<?php

include "dbcon.php"

$id= $_GET['ids'];
 $deletequery = " select * from submit where id=$id";

  $query = mysqli_query($con, $deletequery);

  	if ($query) 
{
	?>
		<script>
			alert('delete successfull');
		</script>
	<?php
	header('location:select.php');
}
else
{
	?>
		<script>
			alert('delete failed');
		</script>
	<?php
}

?>