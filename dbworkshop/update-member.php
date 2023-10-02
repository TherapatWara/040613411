<?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("UPDATE member SET  password=?, name=?, address=?, mobile=?, email=?  WHERE username=?");

    $stmt->bindParam(1, $_POST["password"]);
    $stmt->bindParam(2, $_POST["name"]);
    $stmt->bindParam(3, $_POST["address"]);
    $stmt->bindParam(4, $_POST["mobile"]);
    $stmt->bindParam(5, $_POST["email"]);
    $stmt->bindParam(6, $_POST["username"]);
    if ($stmt->execute()) // เริ่มแก้ไขข้อมูล หากแก้ไขส าเร็จเงื่อนไขจะเป็ นจริง
    echo "แก้ไข" . $_POST["username"] . "สำเร็จ";
?>