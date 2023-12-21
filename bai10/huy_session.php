<?php

session_start();
unset($_SESSION['name']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huy sesstion</title>
</head>
<body>
    <?php
    echo "Chao ban no name"."<br/>"."co tuoi la: ".$_SESSION['age'];
    ?>
</body>
</html>