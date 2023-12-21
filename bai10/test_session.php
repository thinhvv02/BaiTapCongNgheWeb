<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test session</title>
</head>

<body>
    <?php
    echo "Chao ban" . $_SESSION['name'] . "co tuoi la:" . $_SESSION['age'];
    ?>
    <br />
    <a href="huy_session.php">Huy session</a>
</body>

</html>