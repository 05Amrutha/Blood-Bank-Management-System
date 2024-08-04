<?php
    require("connection.php");
    require("credentials.php");
    session_start();
		?>
<html>
<head>
	<title>Display Records</title>
	<style >
		<body>
			left:18%;
			top:10%;
		</body>
	</style>
</head>
<body>
	<?php
	$var=mysqli_query($connectionObj,"select * from bloodgroup ");
		echo "<table border size=10>";
		echo"<tr >
				<th background-color:pink>
					Id
				</th>
				<th background-color:pink>
						Names
				</th>
				<th background-color:pink>
					BloodGroup
				</th>
				</tr>";
		if(mysqli_num_rows($var)>0)
		{
		while($arr=mysqli_fetch_row($var))
		{ echo "<tr><td background-color:white>$arr[0]</td><td  background-color:pink>$arr[1]</td><td  background-color:white>$arr[2]</td> ";
		}
		echo "</table>";
		mysqli_free_result($var);
		}
		mysqli_close($connectionObj);
		?>
	<a href="bbms.php"><button style="width:75px;height:44px;cursor:pointer;border-radius:15px;
	border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;float: right;">Back</button></a>
	<img src="donationfacts.jpg"></a>
</form> 
	</body>
