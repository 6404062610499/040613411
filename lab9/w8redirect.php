<?php include "connect.php" ?>
<?php
    $stmt = $pdo->prepare("INSERT INTO member (username, name, address, email) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $_POST["username"]);
    $stmt->bindParam(2, $_POST["name"]);
    $stmt->bindParam(3, $_POST["address"]);
    $stmt->bindParam(4, $_POST["email"]);
    $stmt->execute(); // เริ่มเพิ่มข้อมูล
    $pid = $pdo->lastInsertId(); // ขอคีย์หลักที่เพิ่มส าเร็จ

// header คือฟังก์ชนที่จัดการส ั งข้อมูลไปยังไฟล์ที่ก าหนด ่ (send redirect)
// ในที่นีคือ ให้เปิดเว็บหน้า ้ product-detail.php พร้อมกับสงรหัสส ่ นค้า ิ (pid) แนบไปกับ URL
    header("location: w8detail.php?username=" . $_POST["username"]);
?>
