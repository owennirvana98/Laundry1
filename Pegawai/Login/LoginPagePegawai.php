<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <link rel="stylesheet" href="LoginForm.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="conta">
    <div class="atas">
        <h3> Log in</h3>
    </div>
    <form method="post" action="Login.php">
        <br>
        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="Username" name="username" required>
        </div>

        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" id="myInput" placeholder="Password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary " style="width: 100%;margin-bottom: 10px">Login</button>
        <br>
        <?php if(isset($_SESSION['error'])){
            ?>
            <div class="alert alert-danger" role="alert" style="text-align: center"><b>Username Atau Password Anda Salah Silahkan Dicoba Lagi!</b></div>
            <?php
            session_destroy();}?>
    </form>

</div>
</body>

</html>