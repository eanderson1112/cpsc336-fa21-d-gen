<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="formating.css">
</head>
<body>
    <div class = box>
    <?php
        require "connect.php";
        $query = "SELECT * FROM Product";
        $result=mysqli_query($conn, $query);
        echo "<b>Item Name<br>Item ID<div>Qty</div></b>";
        while ($row = mysqli_fetch_assoc($result)){
            echo $row["name"]."<br>";
            echo $row["barcode"]."<div>".$row['quantity']."</div>";
            }
        ?>
    </div>
</body>
</html>
