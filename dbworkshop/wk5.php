<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="key">
        <input type="submit" style="margin-bottom: 20px;" value="ค้นหา">
    </form>    

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
            <?= "ชื่อสมาชิก: ".$row["name"] ."<br>"."ที่อยู่: ".$row["address"] ."<br>"."อีเมล์: ".$row["email"] ."<br>" ?>
            <a href='editform.php?username=<?=$row["username"]?>'>แก้ไข</a><br>
            <a href="./ditail.php?key=<?=$row["username"]?>">
                <img src='./member_photo/<?=$row["name"]?>.jpg' width='100'><br>
            </a>
            <?= "<hr>\n" ?>
        <?php endwhile ?>
        
        

</body>
</html>