
<?php

//include connection script to database:
	include("connection.php");
	
//query select all fields from table users:
	$r = mysqli_query($dbc, "SELECT * FROM users");
	
//create order by id name:	
	echo "<p><a href='orderbyname.php'><b>Order by Name</b></a></p>";
	
//create table:	
	echo "<table align='center' border='1' cellspacing='3' cellpadding='3' width='75%'>
	<tr>
		<td align='left'><b>Name</b></td><td align='left'><b>Email</b></td>
	</tr>";

//use while loop to create an associative array with values lastname, firstname and email:	
	while($row = mysqli_fetch_array($r)){
		//output values from associative array:
		echo "<tr><td align='left'>".$row['last_name'].", ".$row['first_name']."</td><td align='left'>".$row['email']."</td></tr>";
		
	
	}
	
	//close mysql connection:
mysqli_close($dbc);

?>