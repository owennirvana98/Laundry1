<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'laundry123');
$id =  $_SESSION['login_member'];
$sql = mysqli_query($conn, "
SELECT transaksi.`id_transaksi` AS id,total_harga,status_member,member.`nama_member` AS nama_member,member.`nomer_telepon` AS nomer_telepon,member.`alamat_member` AS alamat_member,kabupaten.`nama_kabupaten` AS nama_kabupaten,
transaksi.`tgl_transaksi` AS tgl_transaksi,transaksi.`status_transaksi` AS status_transaksi, member.jenis_kelamin AS jenis_kelamin, member.tgl_lahir AS tgl_lahir, member.id_member as id_member FROM transaksi
INNER JOIN member ON member.`id_member` = transaksi.`id_member`
INNER JOIN kabupaten ON kabupaten.`id_kabupaten`=member.`id_kabupaten` 
WHERE member.id_member = $id
");
$resultMember = mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Pegawai/Sidebar.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../Pegawai/Table.css">
</head>
<body style="background: white; data-spy=" scroll
" data-target="#sidebar">
<div class="wrapper">
    <nav id="sidebar" style="padding-top: 0;min-width: 250px">
        <div class="user-panel">

            <div class="sidebar-header">
                <div class="sidebar-logo">
                    Rapid Clean
                </div>
                <div>
                    Member
                </div>
            </div>

        </div>

        <div class="li-1">
            <ul class="list-unstyled components">
                <li class="li-2">
                    <a href="MemberHome.php?id_member=<?php echo $id ?>">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        Pesanan
                    </a>
                </li>
                <li class="li-2">
                    <a href="logout.php">
                        <i class="glyphicon glyphicon-off"></i>
                        Log Out
                    </a>
                </li>
            </ul>
        </div>
    </nav>

</div class="main">
<div class="container" style="margin-left: 300px;">
    <div class="judul koptext">
        Selamat Datang <span>Member</span>
    </div>

    <div class="container">
        <table>
            <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomer Telepon</th>
            <th>Alamat</th>
            <th>Kabupaten</th>
            <th>Tanggal</th>
            <th>Status</th>
            </thead>
            <?php
            while ($result = mysqli_fetch_assoc($sql)) {
                ?>
                <tr>
                    <td><?php echo $result['id'] ?></td>
                    <td><?php echo $result['nama_member'] ?></td>
                    <td><?php echo $result['nomer_telepon'] ?></td>
                    <td><?php echo $result['alamat_member'] ?></td>
                    <td><?php echo $result['nama_kabupaten'] ?></td>
                    <td> <?php echo $result['tgl_transaksi'] ?></td>
                    <td style="text-align: center">
                        <?php if ($result['status_transaksi'] == 'Not Checked') { ?>
                            <span style="background:#dd4b39;padding: 5px;color: white;border-radius: 6px;text-align: center ;width: 100%"><small><?php echo $result['status_transaksi'] ?></small></span>
                            <?php
                        } else if ($result['status_transaksi'] == 'Progress') { ?>
                            <span style="background:#f39c12;padding: 5px;color: white;border-radius: 6px;text-align: center ;width: 100%"><small><?php echo $result['status_transaksi'] ?></small></span>
                            <?php
                        } else { ?>
                            <span style="background:#00a65a;padding: 5px;color: white;border-radius: 6px;text-align: center ;width: 100%"><small><?php echo $result['status_transaksi'] ?></small></span>
                            <?php
                        }
                        ?>

                    </td>
                </tr>
                <?php

            }
            ?>
        </table>
    </div>

    <?php
        $sql = mysqli_query($conn, "
SELECT member.`nama_member` AS nama_member,member.id_member AS id_member,member.`nomer_telepon` AS nomer_telepon,member.`alamat_member` AS alamat_member,kabupaten.`nama_kabupaten` AS nama_kabupaten,
member.jenis_kelamin AS jenis_kelamin, member.tgl_lahir AS tgl_lahir FROM member
INNER JOIN kabupaten ON kabupaten.`id_kabupaten`=member.`id_kabupaten` 
WHERE member.id_member = '$id'
");
        $result = mysqli_fetch_assoc($sql);


    ?>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center"><b>INFO DATA DIRI PELANGGAN</b></h4>
                </div>
                <form class="modal-body" method="post" action="transaksi.php">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?php echo $result['id_member'] ?> "
                                        name="id_member" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"
                                       value="<?php echo $result['nama_member'] ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nomer Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" disabled
                                       value="<?php echo $result['nomer_telepon'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" disabled
                                       value="<?php echo $result['alamat_member'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kabupaten</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" disabled
                                       value="<?php echo $result['nama_kabupaten'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" disabled
                                       value="<?php echo $result['jenis_kelamin'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" disabled
                                       value="<?php echo $result['tgl_lahir'] ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="modalAccept">Accept</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div style="text-align: center">
    <button class="btn btn-primary" style="margin-top:10px;width: 30%;margin-left: 230px" data-toggle="modal" data-target="#myModal">PESAN</button>
</div>
</div>


</body>

</html>
