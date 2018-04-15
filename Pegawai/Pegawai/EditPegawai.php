<?php
$conn = new mysqli("localhost","root","","laundry");
$id = $_GET['id'];
$queryProfilePegawai =  mysqli_query($conn,"SELECT *FROM pegawai WHERE pegawai.id = $id");
$resultProfilePegawai = mysqli_fetch_assoc($queryProfilePegawai);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">


    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Sidebar.css">
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
            <li class="activeSideBar">
                <a href="../Dashboard/HomePegawai.php?page=1&data=5">
                    <i class="glyphicon glyphicon-home"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" style="border-left-color: #3c8dbc;">
                    <i class="glyphicon glyphicon-user"></i>
                    Member
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-info-sign"></i>
                    Pegawai
                </a>
            </li>
            <li>
                <a href="#">
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
            <div class="navbar-custom-menu">
                <ul class="nav" id="navnav">
                    <li id="fat-menu" style="padding-right: 5px;">
                        <a href="#" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button">
                            <img id="img"
                                 src=data:image/png;base64,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>
                            <span>Krisna Pranata</span>
                        </a>
                        <ul class="dropdown-menu"
                            style="margin-left: -115px; margin-top:20px; width: 280px;padding-top: 0">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   style="text-align: center;background: #3c8dbc;padding-top: 20px;padding-bottom: 20px">
                                    <img id="dropdown-image"
                                         src=data:image/png;base64,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
                                         style="border-radius: 50%;height: 80px;display: block;margin: auto;margin-bottom: 10px">
                                    <span style="display:block;color: white;font-size: 14px;">Krisna Pranata<br>Rapid Clean - Pegawai</span>
                                </a>

                            </li>
                            <li>
                                <div style="float: left;padding: 12px">
                                    <button type="submit" class="btn btn-success">Profile</button>
                                </div>
                                <div style="float: right;padding: 12px">
                                    <button type="submit" class="btn btn-danger">Log Out</button>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="fat-menu">
                        <a href="#" id="drop3">
                            <i class="glyphicon glyphicon-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="mainContent" id="mainContent">
        <div class="contentHeader">
            <h3><b>DATA DIRI PEGAWAI</b></h3>
            <hr>
        </div>
    </div>
    <div class="contentBody " id="contentBody">
        <div class="contentBodyLeft content" id="contentBodyLeft" style="border-top: 3px solid green;width: 20%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;position: absolute">
               <div style="text-align: center">
                   <img style="border-radius: 50%;" src=data:image/png;base64,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>
                   <h4><b>Krisna Pranata</b></h4>
                    <p>Rapid Clean - Pegawai</p>
                   <hr>
                   <a href="#" class="fa fa-facebook"></a>
                   <a href="#" class="fa fa-twitter"></a>
                   <a href="#" class="fa fa-google"></a>
                   <a href="#" class="fa fa-instagram"></a>
                </div>
        </div>
        <div class="contentBodyRight" style="margin-left: 300px;width: 70%">
            <div class="contentBodyRight1 content" style="border-top: 3px solid #00c0ef">
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#profile" aria-controls="home" role="tab" data-toggle="tab">Profie</a></li>
                        <li role="presentation"><a href="#user" aria-controls="profile" role="tab" data-toggle="tab">User</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="profile">
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Nama Pegawai</label>
                                    <input type="text" class="form-control" placeholder="Nama Pegawai" value="<?php echo $resultProfilePegawai['nama']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" value="<?php echo $resultProfilePegawai['tgl_lahir']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Nomer Telepon</label>
                                    <input type="text" class="form-control" placeholder="Nomer Telepon" value="<?php echo $resultProfilePegawai['no_telp']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat" value="<?php echo $resultProfilePegawai['alamat']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $resultProfilePegawai['jenis_kelamin']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Terdaftar Pada Tanggal</label>
                                    <input type="date" class="form-control" value="<?php echo $resultProfilePegawai['create_at']?>" disabled>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="user">
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" placeholder="Password" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Pertanyaan Keamanan No 1.</label>
                                    <input type="text" class="form-control" placeholder="Pertanyaan Keamanan No 1." disabled>
                                </div>
                                <div class="form-group">
                                    <label>Pertanyaan Keamanan No 2.</label>
                                    <input type="text" class="form-control" placeholder="Pertanyaan Keamanan No 2." disabled>
                                </div>


                            </form>
                        </div>
                        </div>
                    <button type="submit" class="btn btn-danger" style="width: 15%;float: right">Cancel</button>
                    <button type="submit" class="btn btn-success" style="width: 15%;float: right;margin-right: 5px">
                        Edit
                    </button>
                </div>
            </div>
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
</script>
</body>

</html>
