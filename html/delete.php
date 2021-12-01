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
    <h1>Delete an item from the inventory</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="ID">Item ID:</label><br>
        <input type = "text" name = "ID" id = "ID"><br>
        <input type ="submit" name = "Delete Item">
    </form>
    <div class="box">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
            }
        ?>
    </div>
</body>
</html>
