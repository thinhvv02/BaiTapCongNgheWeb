<?php
include_once('../bai7/connect.php');
$icon = $_FILES['image']['name'];
$anhminhhoa_tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($anhminhhoa_tmp, "../images/" . $icon);

$theloai = $_POST['TenTL'];
$thutu = $_POST['ThuTu'];
$an = $_POST['AnHien'];

$sl = "INSERT INTO theloai(TenTL,ThuTu,AnHien,icon) VALUE('$theloai','$thutu','$an','$icon')";

if (mysqli_query($connect, $sl)) {
    echo "<script language='javascript'>alert('Them thanh cong');";
    echo "location.href='theloai.php';</script>";
} else {
    echo 'Lỗi: ' . mysqli_error($connect);
}
?>
