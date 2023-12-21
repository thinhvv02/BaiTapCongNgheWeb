<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled Document</title>
</head>

<body>
    Trang Quan tri
    <?php
    if (isset($_COOKIE['userename']) and isset($_COOKIE['passwrod'])) {
        echo "Xin chào: " . $_COOKIE['username'];
        echo "<br><a href='logout.php'>Logout</a>";
    } else {
        if (isset($_SESSION['username']) and isset($_SESSION['password'])) {
            echo "Xin chào: " . $_SESSION['username'];
            echo "<br><a href='logout.php'>Logout</a>";
        } else {
            echo "<script>alert('Bạn chưa đăng nhập');
            location.href='login.php';</script>";
        }
    }
    ?>
    <a href="logout.php">Thoat ra</a>
</body>

</html>