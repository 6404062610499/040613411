<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php include "connect.php" ?>

<html>
<head><meta charset="utf-8"></head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    echo "<table border=1>";
    echo "<tr>";
        echo "<th>รหัสลูกค้า</th>";
        echo "<th>ชื่อลูกค้า</th>";
        echo "<th>รายละเอียด</th>";
        echo "<th>ราคา</th>";
        echo "</tr>";
    while ($row = $stmt->fetch()) {
        echo "<tr><td>";
        echo "" . $row ["pid"] ."</td><td>". $row ["pname"] ."</td><td>" . $row ["pdetail"] ."</td><td>" . $row ["price"] ."<tr>\n";
        }
    ?>
</body>
</html>

