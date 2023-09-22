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
        
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        $i=0;
      
        while($row=$stmt->fetch()): ?>
            <?= "ชื่อสมาชิก: ".$row["name"] ."<br>"."ที่อยู่: ".$row["address"] ."<br>"."อีเมล์: ".$row["email"] ."<br>"?>
            <?= "<hr>\n" ?>
        <?php endwhile ?>
        
        

</body>
</html>