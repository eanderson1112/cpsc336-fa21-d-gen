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
<h1>All items currently in the inventory</h1>
    <div class = box>
        <div style="font-weight:bold">Item Name<br>Item ID<div>Qty</div></div>
        <hr>
            <?php
                require "connect.php";
                $query = "SELECT * FROM Product";
                $result=mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<div>".$row["name"]."<br>";
                    echo $row["barcode"]."<div>".$row['quantity']."</div></div><br>";
                    }
            ?>
        </div>
    </div>
</body>
</html>
