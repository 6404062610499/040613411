<?php include "connect.php" ?>
<?php
if (isset($_POST["username"])) {
    $targetUsername = $_POST["username"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $email = $_POST["email"];

    $stmt = $pdo->prepare("UPDATE member SET name=?, address=?, email=? WHERE username=?");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $address);
    $stmt->bindParam(3, $email);
    $stmt->bindParam(4, $targetUsername);
    if ($stmt->execute()) // เริ่มแก้ไขข้อมูล หากแก้ไขส าเร็จเงื่อนไขจะเป็ นจริง
        echo "แก้ไขข้อมูล " . $targetUsername . " สำเร็จ";
    }
?>
