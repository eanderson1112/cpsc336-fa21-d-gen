<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="formating.css">
</head>
<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="add.php">Add Item</a></li>
        <li><a href="delete.php">Delete Item</a></li>
        <li><a href="display.php">Display Items</a></li>
    </ul>
</nav>
<body>
    <h1>Add an Item to the inventory</h1>
    <form class = box action="add.php" method="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="ID">Item ID:</label><br>
    <input type = "text" name = "ID" id = "ID"><br>
    <label for="Name">Item Name:</label><br>
    <input type = "text" name = "Name" id = "Name"><br>
    <label for="QTY">Quantity:</label><br>
    <input type = "text" name = "QTY" id = "QTY"><br>
    <input type ="submit" name = "Add Item">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require "connect.php";
            $ID = $_POST["ID"];
            $Name= $_POST["Name"];
            $QTY = $_POST["QTY"];
            $query = "INSERT INTO Product VALUES('$ID','$Name','$QTY')";
            $res=mysqli_query($conn, $query);
            if($res){
                echo $Name." successfully added to inventory";
            }
            else{
                echo "Some error occurred";
            }
        }
    ?>  
</body>
</html>