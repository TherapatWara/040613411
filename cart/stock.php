<?php include "connect.php" ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>stock</h1>
    <a href="index.php">back</a>
    <?php
        $stmt = $pdo->prepare("SELECT product.pname,SUM(item.quantity) FROM item,product WHERE product.pid=item.pid GROUP BY product.pname;");        
        $stmt->execute(); 
        $row = $stmt->fetch();

        $i=0;
        while($row=$stmt->fetch()){
            $x[$i] = $row["pname"];
            $y[$i] = $row["SUM(item.quantity)"];
            $i++;
        }
        echo "
            <table border='1' >
                <tr>
                    <th>ชื่อสินค้า</th>
                    <th>จำนวนคงเหลือ</th>

                </tr>";
                for($j=0;$j<$i;$j++){
                    echo "<tr><td>$x[$j]</td><td><input type='number' style='text-align:center' value='$y[$j]'></td></tr>";
                }
            echo "</table>";


    ?>
</body>
</html>