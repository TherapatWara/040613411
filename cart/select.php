<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(empty($_COOKIE["visit"])){
            setcookie("visit","en",time() + 3600*24);
            header("location:main.php?visit=en");
        }
        else{
            $visit = "th";
            setcookie("visit",$visit,time() + 3600*24);
            header("location:main.php?visit=th");
        }
    ?>
</body>
</html>