<?php
$keyword = $_GET["keyword"];
$conn = new mysqli("localhost", "root", "", "blueshop");

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    exit;
}

$conn->set_charset("utf8");

$sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
$result = $conn->query($sql);
?>

<table border="1">
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
    <td><?php echo $row["username"]?></a></td>
    <td><?php echo $row["name"]?></td>
    <td><img src="img/<?php echo $row["username"] ?>.jpg" width="100"></td>
    </tr>
    <?php endwhile; ?>
</table>

<?php
$conn->close();
?>
