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
        <input type="submit" style="margin-bottom: 20px;" value="ลบ">
        
    </form>    

    <?php 
        $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare("DELETE  FROM member WHERE username LIKE ?");

        if (!empty($_GET)) 
            $value =  $_GET["key"] . '%';
        $stmt->bindParam(1, $value);
        $stmt->execute();
        $i=0;
        ?>
        
        
        

</body>
</html>