<html>
<body>
	<center>
	<h1>
	<?php
	include 'connect.php';
	
	$empno = $_POST ['empno'];
	$query="DELETE FROM paytbl WHERE empno=$empno";
	mysqli_query($con, $query);
	echo "Record Deleted";
	?>
	
	<br><br>
	<a href="index.html">Return</a>
</body>
</html>