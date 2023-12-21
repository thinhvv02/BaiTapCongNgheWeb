<?php

session_start();
if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = "hocweb.com.vn";
    $_SESSION['age'] = 120;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <?php echo "Tên bạn là:" . $_SESSION['name'] . "<br/>";
    echo "Số tuổi của bạn:" . $_SESSION['age'] . "<br/>";
    ?>
    <a href="test_session.php">Click here!</a>
</body>

</html>