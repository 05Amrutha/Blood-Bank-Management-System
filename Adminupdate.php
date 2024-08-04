<?php
    require("connection.php");
    require("credentials.php");
    session_start();
     if(!isset($_SESSION['username']))
    {
        header("location: update.php");
    }
    if(isset($_POST['InsertNew']))
	    {
	        session_destroy();
	        echo '<script type="text/javascript">location.reload(true);</script>';
        }
?>


<html>
<head>
<title>UpdateRecords</title>
<link rel="stylesheet" href="style.css">

</head>
<form method="post">
<fieldset>
<input type="text" name="id" placeholder=" Enter yourDonar_Id " style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;" >
<br><br>
<input type="text" name="name" placeholder=" Enter Name " style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;" >
<br><br>
<input type="text" name="age" placeholder=" Enter your age" style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;">
<br><br>
<input type="text" name="date" placeholder=" Enter PostingDate"
style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;"><br><br>
<input type="text" name="gender" placeholder=" Enter Gender"
style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;"><br><br>
<input type="text" name="group" placeholder=" Enter Blood Group"
style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;"><br><br>
<input type="text" name="number" placeholder=" Enter Phone no"
style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;"><br><br>
<input type="text" name="address" placeholder=" Enter Address"
style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;"><br><br>
<input type="text" name= "e-mail" placeholder=" Enter Email Address"
style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;"><br><br>
<input type="text" name="condition" placeholder="Covid History"
style="width:100%;height:30px;
border: 2px solid #f44336; border-radius:3px; background:transparent;"><br><br>
<button type="submit" name="Update" style="width:100%;height:30px;border: 2px solid #f44336; border-radius:3px;
cursor:pointer;background-color:#f44336">Update</button>&ensp;
</fieldset>
</form>
<a href="login_panel.php"><button class="btn btn-danger" align="center" style="float:right" background-color="#ffffff">Back</button></a>
<!--button type="button" name="InsertNew" class = "InsertNew" align="right" style="float:right">NewRecord</button---->
<?php
 global $connectionObj;
                if(isset($_POST['Update']))
                {
                	 $setId= mysqli_real_escape_string($connectionObj,$_POST['id']);
                     $setN= mysqli_real_escape_string($connectionObj,$_POST['name']);
                     $setage= mysqli_real_escape_string($connectionObj,$_POST['age']);
                     $setdate= mysqli_real_escape_string($connectionObj,$_POST['date']);
                     $setGender= mysqli_real_escape_string($connectionObj,$_POST['gender']);
                     $setBGroup= mysqli_real_escape_string($connectionObj,$_POST['group']);
                     $setPhone= mysqli_real_escape_string($connectionObj,$_POST['number']);
                     $setAddress= mysqli_real_escape_string($connectionObj,$_POST['address']);
                     $setEmail= mysqli_real_escape_string($connectionObj,$_POST['e-mail']);
                     $setCondition= mysqli_real_escape_string($connectionObj,$_POST['condition']);


                            $query="INSERT INTO `donar` (`Donar_Id`, `names`, `Age`, `Posting_Date`, `Gender`, `BloodGroup`, `Phone_no`, `Address`, `Email`, `Status`) VALUES
                            ('$setId','$setN', '$setage','$setdate','$setGender','$setBGroup','$setPhone', '$setAddress', '$setEmail','$setCondition');";
                            $res=mysqli_query($connectionObj,$query);
                            if($res)
                            {
                                echo "<script>alert('Updated');</script>";
                                echo "<script>window.location.href = \"display.php\";</script>";
                            }

                }
 ?>
