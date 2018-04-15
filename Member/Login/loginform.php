<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        body {
    font-size: 16px;
    font-family: "Lato", sans-serif;
    font-weight: 400;
   line-height: 1.5em;
   color:#666;
   background-image: linear-gradient( 
        rgba(52, 116, 125, 0.5), 
        rgba(134, 208, 218, 0.5) ),
    url(../../image/img4.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
     .atas{
            color: white;
            height: 80px;
            width: 450px;
            padding:20px;
            background: #4f757d;
            margin: auto;
            margin-top: 100px;
        }
        form{
            background:#fff;
            width: 450px;
            padding:20px;
            margin: auto;
        }
        h3{
            text-align: center;
            padding-bottom: 80px;
        }

        .conta{
            margin: auto;
            margin-top: 10%;
        }
        .input-group-addon{
          color: #4f757d;
        }
    </style>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</head>

<body>
<div class="conta">
    <div class="atas">
        <h3> Log In</h3>
    </div>
    <form method="post" action="login.php">
        <br>
        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="Username" name="username" required>
        </div>

        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" id="myInput" placeholder="Password" name="password" required>
        </div>
        <input type="checkbox" onclick="myFunction()">Show Password
        <button type="submit" class="btn " style="width: 100%;margin-bottom: 10px">Login</button>
        <div style="display: inline">
        <a href="../SignUp/signupform.php" style="text-decoration: none">
            <button type="button" class="btn" style="width: 49%;margin-bottom: 10px">SignUp</button>
        </a>
        <a href="../Reset/reset.php" style="text-decoration: none">
            <button type="button" class="btn" style="width: 49%;margin-bottom: 10px; color: red">Reset Password</button>
        </a>
    </div>
        <br>
            <?php if(isset($_SESSION['error'])){
            ?>
            <div class="alert alert-danger" role="alert" style="text-align: center"><b>Username Atau Password Anda Salah Silahkan Dicoba Lagi!</b></div>
            <?php
            session_destroy();}?>
            <br>
    </form>
</div>

</body>

</html>