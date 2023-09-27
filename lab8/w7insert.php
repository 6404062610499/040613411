<?php include "connect.php" ?>
<?php
    $stmt = $pdo->prepare("INSERT INTO member (username, name, address, email) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $_POST["username"]);
    $stmt->bindParam(2, $_POST["name"]);
    $stmt->bindParam(3, $_POST["address"]);
    $stmt->bindParam(4, $_POST["email"]);
    $stmt->execute(); // เริ่มเพิ่มข้อมูล
    $pid = $pdo->lastInsertId(); // ขอคีย์หลักที่เพิ่มส าเร็จ
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
    เพิ่มข้อมูลผู้ใช้สำเร็จ ชื่อผู้ใช้ <?=$_POST["username"]?>
</body>
</html>