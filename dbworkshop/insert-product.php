

<?php
        $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        
        $filename = $_POST["name"].".jpg"; //เปลี่ยนชื่อ file ให่เป็น .jpg
        $tempname = $_FILES["image"]["tmp_name"];  //จะเก็บไว้ใน tempname
        $folder = "./member_photo/" . $filename; //folder ที่เก็บรูป จะเอารูปมาเก็บไว้ที่ folder
        move_uploaded_file($tempname, $folder);

        $stmt = $pdo->prepare("INSERT INTO member VALUES (?,?,?,?,?,?)");



        $stmt->bindParam(1, $_POST["username"]);
        $stmt->bindParam(2, $_POST["password"]);
        $stmt->bindParam(3, $_POST["name"]);
        $stmt->bindParam(4, $_POST["address"]);
        $stmt->bindParam(5, $_POST["mobile"]);
        $stmt->bindParam(6, $_POST["email"]);
        $stmt->execute();

        $pid = $pdo->lastInsertId();

        header("location: wk5.php?key=" . $_POST["username"]);
    ?>
