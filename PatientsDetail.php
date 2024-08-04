<?php
    require("connection.php");
    require("credentials.php");
    session_start();
     if(!isset($_SESSION['username']))
    {
        header("location: display.php");
    }
    if(isset($_POST['logout']))
    {
        session_destroy();
        header("location: login.php");
    }


?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <title>Donar Details</title>

        <a rel="stylesheet" href="tableStyle.css"></a>
        <a href="login_panel.php"><button class="btn btn-danger" align="center" style="float:right" background-color="#ffffff">HomePage </button></a>

        <style>

            .activityButton
            {
                padding: 5px;
                background: #ffffff;
                text-decoration: none;

                /* margin-top: -30px;
                margin-right: 40px; */
                border-radius: 5px;
                font-size: 15px;
                font-weight: 600;
                color: rgb(224, 125, 67);
                transition: 0.5s;
                margin-left: 20px;
                transition-property: background;
            }

            .activityButton:hover
            {
                background: #f78f5f;
                color:rgb(255, 255, 255)
            }
            table {
                border-collapse: separate;
                margin-left: 20%;
                text-indent: initial;
                border-spacing: 2px;

                }
            td
            {
                display: table-cell;
                vertical-align: inherit;
                color:black;
            }

                    td:nth-child(1)
                      {
                        background-color: white;
                      }
                      td:nth-child(2)
                      {
                        background-color: pink;
                      }
                      td:nth-child(3)
                      {
                        background-color: white;
                      }
                      td:nth-child(4)
                      {
                      background-color: pink;
                      }
                      td:nth-child(5)
                      {
                       background-color: white;
                       }
                      td:nth-child(6)
                      {
                      background-color: pink;
                       }
                      td:nth-child(7)
                        {
                    background-color: white;
                        }
                    td:nth-child(8)
                        {
                         background-color: pink;
                        }
                         td:nth-child(9)
                         {
                        background-color: white;
                        }
                    td:nth-child(10)
                    {
                    background-color: pink;
                    }




        </style>
        </head>
        <div class="container">


<body background-imgage:url("request_opt.jpg")>

            <h1><center>Donar List</center></h1>


            <table border>
                <tr>
                    <th >Donar ID</th>
                    <th style ="background-color: pink"> Name</th>
                    <th >age</th>
                    <th style ="background-color: pink">PostingDate</th>
                    <th>Gender</th>
                    <th style ="background-color: pink">BloodGroup</th>
                    <th>Phone</th>
                    <th style ="background-color: pink">Address</th>
                    <th>email</th>
                    <th style ="background-color: pink">Covid History</th>
                    <th>Edit</i></th>

                </tr>
            <?php




                $query="SELECT * FROM `Donar`;";
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
                    echo"
                    <tr>
                    <td>$ID</td>
                    <td> $Name</td>
                    <td>$age</td>
                    <td>$PostingDate</td>
                    <td>$gender</th>
                    <td>$BloodGroup</td>
                    <td>$contact</td>
                    <td>$email</td>
                    <td>$Address</td>
                    <td>$Status</td>



                    <td><a href=./edit.php?donarID=$ID><button type=\"submit\" name=\"editUser\"><i class=\"fas fa-user-edit\"></button></i></a></td>

                    </tr>";

                }
                echo "</table>";
            ?>

        </div>



    </body>
</html>
