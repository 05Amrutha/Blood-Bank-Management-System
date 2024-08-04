<?php
    require("connection.php");
    require("credentials.php");
    session_start();
     if(!isset($_SESSION['username']))
    {
        header("location: edit.php");
    }
    if(isset($_POST['logout']))
    {
        session_destroy();
        header("location: login.php");
    }
    $DonarID=$_GET['donarID'];
    $query="SELECT * FROM `donar` where Donar_ID='$DonarID';";
                $result=mysqli_query($connectionObj,$query);
                
                while($row=mysqli_fetch_array($result))
                {
                    $ID=$row['Donar_Id'];
                    $Name=$row['names'];
                    $age=$row['Age'];
                    $PostingDate=$row['Posting_Date'];
                    $gender=$row['Gender'];
                    $BloodGroup=$row['BloodGroup'];
                    $contact=$row['Phone_no'];
                    $email=$row['Email'];
                    $Address=$row['Address'];
                    $Status=$row['Status'];
                }
    
                if(isset($_POST['delete-btn']))
                {   $query="SELECT * FROM `donar`;";
                    $result=mysqli_query($connectionObj,$query);
                    if(mysqli_num_rows($result)==1)
                    {
                        echo "<script>alert('Table should contain atleast 1 entry!');</script>";
                        echo '<script type="text/javascript">location.reload(true);</script>';
                    }
                    else{
                        $delDonarID=$DonarID;
                        $delQuery="DELETE FROM `donar` WHERE `Donar_Id`='$delDonarID';";
                            $delResult=mysqli_query($connectionObj,$delQuery);
                            if($delResult)
                            {                               
                                echo "<script>alert('Deleted!')</script>";
                                echo "<script>window.location.href = \"display.php\";</script>";
                                
                            }
                        }
                    
            
                }
?>


<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Member</title>
    </head>
    <body >
        <div class="content">
        </div>
        <style>
            .disnone{
                opacity:0;
            }
            .container
            {
                z-index: 2;
                position: fixed;
                left: 18%; 
                top: 10%;
                background-color: rgba(0, 0, 00, 0.3);
                background-position: center;
                background-size: cover;
                float: center;
                height: 88%;
                width: 30%;
                opacity: 100%;
                border-radius: 20px;
                border-right: 10%;
                position: center;
                background-size: cover;  
                transition: 0.5s;  
                margin-left: 165px;
                padding:20px;
                max-width: 48%;
                color: white;
                padding-right: 20px;
                max-height: 80%;
            }
            .activityButton
            {
                padding: 5px;
                /background: #ffffff;/
                text-decoration: none;
                background-color: #d43f3a;
                border-color: #;
                /* margin-top: -30px;
                margin-right: 40px; */
                border-radius: 5px;
                border:1px;
                font-size: 15px;
                font-weight: 600;
                color:#ffffff ;
                transition: 0.5s;
                margin-left: 20px;
                transition-property: background;
            }
    
            .activityButton:hover
            {
                background: #ffffff;
                color:#d9534f;
            }
            
            
        </style>
        <div class="container">



            
            <h1><center>Edit Donar Details</center></h1>
            
            <form method="post" > 
                <table>
                <div><tr>
                                
                                <td>Donar ID</td>
                                <!-- <td><input type="text" name="setMemberID"> </td> -->
                                <td><?php echo "$ID";?></td>
                            </tr>    
                        </div>
                        <div>
                            <tr>
                                
                                <td>Name</td>
                                <td><input type="text" name="setN" value=<?php echo "$Name"?>></td>
                            </tr>    
                        </div>   

                        <div><tr>
                                
                                <td>Age</td>
                                <td><input type="text" name="setAge" value=<?php echo "$age"?>> </td>
                            </tr>    
                        </div>
                        
                        <div>
                            <tr>
                                 <td>Posting Date</td>
                                <td><input type="text" name="setPD" value=<?php echo "$PostingDate"?>> </td>
                                    
                            </tr>  
                        </div> 
                        <div>
                            <tr>
                                 <td>Gender</td>
                                <td><input type="text" name="setGender" value=<?php echo "$gender"?>> </td>
                                    
                            </tr>  
                        </div> 
                        <div><tr>
                                
                                <td>Blood Group</td>
                                <td><input type="text" name="setBG" value=<?php echo "$BloodGroup"?>> </td>
                            </tr>    
                        </div>
                        <div><tr>
                                
                                <td>Contact</td>
                                <td><input type="text" name="setPhone" value=<?php echo "$contact"?>> </td>
                            </tr>    
                        </div>
                        <div><tr>
                                
                                <td>e-mail</td>
                                <td><input type="text" name="setEmail" value=<?php echo "$email"?>> </td>
                            </tr>    
                        </div> 
                        <div><tr>
                                
                                <td>Address</td>
                                <td><input type="text" name="setAddress" value=<?php echo "$Address"?>> </td>
                            </tr>    
                        </div>
                        <div><tr>
                                
                                <td>Covid History</td>
                                <td><input type="text" name="setStatus" value=<?php echo "$Status"?>> </td>
                            </tr>    
                        </div>

                </select> </td>
                            </tr>    
                        </div>

                        <tr>
                            <td></td>
                            <td><button type="submit" name="create_btn" class="activityButton">Update</button></td>
                        </tr> 
                </table>
            </form>
                
            
            <?php
                global $connectionObj;
                if(isset($_POST['create_btn']))
                {
                
                    $setN= mysqli_real_escape_string($connectionObj,$_POST['setN']);
                    $setAge= mysqli_real_escape_string($connectionObj,$_POST['setAge']);
                    $setPostingDate= mysqli_real_escape_string($connectionObj,$_POST['setPD']);
                    $setGender= mysqli_real_escape_string($connectionObj,$_POST['setGender']);
                    $setBG= mysqli_real_escape_string($connectionObj,$_POST['setBG']);
                    $setPhone= mysqli_real_escape_string($connectionObj,$_POST['setPhone']);
                    $setEmail= mysqli_real_escape_string($connectionObj,$_POST['setEmail']);
                    $setAddress= mysqli_real_escape_string($connectionObj,$_POST['setAddress']);
                    $setStatus= mysqli_real_escape_string($connectionObj,$_POST['setStatus']);
                     $query= " Update `donar` SET `names`='$setN',`Age`='$setAge',`Posting_Date`='$setPostingDate',`Gender`='$setGender',`BloodGroup`='$setBG',`Phone_no`='$setPhone',`Email`='$setEmail',`Address`='$setAddress',`Status`='$setStatus' WHERE `donar`.`Donar_Id`='$DonarID';";
                            $res=mysqli_query($connectionObj,$query);
                            
                            if($res)
                            {
                                echo "<script>alert('Donar Details Updated!');</script>";

                            }
                            else{
                              echo "<script>alert('error');</script>";
                            }
                            echo "<script>window.location.href = \"display.php\";</script>";
                            
                            
                        
                        
                    
                }



            ?>
            <!--  -->
            
            <form method="POST">

            <table ><tr><td class=disnone>................</td><td >
            <button type="submit" name="delete-btn" class="activityButton">DeleteDonar</button></td>
            </table>
          </form>
            

            <!-- registration section end -->
        </div>

            
            
    </body>
</html>
