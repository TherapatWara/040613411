<?php include "connect.php" ?>

<?php
    $keyword = $_GET["keyword"];
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE '%$keyword%'");
    if (!empty($_GET)) 

    $stmt ->execute();
?>
<table border="1">
    <?php while($row = $stmt->fetch()): ?>
        <tr>
            <td><?php echo $row["username"]?></td>
            <td><?php echo $row["password"]?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["address"]?></td>
            <td><?php echo $row["mobile"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><img src="img/<?php echo $row["name"]?>.JPG" width=100></td>
            

        </tr>
    <?php endwhile;?>
</table>