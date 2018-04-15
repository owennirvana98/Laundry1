<?php
include "Pagination.php";

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
    <link rel="stylesheet" href="../Table.css">
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
                <a href="../Dashboard/HomePegawai.php?page=1&data=10" class="activeSideBar"
                   style="border-left-color: #3c8dbc;">
                    <i class="glyphicon glyphicon-home"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="../Transaksi/Transaksi.php">
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
        <div class="contentHeader">
            <h3><b>DASHBOARD</b></h3>
            <hr>

        </div>

        <div class="contentHeader content" id="contentHeader">
            <ul class="nav nav-pills" style="margin-bottom: 5px">
                <li class="active"><a data-toggle="pill" id="#menu1" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#menu1"><span>Not Checked</span><span
                                style="margin-left: 10px;background: #dd4b39;color: white;padding-left: 5px;padding-right: 5px"><small><b><?php echo $dataNumberNotChecked ?></b></small></span></a>
                </li>
                <li><a data-toggle="tab" href="#menu2"><span>Progres</span><span
                                style="margin-left: 10px;background: #f39c12;color: white;padding-left: 5px;padding-right: 5px"><small><b><?php echo $dataNumberProcess ?></b></small></span></a>
                </li>
                <li><a data-toggle="tab" href="#menu3"><span>Selesai</span><span
                                style="margin-left: 10px;background: #00a65a;color: white;padding-left: 5px;padding-right: 5px"><small><b><?php echo $dataNumberFinish ?></b></small></span></a>
                </li>

                <li class="search" style="float: right">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control" placeholder="Search" id="myInput"
                               onkeyup="myFunction()">
                        <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                    </div>
                </li>
                <li style="float: right;width: 20%">
                    <div class="form-group">
                        <label class="col-sm-7 control-label" style="margin-top: 8px;padding-left: 25px">Data
                            Entris </label>
                        <div class="col-sm-5" style="padding-left: 0px">
                            <select class="form-control" name="selectedValue" id="selectedValue"
                                    onchange="window.location.href=this.value">
                                <option disabled selected style="display:none;"><?php echo $resultsPerPage ?></option>
                                <option value="HomePegawai.php?page=1&data=10">10</option>
                                <option value="HomePegawai.php?page=1&data=15">15</option>
                                <option value="HomePegawai.php?page=1&data=20">20</option>

                            </select>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="tab-content" id="myTable">
                <div id="home" class="tab-pane fade in active">
                    <hr>
                    <table>
                        <thead>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nomer Telepon</th>
                        <th>Alamat</th>
                        <th>Kabupaten</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <?php
                        while ($output = mysqli_fetch_assoc($displayHome)) {
                            ?>
                            <tr>
                                <td><?php echo $output['id_transaksi'] ?></td>
                                <td><?php echo $output['nama_member'] ?></td>
                                <td><?php echo $output['nomer_telepon'] ?></td>
                                <td><?php echo $output['alamat_member'] ?></td>
                                <td><?php echo $output['nama_kabupaten'] ?></td>
                                <td> <?php echo $output['tgl_transaksi'] ?></td>
                                <td style="text-align: center">
                                    <?php if ($output['status_transaksi'] == 'Not Checked') { ?>
                                        <span style="background:#dd4b39;padding: 5px;color: white;border-radius: 6px;text-align: center ;width: 100%"><small><?php echo $output['status_transaksi'] ?></small></span>
                                        <?php
                                    } else if ($output['status_transaksi'] == 'Process') { ?>
                                        <span style="background:#f39c12;padding: 5px;color: white;border-radius: 6px;text-align: center ;width: 100%"><small><?php echo $output['status_transaksi'] ?></small></span>
                                        <?php
                                    } else { ?>
                                        <span style="background:#00a65a;padding: 5px;color: white;border-radius: 6px;text-align: center ;width: 100%"><small><?php echo $output['status_transaksi'] ?></small></span>
                                        <?php
                                    }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    if ($output['status_transaksi'] == 'Not Checked') {
                                        ?>
                                        <a href="?page=<?php echo $page ?>&data=<?php echo $resultsPerPage ?>&id=<?php echo $output['id_transaksi'] ?>#myModal">
                                            <i
                                                    class="glyphicon glyphicon-check" style="color: green"
                                                    data-toggle="modal" data-target="#myModal"></i></a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="DetailTransaksi.php?id_transaksi=<?php echo $output['id_transaksi'] ?>"> <i
                                                    class="glyphicon glyphicon-check" style="color: green"></i></a>
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
                <div id="menu1" class="tab-pane fade">
                    <hr>
                    <?php if ($dataNumberNotChecked != null) { ?>
                        <table>
                            <thead>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nomer Telepon</th>
                            <th>Alamat</th>
                            <th>Kabupaten</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <?php

                            while ($output = mysqli_fetch_assoc($notChecked)) {
                                ?>
                                <tr>
                                    <td><?php echo $output['id_transaksi'] ?></td>
                                    <td><?php echo $output['nama_member'] ?></td>
                                    <td><?php echo $output['nomer_telepon'] ?></td>
                                    <td><?php echo $output['alamat_member'] ?></td>
                                    <td><?php echo $output['nama_kabupaten'] ?></td>
                                    <td> <?php echo $output['tgl_transaksi'] ?></td>
                                    <td style="text-align: center">
                                        <span style="background:#dd4b39;padding: 5px;color: white;border-radius: 6px;text-align: center ;width: 100%"><small><?php echo $output['status_transaksi'] ?></small></span>
                                    </td>
                                    <td>
                                        <a href="?page=<?php echo $page ?>&data=<?php echo $resultsPerPage ?>&id=<?php echo $output['id_transaksi'] ?>">
                                            <i
                                                    class="glyphicon glyphicon-check" style="color: green"
                                                    data-toggle="modal" data-target="#myModal"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    <?php } else { ?>
                        <div class="alert alert-danger" role="alert" style="text-align: center"><b>Data Tidak Ditemukan
                                Pada Halaman ini</b></div>
                    <?php } ?>
                </div>

                <div id="menu2" class="tab-pane fade">
                    <hr>
                    <?php if ($dataNumberProcess != null) { ?>
                        <table>
                            <thead>

                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nomer Telepon</th>
                            <th>Alamat</th>
                            <th>Kabupaten</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <?php

                            while ($output = mysqli_fetch_assoc($process)) {
                                ?>
                                <tr>
                                    <td><?php echo $output['id_transaksi'] ?></td>
                                    <td><?php echo $output['nama_member'] ?></td>
                                    <td><?php echo $output['nomer_telepon'] ?></td>
                                    <td><?php echo $output['alamat_member'] ?></td>
                                    <td><?php echo $output['nama_kabupaten'] ?></td>
                                    <td> <?php echo $output['tgl_transaksi'] ?></td>
                                    <td style="text-align: center">
                                        <span style="background:#f39c12;padding: 5px;color: white;border-radius: 6px;text-align: center ;width: 100%"><small><?php echo $output['status_transaksi'] ?></small></span>
                                    </td>
                                    <td>
                                        <a href="DetailTransaksi.php?id_transaksi=<?php echo $output['id_transaksi'] ?>"> <i
                                                    class="glyphicon glyphicon-check" style="color: green"
                                                    data-toggle="modal" data-target="#myModal"></i></a>

                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    <?php } else { ?>
                        <div class="alert alert-danger" role="alert" style="text-align: center"><b>Data Tidak Ditemukan
                                Pada Halaman ini</b></div>
                    <?php } ?>

                </div>
                <div id="menu3" class="tab-pane fade">
                    <hr>
                    <?php if ($dataNumberFinish != null) { ?>
                        <table>
                            <thead>
                            <th onclick="sortTable(0)">No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nomer Telepon</th>
                            <th>Alamat</th>
                            <th>Kabupaten</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <?php
                            $i = 1;
                            while ($output = mysqli_fetch_assoc($finish)) {
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $output['id_transaksi'] ?></td>
                                    <td><?php echo $output['nama_member'] ?></td>
                                    <td><?php echo $output['nomer_telepon'] ?></td>
                                    <td><?php echo $output['alamat_member'] ?></td>
                                    <td><?php echo $output['nama_kabupaten'] ?></td>
                                    <td> <?php echo $output['tgl_transaksi'] ?></td>
                                    <td style="text-align: center">
                                        <span style="background:#00a65a;padding: 5px;color: white;border-radius: 6px;text-align: center ;width: 100%"><small><?php echo $output['status_transaksi'] ?></small></span>
                                    </td>
                                    <td>
                                        <a href="DetailTransaksi.php?id=<?php echo $output['id_transaksi'] ?>"> <i
                                                    class="glyphicon glyphicon-check" style="color: green"
                                                    data-toggle="modal" data-target="#myModal"></i></a>
                                        <a href="#"> <i class="glyphicon glyphicon-trash" style="color: red"></i></a>

                                    </td>
                                </tr>
                                <?php $i++;
                            }
                            ?>
                        </table>
                    <?php } else { ?>
                        <div class="alert alert-danger" role="alert" style="text-align: center"><b>Data Tidak Ditemukan
                                Pada Halaman ini</b></div>
                    <?php } ?>

                </div>
                <nav style="text-align: end;height: 50px">
                    <ul class="pagination pagination-sm">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Page <?php echo $page ?>
                                of <?php echo $totalPages ?></a>
                        </li>
                    </ul>
                    <ul class="pagination pagination-sm">
                        <?php if ($page == 1) { ?>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">First</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i
                                            class="glyphicon glyphicon-backward"></i> </a>
                            </li>
                            <?php
                        } else { ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=1&data=<?php echo $resultsPerPage ?>">First</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link"
                                   href="?page=<?php echo $page - 1 ?>&data=<?php echo $resultsPerPage ?>"><i
                                            class="glyphicon glyphicon-backward"></i></a>
                            </li>
                            <?php
                        }
                        for ($i = 1; $i <= $totalPages; $i++) {
                            if ($i == $page) {
                                ?>
                                <li class="page-item"><a href="#"> <?php echo $i ?></a></li>
                            <?php } else {
                                ?>
                                <li class="page-item"><a class="page-link"
                                                         href="?page=<?php echo $i ?>&data=<?php echo $resultsPerPage ?>"><?php echo $i ?></a>
                                </li>
                                <?php
                            }
                        }
                        if ($page < $totalPages) {
                            ?>
                            <li class="page-item">
                                <a class="page-link"
                                   href="?page=<?php echo $page + 1 ?>&data=<?php echo $resultsPerPage ?>"><i
                                            class="glyphicon glyphicon-forward"></i></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link"
                                   href="?page=<?php echo $totalPages ?>&data=<?php echo $resultsPerPage ?>">Last</a>
                            </li>
                            <?php
                        } else { ?>
                            <li class="page-item disabled">
                                <a class="page-item"><i
                                            class="glyphicon glyphicon-forward"></i></a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Last</a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = mysqli_query($conn, "
SELECT transaksi.`id_transaksi` AS id,member.`nama_member` AS nama_member,transaksi.id_member AS id_member,member.`nomer_telepon` AS nomer_telepon,member.`alamat_member` AS alamat_member,kabupaten.`nama_kabupaten` AS nama_kabupaten,
transaksi.`tgl_transaksi` AS tgl_transaksi,transaksi.`status_transaksi` AS status, member.jenis_kelamin AS jenis_kelamin, member.tgl_lahir AS tgl_lahir FROM transaksi
INNER JOIN member ON member.`id_member` = transaksi.`id_member`
INNER JOIN kabupaten ON kabupaten.`id_kabupaten`=member.`id_kabupaten` 
WHERE transaksi.id_transaksi = '$id'
");
                $result = mysqli_fetch_assoc($sql);

            }
            ?>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="text-align: center"><b>INFO DATA DIRI PELANGGAN</b></h4>
                        </div>
                        <form class="modal-body" method="post" action="update.php">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?php echo $result['id'] ?> "
                                               readonly >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                               value="<?php echo $result['nama_member'] ?>" disabled>
                                        <input type="hidden" class="form-control"
                                               value="<?php echo $result['id_member'] ?>" name="member_id">
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
                                    <label class="col-sm-3 control-label">Tanggal Transaksi</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" disabled
                                               value="<?php echo $result['tgl_transaksi'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" disabled
                                               value="<?php echo $result['status'] ?>">
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


    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active'), $('#logo').toggleClass('activeS'), $('#navbar').toggleClass('navbarS'), $('#mainContent').toggleClass('active');
                ;
                ;
            });
        });

        function myFunction() {
            var input, filter, table, tr, td, i, td1;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                td1 = tr[i].getElementsByTagName("td")[2];
                td2 = tr[i].getElementsByTagName("td")[3];
                if (td || td1 || td2) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td1.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
<script>
    $(document).ready(function () {
        if (window.location.href.indexOf('#myModal') != -1) {
            $('#myModal').modal('show');
        }

    });
</script>
</html>
