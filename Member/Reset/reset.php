<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
$conn = mysqli_connect('localhost','root','','laundry');
$id_member = $_POST['member'];
$nomor = $_POST['nomor'];
$query = mysqli_query($conn,"SELECT * FROM member WHERE id_member='$id_member' AND nomer_telepon = '$nomor'");
echo $id_member;
 if($query){
    header("location:confirm.php");
 }else{
    echo "ERROR";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="reset.css">
</head>

<body>
<div class="conta">
    <div class="atas">
        <h3> RESET PASSWORD </h3>
    </div>
    <form method="post">
        <br>
        <div class="input-group" style="margin-bottom: 10px;">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="Masukan ID Member" name="member" required>
        </div>
        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-phone"></i> </span>
            <input type="text" class="form-control" placeholder="Masukan Nomor Telephone" name="nomor" required>
            <br>
        </div>
        <button type="submit" class="btn " style="width: 100%;margin-bottom: 10px; ">Selanjutnya</button>
    </form>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="reset/js/bootstrap.min.js"></script>


</body>
</html>