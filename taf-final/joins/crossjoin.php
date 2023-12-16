<?php

include("../php_config/config.php");

$sql = "SELECT * FROM user Cross join comments";

$res = $conn->query($sql);
$users = $res->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cross join</title>

    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../join_styles/inner.css">
</head>
<body>
    <?php
        $page = "Cross join";
        include_once('join_data.php');
    ?>
    
</body>
</html>