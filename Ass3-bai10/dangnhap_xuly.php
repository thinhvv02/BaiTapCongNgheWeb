<?php
session_start();
if (isset($_POST['login'])) {
    include('../Ass3-bai10/connect.php');
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $sl = "select * from users where Username='" . $name . "' and Password='" . $pass . "'";
    $result = mysqli_query($connect, $sl);
    $row = mysqli_fetch_row($result);
    $kt = mysqli_num_rows($result);

    if ($kt > 0) {
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $pass;

        if (isset($_POST['remember']) and ($_POST['remember'] == "on")) {
            setcookie("username", $name, time() + 60);
            setcookie("password", $pass, time() + 60);
        }
        echo "<script>alert('Login Successfull.');
        location.href='trangquantriadmin.php';</script>";
        echo "Chào bạn: " . $row['name'] . "<br>Password của bạn là: " . $row['pass'];
    } else {
        echo "<script>alert('Login Failed.'); location.href='login.php';</script>";
    }
}

if (isset($_POST['cancel'])) {
    echo "<script>location.href='login.php';</script>";
}
