<?php
    require("connection.php");
    require("credentials.php");
    session_start();
     if(!isset($_SESSION['username']))
    {
        header("location: donationRequests.php");
    }
    if(isset($_POST['logout']))
    {
        session_destroy();
        header("location: login_panel.php");
    }
    	$var=mysqli_query($connectionObj,"select * from register ");
		echo "<table border size=10>";

		echo"<tr>
				<th>
					Name
				</th>
				<th>
					Age
				<th>
					Phone_no
				</th>
				<th>
					Weight
				</th>
				<th>
					Gender
				</th>
				</tr>";
		if(mysqli_num_rows($var)>0){
		while($arr=mysqli_fetch_row($var))
		{ echo "<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td> <td>$arr[3]</td>
		<td>$arr[4]</td> </tr>";
		}

		echo "</table>";
		mysqli_free_result($var);
		}
		mysqli_close($connectionObj);
		?>
<html>
<head>
	<title>Donation Request</title>
	<a href="login_panel.php"><button class="btn btn-danger" align="center" style="float:right" background-color="#ffffff">Back
	</button></a>
	<style >
		body
		{

			margin-left: 38%;
		}

	</style>
</head>
<body >
	<img src="donate.jpg" height="60%" width="60%" >

</body>
