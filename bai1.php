<!-- Bài 1 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=uft-8">
<title>Chào các bạn</title>
</head>

<?php

    $ten = $_POST["ten"];

    if (isset($ten)) {
        $show = $_POST["ten"];
        $xuat_hien = "Chào bạn ".$show;
    }

?>

<body>
    <form action="bai1.php" method="post">
        <table width="271" border="1">
            <tr>
                <td colspan="2" bgcolor="#336699"><strong>In lời chào</strong></td>
            </tr>
            <tr>
                <td width="91">Họ tên bạn</td>
                <td width="164">
                    <input type="text" name="ten" id="chao3">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label><?php echo $xuat_hien; ?></label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất"></td>
            </tr>
        </table>        
    </form>
</body>
</html>