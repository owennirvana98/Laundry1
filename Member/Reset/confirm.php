<?php 
$conn = mysqli_connect('localhost','root','','laundry');
$select = mysqli_query($conn,"SELECT *FROM pertanyaan");
if($_SERVER['REQUEST_METHOD'] == "POST"){
$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];
$password = $_POST['password'];
$data = hash('md5', $password, false);
$query = mysqli_query($conn,"UPDATE member SET password='$data' WHERE id_pertanyaan='$pertanyaan' AND jawaban = '$jawaban'");
if($query){
    header("location:../Login/loginform.php");
}else{
    echo "ERROR";
 }
 }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Password</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="confirm.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript">
            function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
            function myFunction1() {
    var x = document.getElementById("myInput1");
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
        <h3><span class="glyphicon glyphicon-user"></span> Konfirmasi Password </h3>
    </div>
    <form method="post">
     
        <br>
        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-question-sign"></i> </span>
            <select class="form-control" name="pertanyaan">
                <option disabled selected style ="Pertanyaan" >Pertanyaan</option>
            <?php while($pertanyaan = mysqli_fetch_array($select)){ ?>
                <option value="<?php echo $pertanyaan['id_pertanyaan']?>"><?php echo $pertanyaan['pertanyaan']?></option>
               <?php } ?>
            </select>
        </div>

        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-ok-sign"></i></span>
            <input type="text" class="form-control" placeholder="Masukan Jawaban Anda" name="jawaban" required>
            <br>
        </div>       
        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" id="myInput" placeholder="Masukan Password Baru" name="password" required>
        </div>
            <input type="checkbox" onclick="myFunction(), myFunction1()">Show Password
        <button type="submit" class="btn " style="width: 100%;margin-bottom: 10px">Konfirmasi</button>
    </form>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="reset/js/bootstrap.min.js"></script>


</body>

</html>