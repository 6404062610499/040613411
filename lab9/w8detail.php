<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<?php
    // 1. กำหนดคำสั่ง SQL ให้ดึงสินค้าตามรหัสสินค้า

    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch(); // 4. ดึงผลลัพธ์ (เนื่องจากมีข้อมูล 1 แถวจึงเรียกเมธอด fetch เพียงครั้งเดียว)
?>
<div style="display:flex">
    <div style="padding: 15px">
        <h2><?=$row["username"]?></h2>
        ชื่อสมาชิก : <?=$row["name"]?><br>
        ที่อยู่ : <?=$row["address"]?><br>
        อีเมล : <?=$row["email"]?><br><br>
    </div>
</div>
</body>
</html>

