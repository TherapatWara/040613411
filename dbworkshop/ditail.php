<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .s1{
            margin-left: 30px;
            margin-top: 30px;
            font-size: 40px;
        }
    </style>
</head>
<body>   

    <?php 
        $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");

        if (!empty($_GET)) 
            $value =  $_GET["key"] . '%';
        $stmt->bindParam(1, $value);
        $stmt->execute();
        $i=0;
        
        while($row=$stmt->fetch()): ?>
            <div class="s1">
                <?= "ชื่อสมาชิก: ".$row["name"] ."<br>"."ที่อยู่: ".$row["address"] ."<br>"."อีเมล์: ".$row["email"] ."<br>"?>
                <img src='./member_photo/<?=$row["name"]?>.jpg' width='200'><br>
            </div>
        <?php endwhile ?>
        <a href="./wk5.php">
            <button style="font-size:30px; margin-left:30px;">go back</button>
        </a>
        
        

</body>
</html>