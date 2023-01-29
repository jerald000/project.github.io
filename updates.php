<html>
<body>
	<center>
	<h1>
	<?php
	include 'connect.php';
	session_start();
	$empn=$_POST ['empno'];
	$query="SELECT * FROM paytbl WHERE empno=$empn ";
	$result=mysqli_query($con, $query);

	while ($row=mysqli_fetch_assoc($result)){

		echo "&nbsp" .$row ['empno'];
		echo "&nbsp" .$row ['empname'];
		echo "&nbsp" .$row ['rate'];
		echo "&nbsp" .$row ['dayswork'];
		echo "&nbsp" .$row ['salary']."<br>" ;
	}

	echo "<br>Enter New Values<br>";

	echo "
	<form ACTION='updated.php' METHOD='POST'>
	Emp Name: <input type='text' name='empname'><br>
	Rate: <input type='text' name='rate'><br>
	Days Work: <input type='text' name='dwork'><br><br>
	<input type='Submit' value='Update'>
	</form>
	";

	$_SESSION['empnum']=$empn
	?>
</body>
</html>