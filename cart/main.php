<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        if($_GET["visit"] == "en"){
            echo "Welcome";
        }
        else{
            echo "ยินดีต้อนรับ";
        }
    ?>
    <a href="select.php"><button >back</button></a>
</body>
</html>