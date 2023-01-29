<html>
<body>
	<center>
	<h1> Records
	<?php
	include 'connect.php';

	$query="SELECT * FROM paytbl";
	$result=mysqli_query($con, $query);
	while ($row=mysqli_fetch_assoc($result)){
		echo "<br><br>" .$row ['empno'];
		echo "&nbsp" .$row ['empname'];
		echo "&nbsp" .$row ['rate'];
		echo "&nbsp" .$row ['dayswork'];
		echo "&nbsp" .$row ['salary'];
	}
	?>
	<br><br>
	<a href="index.html">Return</a>
</body>
</html>