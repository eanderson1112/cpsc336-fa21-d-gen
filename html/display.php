<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="formating.css">
</head>
<body>
<?php
    require "connect.php";
    $query = "SELECT * FROM ?";
    $result=mysqli_query($conn, $query);
    echo "<b>Item Name<br>Item ID<div>Qty</div></b>";
    while ($row = mysqli_fetch_row($result)){
        echo $row["Item_Name"]."<br>";
        echo $row["ID"]."<div>".$row['quantity']."</div>";
    }
?>
</body>
</html>