<?php
session_start();
require_once '../../Database/Connection.php';

if (isset($_POST['transaksi'])) {
    $id_member = mysqli_real_escape_string($conn, $_POST['id_member']);
    $paket = mysqli_real_escape_string($conn, $_POST['paket']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $antar = mysqli_real_escape_string($conn, $_POST['antar']);
    $berat = mysqli_real_escape_string($conn, $_POST['berat']);
    $pembayaran = mysqli_real_escape_string($conn, $_POST['pembayaran']);
    $TransaksiQuery = mysqli_query($conn, "CALL total_harga('$id_member','3','$paket','$kategori','$antar','$berat','$pembayaran')");
    $result = mysqli_fetch_assoc(mysqli_query($conn,"SELECT id_transaksi FROM transaksi ORDER BY id_transaksi DESC"));
     if ($TransaksiQuery) {
        if ($_POST['pembayaran'] == 'Lunas') {
            $_SESSION['id_transaksi'] = $result['id_transaksi'];
            header("location:Transaksi2.php");
        } else {
            $id_transaksi = $result['id_transaksi'];
            $status_pembayaran = mysqli_query($conn, "UPDATE transaksi SET status_pembayaran = 'Belum Lunas', status_transaksi ='Process' WHERE id_transaksi = '$id_transaksi'");
            if ($status_pembayaran) {
                header("location:../Dashboard/HomePegawai.php?page=1&data=10");
            }
        }
    } else {
    header("location:Transaksi.php");
    $_SESSION['error'] = "";
    }
}

if (isset($_POST['update'])) {
    $biaya = $_POST['biaya'];
    $id_transaksi = $_SESSION['id_transaksi'];
    $update = mysqli_query($conn, "UPDATE transaksi SET biaya = '$biaya', status_transaksi='Process' WHERE id_transaksi = '$id_transaksi'");
    if ($update) {
        header("location:../Dashboard/HomePegawai.php?page=1&data=10");
        unset($_SESSION["id_transaksi"]);;
    }
} else if (isset($_POST['cancel'])) {
    $biaya = $_POST['biaya'];
    $id_transaksi = $_SESSION['id_transaksi'];
    $cancel = mysqli_query($conn, "UPDATE transaksi SET status_pembayaran = 'Belum Lunas',status_transaksi='Process' WHERE id_transaksi = '$id_transaksi'");
    if ($cancel) {
        header("location:../Dashboard/HomePegawai.php?page=1&data=10");
        unset($_SESSION["id_transaksi"]);;
    }
} else if (isset($_POST['batal'])) {
    $biaya = $_POST['biaya'];
    $id_transaksi = $_SESSION['id_transaksi'];
    $batal = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'");
    if ($batal) {
        header("location:../Dashboard/HomePegawai.php?page=1&data=10");
        unset($_SESSION["id_transaksi"]);;
    }
}
