<html>
<body>
	<center>
	<h1>
	<br><br>
	<?php
	include 'connect.php';

	$empno=$_POST['empno'];
	$empname=$_POST['empname'];
	$rate=$_POST['rate'];
	$dwork=$_POST['dwork'];
	$salary=($rate*$dwork);
	
	echo "<br><br>Emp No: " .$empno;
	echo "<br><br>Emp Name: " .$empname;
	echo "<br><br>Salary: " .$salary;
	$query="INSERT INTO paytbl(empno, empname, rate, dayswork, salary) VALUES ('$empno','$empname','$rate','$dwork','$salary')";
	mysqli_query($con,$query);
	?>
	
	<br><br>
	<a href="index.html">Return</a>
</body>
</html>