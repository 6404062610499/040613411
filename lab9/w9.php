<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
    echo "ชื่อผู้ใช้ : " . $row ["username"] . "<br>";
    echo "ชื่อสมาชิก : " . $row ["name"] . "<br>";
    echo "ที่อยู่ : " . $row ["address"] . "<br>";
    echo "อีเมล " . $row ["email"] . " <br>";
    echo "<a href='w9edit.php?username=" . $row ["username"] . "'>แก้ไข</a>";
    echo "<hr>\n";
    }
?>
</body>
</html>
