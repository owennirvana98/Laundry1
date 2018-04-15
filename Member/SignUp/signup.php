<?php
$conn = new mysqli("localhost","root","","laundry123");
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST["nama"];
    $notlp = $_POST["no_telp"];
    $alamat = $_POST["alamat"];
    $jk = $_POST["jenis_kelamin"];
    $tgllahir = $_POST["tgl_lahir"];
    $kabupaten = $_POST["kabupaten"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $pswrepeat = $_POST["pswrepeat"];
    $pertanyaan = $_POST["pertanyaan"];
    $jawaban = $_POST["jawaban"];
    $data = hash('md5', $password, false);

    if ($_POST["password"] === $_POST["pswrepeat"]) {
        $query = "INSERT INTO member (nama_member, nomer_telepon, alamat_member, jenis_kelamin, tgl_lahir, create_at, status_member,id_kabupaten, username, password, id_pertanyaan, jawaban)  
                             VALUES ('$nama','$notlp','$alamat','$jk','$tgllahir', current_date, 'Member', '$kabupaten','$username', '$data', '$pertanyaan', 
                             '$jawaban')";
        if (mysqli_query($conn, $query)) {
            header("location: ../Login/loginform.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}
?>