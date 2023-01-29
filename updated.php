<html>
<body>
	<center>
	<h1>
	<?php
	include 'connect.php';
	
	session_start();
	$empno=$_SESSION['empnum'];
	
	$empname=$_POST['empname'];
	$rate=$_POST['rate'];
	$dwork=$_POST['dwork'];
	
	$salary=($rate*$dwork);

	$query="UPDATE paytbl SET empname='$empname', rate='$rate', dayswork='$dwork', salary='$salary' WHERE empno='$empno' ";
	mysqli_query($con, $query);
	echo "Record Updated";
	?>
	<br><br>
	<a href="index.html">Return</a>
</body>
</html>