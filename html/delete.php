<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    require "connect.php";
    $query = "SELECT * FROM ?";
    $res=mysqli_query($conn, $query);
?>
</body>
</html>