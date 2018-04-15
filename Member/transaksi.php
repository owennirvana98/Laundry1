<?php
$conn = mysqli_connect('localhost', 'root', '', 'laundry123');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_member = $_POST['id_member'];
        $sql = mysqli_query($conn,"INSERT INTO transaksi (id_member,status_transaksi,tgl_transaksi) VALUES ('$id_member','Not Checked',NOW())");
        if($sql){
            header("location: MemberHome.php?id_member");
        }
    }else {

}

?>