<?php
require_once '../../Database/Connection.php';
$query = mysqli_query($conn,"SELECT *FROM kabupaten");
$sql = mysqli_query($conn, "SELECT *FROM Pertanyaan");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rapid Clean</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="LoginForm.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>

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
        function myFunction(s) {
            var x = document.getElementById(s);
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
        <h3><span class="glyphicon glyphicon-user"></span>Sign Up</h3>
    </div>
    <form method="post" action="signup.php">

        <br>
        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
        </div>

        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" placeholder="Nomor Telepon" name="no_telp" required>
            <br>
        </div>

        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-home"></i> </span>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
        </div>
        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="Username" name="username" required>
        </div>
        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" id="myInput" placeholder="Password" name="password" required>
            </div>

        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" id="myInput1"  placeholder="Ulangi Password" name="pswrepeat" required>
        </div>
        <input type="checkbox" onclick="myFunction('myInput1'), myFunction('myInput')">Show Password

        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-heart"></i></span>
            <select class="form-control" name="jenis_kelamin" required>
                <option disabled selected style="display:none">Pilih Jenis Kelamin</option>
                <option value="Laki - Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-home"></i></span>
            <select class="form-control" name="kabupaten" required>
                <option disabled selected style="display:none">Pilih Kabupaten</option>
                <?php while($result = mysqli_fetch_assoc($query)){?>
                <option value="<?php echo $result['id_kabupaten']?>"><?php echo $result['nama_kabupaten']?></option>
                <?php } ?>
            </select>
        </div>

        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-calendar"></i> </span>
            <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" required>
        </div>
        <div class="input-group" style="margin-bottom: 10px">
            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-question-sign"></i> </span>
            <select class="form-control" name="pertanyaan">
                <option disabled selected style ="display: none" >Pertanyaan</option>
                <?php while($result = mysqli_fetch_assoc($sql)){?>
                <option value="<?php echo $result['id_pertanyaan']?>"><?php echo $result['pertanyaan']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="input-group" style="margin-bottom: 10px">
        	<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-ok-sign"></i></span>
        	<input type="text" class="form-control" placeholder="Jawaban" name="jawaban" required>
        </div>


        <button type="submit" class="btn" style="width: 100%;margin-bottom: 10px">Sign Up</button>
    </form>
</div>





</body>

</html>