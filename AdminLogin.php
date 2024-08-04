<?php
    require("connection.php");
    require("credentials.php");
    session_start();
    if(isset($_POST['logout']))
        {
          session_destroy();
          header("location: bbms.php");
        }
?>



<html>
<head> <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <title>Blood Bank</title>
<style>

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }

section {
    width:600px;

    float:left;
    padding:10px;
}

.flex-container {
    display: -webkit-flex;
    display: flex;
    width: 400px;
    height: 250px;
  position:center;
    background-color: green;
}

.flex-item {
    background-color: cornflowerblue;
    width: 100px;
    height: 100px;
    margin: 10px;
}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  }
  img.p
  {
  margin-top:2px;
  }
  #header {
    background-color:red;
    color:white;
    text-align:center;
    padding:5px;
  }
  #nav
  {
    line-height:30px;
    background-color:white;
    height:300px;
    width:400px;
    float:left;
    padding:5px;
  margin-left: 50px;
    }

  #footer {
    background-color:maroon;
    color:red;
    clear:both;
    text-align:center;
  margin-up:100px;
    padding:20px;
}
.image_wrapper {
  display: inline-block;
  padding: 8px;
  border: 1px solid #999;
  background: #ffffff;
  margin-bottom: 10px;
  float: left;
}
.button a {
  clear: both;
  display: block;
  width: 75px;
  height: 24px;
  padding: 4px 27px 0 0;
  margin-top: 15px;
  background: url(templatemo_button.png) no-repeat;

  color: #000;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
}
.btn-danger:hover{
    border-radius:3px;
    border:1px solid #ff0000;
    background-color:#ffffff;
    color:#ff0000;

  }

  .button a:hover {
  background: url(templatemo_button_hover.png) no-repeat;
}
.float_l {
  float: left;
}

.float_r {
  float: right;
  
}

.image_wrapper {
  display: inline-block;
  padding: 8px;
  border: 1px solid #999;
  background: #ffffff;

}
.image_wrapper {
  display: inline-block;
  padding: 8px;
  border: 1px solid #999;
  background: #ffffff;

}
.fl_img {
  float: left;
  margin: 3px 30px 15px 0;
}
.fr_img {
  float: right;
  margin: 3px 0 15px 30px;
}
.col_w250 {
  width: 250px;
  margin-left: 100px;
}
  </style>
<title>Welcome Admin</title>
</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Welcome to Admistrative Area</a>
    </div>
</div>
</nav>
<form method="post">
<a href="bbms.php"><button type="submit" name="logout" class="btn btn-danger" align="right" style="float:right">Log out</button>
</form>
 <div class="col_w250 float_l">



            <div class="image_wrapper"><img src="update.jpg" height="200" width="200"  /></div>
            <div class="button"><a href="update.php" target="_parent">UpdateRecords</a><br></div>


         </div>
       <div class="col_w250 float_l">


                <div class="image_wrapper"><img src="request1.jpg" height="200" width="200" /></div>
               <div class="button"><a href="donationRequests.php" target="_parent">DonationRequests<br></a></div>




          </div>
         <div class="col_w250 float_l">
        <div class="image_wrapper"><img src="display.jpg" height="200" width="200" /></div>
               <div class="button"><a href="display.php" target="_parent">Display Records<br></a></div>
             </div>

</div>
</body>
</html>
