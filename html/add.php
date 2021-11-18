<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="formating.css">
</head>
<body>
    <form action="add.php" method="post">
    <label for="ID">Item ID:</label><br>
    <input type = "text" name = "ID" id = "ID"><br>
    <label for="Name">Item Name:</label><br>
    <input type = "text" name = "Name" id = "Name"><br>
    <label for="QTY">Quantity:</label><br>
    <input type = "text" name = "QTY" id = "QTY"><br>
    <input type ="submit" name = "Add Item">
    </form>
<?php
    require "connect.php";
    $ID = $_POST["ID"];
    $Name= $_POST["Name"];
    $QTY = $_POST["QTY"];
    $query = "INSERT INTO ? VALUES('$ID','$Name','$QTY')";
    $res=mysqli_query($conn, $query);
    if($res){
        echo $Name." successfully added to inventory";
    }
    else{
        echo "Some error occurred";
    }
?>
</body>
</html>