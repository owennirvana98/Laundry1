<?php
session_start();
if(isset($_SESSION['id_transaksi'])){
    header("location:Transaksi2.php");
}

require_once '../../Database/Connection.php';
$paketQuery = mysqli_query($conn, "SELECT *FROM paket");
$kategoriQuery = mysqli_query($conn, "SELECT *FROM kategori");
$antarQuery = mysqli_query($conn, "SELECT *FROM antar");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="../Sidebar.css">
    <link rel="stylesheet" href="TableTransaksi.css">
</head>
<body>
<div class="wrapper">
    <nav id="sidebar">
        <div class="user-panel">
            <div class="info-image-sidebar">
                <img src=data:image/png;base64,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>
            </div>
            <div class="info-user-sidebar">
                <span>Krisna Pranata</span>
            </div>
        </div>
        <ul class="list-unstyled components">
            <li class="header">
                MAIN NAVIGATION
            </li>
            <li>
                <a href="../Dashboard/HomePegawai.php?page=1&data=10">
                    <i class="glyphicon glyphicon-home"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="../Transaksi/Transaksi.php" class="activeSideBar" style="border-left-color: #3c8dbc;">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    Transaksi
                </a>
            </li>
            <li>
                <a href="../Member/Member.php?page=1&data=10">
                    <i class="glyphicon glyphicon-user"></i>
                    Member
                </a>
            </li>
            <li>
                <a href="../Pegawai/ProfilePegawai.php">
                    <i class="glyphicon glyphicon-info-sign"></i>
                    Pegawai
                </a>
            </li>
            <li>
                <a href="../Logout.php">
                    <i class="glyphicon glyphicon-off"></i>
                    Log Out
                </a>
            </li>
        </ul>
    </nav>
    <div class="main-navbar">
        <div class="main-header">
            <a href="#" class="logo">
                <div class="logo-lg" id="logo">
                    <b>Laundry</b>
                    <strong>LA</strong>
                </div>
            </a>
        </div>
        <nav class="navbar" id="navbar">
            <a href="#" class="navbar-left" id="sidebarCollapse">
                <i class="glyphicon glyphicon-th-list">
                </i>
            </a>

        </nav>
    </div>
    <div class="mainContent" id="mainContent">
        <div class="contentHeader content" id="contentHeader" style="margin-bottom: 40px;">
            <h3 style="text-align: center;"><b>TRANSAKSI</b></h3>
            <form action="FunctionTransaksi.php" method="post">
                <table style="margin-top: 40px">
                    <tr>
                        <td style="width: 20%">
                            <label style="float: left" class="control-label">ID Member</label>
                        </td>
                        <td style="width: 80%">
                            <?php
                            if(isset($_GET['id_member'])){
                                $id_member = $_GET['id_member'];
                            ?>
                            <input type="text" class="form-control" placeholder="Masukan ID Member" name="id_member" readonly value="<?php echo $id_member?>">
                            <?php unset($_SESSION['error']);}else{ ?>
                            <input type="text" class="form-control" placeholder="Masukan ID Member" name="id_member" required>
                            <?php }?>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%">
                            <label style="float: left" class="control-label">Jenis Paket Laundry</label>
                        </td>
                        <td style="width: 80%">
                            <select class="form-control" name="paket" required>
                                <option disabled selected value=""> Jenis Paket Laundry</option>
                                <?php while ($paket = mysqli_fetch_assoc($paketQuery)) { ?>
                                    <option value="<?php echo $paket['id_paket'] ?>"><?php echo $paket['nama_paket'] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%">
                            <label style="float: left" class="control-label">Kategori Laundry</label>
                        </td>
                        <td style="width: 80%">
                            <select class="form-control" name="kategori" required>
                                <option disabled selected value=""> Jenis Kategori Laundry</option>
                                <?php while ($kategori = mysqli_fetch_assoc($kategoriQuery)) { ?>
                                    <option value="<?php echo $kategori['id_kategori'] ?>"><?php echo $kategori['jenis_kategori'] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%">
                            <label style="float: left" class="control-label">Antar Laundry</label>
                        </td>
                        <td style="width: 80%">
                            <select class="form-control" name="antar" required>
                                <option disabled selected value=""> Jenis Antar Laundry</option>
                                <?php while ($antar = mysqli_fetch_assoc($antarQuery)) { ?>
                                    <option value="<?php echo $antar['id_antar'] ?>"><?php echo $antar['jenis_antar'] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%">
                            <label style="float: left" class="control-label">Berat Pakaian</label>
                        </td>
                        <td style="width: 80%">
                            <input type="text" class="form-control" placeholder="Masukan Berat Pakaian" name="berat" required>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%">
                            <label style="float: left" class="control-label">Status Pembayaran</label>
                        </td>
                        <td style="width: 80%">
                            <select class="form-control" name="pembayaran" required>
                                <option disabled selected value=""> Status Pembayaran Laundry</option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum Lunas">Belum Lunas</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div style="text-align: center">
                    <button type="submit" class="btn btn-primary" style="margin-top: 30px;width: 100%;height: 40px" name="transaksi">
                        SUBMIT
                    </button>
                </div>
            </form>
            <?php if(isset($_SESSION['error'])){?>
                <div class="alert alert-danger" role="alert" style="text-align: center;margin-top: 30px"><b>Terdapat Kesalahan Pada Inputan Data, Silahkan di Coba Lagi</b></div>
                <?php unset($_SESSION["error"]);} ?>
        </div>
    </div>

</body>

</html>
