<?php

$conn = mysqli_connect("localhost", "root", "", "phantrang");
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$limit = 3;
$start = ($page - 1) * $limit;

$total_title = mysqli_query($conn, "SELECT COUNT(*) as total FROM tintuc");
$total = mysqli_fetch_assoc($total_title);
$total_page = ceil($total['total'] / $limit);

$query = "SELECT * FROM tintuc LIMIT ?, ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ii", $start, $limit);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

echo "<div class=\"title\">";
while ($row = mysqli_fetch_array($result)) {
    echo '<a href="#">' . $row['id'] . '. ' . $row['title'] . '</a><br />';
}
echo "</div>";

echo "<div class=\"pagination\">";
for ($i = 1; $i <= $total_page; $i++) {
    echo '<a href="phantrang.php?page=' . $i . '">' . $i . '</a> | ';
}
echo "</div>";
?>

<style>
    body {
        background: #ecf0f1;
    }

    a:link,
    a:visited {
        text-decoration: none;
    }

    a:hover {
        color: #f00;
    }

    .title,
    .pagination {
        width: 600px;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .title {
        background: #3498db;
        padding: 20px;
        line-height: 1.5;
    }

    .title a {
        color: #fff;
    }

    .title a:hover {
        color: #e67e22;
    }
</style>