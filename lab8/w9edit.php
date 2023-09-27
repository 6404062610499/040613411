<?php include "connect.php" ?>
<?php
if (isset($_GET["username"])) {
    $targetUsername = $_GET["username"];

    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $targetUsername);
    $stmt->execute();
    $row = $stmt->fetch();

    if ($row) {
        ?>
        <html>
        <head><meta charset="utf-8"></head>
        <body>
        <form action="w9testupdate.php" method="post">
            ชื่อผู้ใช้ :<input type="text" name="username" value="<?=$row["username"]?>" readonly><br>
            ชื่อสมาชิก : <input type="text" name="name" value="<?=$row["name"]?>"><br>
            ที่อยู่ : <br>
            <textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br>
            อีเมล : <input type="email" name="email" value="<?=$row["email"]?>"><br>
            <input type="submit" value="แก้ไขข้อมูล">
        </form>
        </body>
        </html>
        <?php
    } 
}
?>
