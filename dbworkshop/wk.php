<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare("SELECT * FROM PRODUCT");
        $stmt->execute();
        $i=0;
      
        while($row=$stmt->fetch()){
            $x[$i] = $row["pid"];
            $y[$i] = $row["pname"];
            $z[$i] = $row["pdetail"];
            $xx[$i]= $row["price"];
            $i++;
        }
        echo "
            <table border='1' >
                <tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>รายละเอียดสินค้า</th>
                    <th>ราคา</th>
                </tr>";
                for($j=0;$j<$i;$j++){
                    echo "<tr><td>$x[$j]</td><td>$y[$j]</td><td>$z[$j]</td><td>$xx[$j] บาท</td></tr>";
                }
            echo "</table>";
    ?>
    <br>
</body>
</html>