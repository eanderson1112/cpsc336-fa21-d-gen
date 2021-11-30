<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="formating.css">
</head>
<body>
    <form action="delete.php" method="post">
    <input type = "text" name = "ID" id = "ID"><br>
    <input type ="submit" name = "Delete Item">
    </form>
<?php
    require "connect.php";
    $ID = $_POST["ID"];
    $query = "DELETE FROM Product WHERE barcode='$ID'";
    $res=mysqli_query($conn, $query);
    if($res) {
        echo"<p>'$ID' was successfully deleted</p>";
    }
    else{
        echo"<p>'$ID' failed to be deleted</p>";
    }
?>
</body>
</html>
