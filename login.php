<?php
      require("connection.php");
      require("credentials.php");
      if(isset($_POST['Login']))
      {
          $query = "SELECT * FROM `admin_login` WHERE `UserName`='$_POST[username]' AND `Password`='$_POST[password]'";
          $result=mysqli_query($connectionObj,$query);
          if(mysqli_num_rows($result)==1)
          {
              session_start();
              $_SESSION['username']=$_POST['username'];
              header("location: login_panel.php");
          }
          else 
          {
              echo "<script>alert('Incorrect username or password!');</script>";
          }
      }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Login</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
   <filter id="blur">
       
   </filter>
</svg>
        <style>


body{
  margin: 0;
  padding: 0;
  background: #fff;

  color: #fff;
  font-family: Arial;
  font-size: 12px;
}

.body{
  position: absolute;
  top: -20px;

  left: -20px;
  right: -40px;
  bottom: -40px;
  width: auto;
  height: auto;
  background-image:url(blood_t.jpg);
  background-size: auto;
  -webkit-filter: blur(5px);
  z-index: 0.7;
  filter: blur(5px);
-webkit-filter: blur(5px);
-moz-filter: blur(5px);
-o-filter: blur(5px);
-ms-filter: blur(5px);
filter: url(#blur);
filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='5');

  }

.grad{
  position: absolute;
  top: -20px;
  left: -20px;
  right: -40px;
  bottom: -40px;
  width: auto;
  height: auto;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Mozilla,Safari4+ */
  z-index: 1;
  opacity: 0.7;
}

.header{
  position: absolute;
  top: calc(50% - 35px);
  left: calc(50% - 255px);
  z-index: 2;
}

.header div{
  float: left;
  color: #fff;
  font-family: 'Exo', sans-serif;
  font-size: 35px;
  font-weight: 200;
}

.header div span{
  color: #F00 !important;
}

.login{
  position: absolute;
  top: calc(50% - 75px);
  left: calc(50% - 50px);
  height: 150px;
  width: 350px;
  padding: 10px;
  z-index: 2;
}

.login input[type=text]{
  width: 250px;
  height: 30px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: #FF0000;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
}

.login input[type=password]{
  width: 250px;
  height: 30px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: #fff;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
  margin-top: 10px;
}

.button{
  width: 260px;
  height: 35px;
  background: #fff;
  border: 1px solid #fff;
  cursor: pointer;
  border-radius: 2px;
  color: #a18d6c;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 6px;
  margin-top: 10px;
}

.login input[type=submit]:hover{
  opacity: 0.8;
}

.login input[type=submit]:active{
  opacity: 0.7;
}

.login input[type=text]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.button:focus{*
  outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>
  </head>

  <body>

<img src="login.jpg" float:left>
<div class='container'>
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>Admin <span>Login</span></div>
    </div>
    <br>
    <div class="login">
    <form method='post'>
        <input type="text" placeholder="username" name="username" required><br>
        <input type="password" placeholder="password" name="password" required><br>
        <button type="submit" class="button" name="Login">Login</button>
    </form>

    </div>

    </div>
  </body>
</html>
