<?php
    require("connection.php");
    require("credentials.php");
    session_start();
?>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" href="style.css">
<body >
<form method="post">
<fieldset>
<input type="text" name="name" placeholder=" Enter your Name" style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;" >
<br><br>
<input type="text" name="age" placeholder=" Enter your age" style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;">
<br><br>
<input type="text" name="number" placeholder=" Enter your phone number
+91" style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;">
<br><br>
<input type="number" name="weight" placeholder=" Enter your weight" style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;">
<br><br>
<input type="text" name="Gender" placeholder=" Gender" style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;">
<br><br>
<!--<a href="thankyou.html">--><button type="submit" name="register" style="width:20%;height:30px;margin-left: 40%; 
border: 3px solid #f44336;border-radius:3px; cursor:pointer;background-color:#f44336">Register</button>
&ensp;


</fieldset>
</form>
 <a href="bbms.php"><button type="button" name ="back" class="btn btn-danger" align="right" style="float:right">Back</button></a> 
<?php
    global $connectionObj;
                if(isset($_POST['register']))
                {

                    $setN= mysqli_real_escape_string($connectionObj,$_POST['name']);
                    $setage= mysqli_real_escape_string($connectionObj,$_POST['age']);
                    $setPhone= mysqli_real_escape_string($connectionObj,$_POST['number']);
                    $setweight= mysqli_real_escape_string($connectionObj,$_POST['weight']);
                    $setGender= mysqli_real_escape_string($connectionObj,$_POST['Gender']);
                             // echo "<script>alert('$setN');</script>";

                            $query="INSERT INTO `register` (`Name`, `Age`, `Phone_no`, `Weight`, `Gender`) VALUES
                            ('$setN','$setage',  '$setPhone','$setweight','$setGender');";

                            $res=mysqli_query($connectionObj,$query);
                            // echo "<script>alert('$res');</script>";
                            if($res)
                            {
                                echo "<script>alert('registered');</script>";
                                echo "<script>window.location.href = \"thankyou.html\";</script>";
                            }
                }
?>
