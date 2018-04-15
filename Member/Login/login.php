<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "laundry123");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $data = hash('md5', $password, false);
    $query = "SELECT * FROM member WHERE username ='$username'AND password ='$data'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['login_member'] = $row['id_member'];
        header("location: ../MemberHome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
        $_SESSION['error'] = $error;
        header("location:loginform.php");
    }
    $conn->close();
}
?>