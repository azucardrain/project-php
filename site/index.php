<?
require 'database.php';
$sql = "SELECT * FROM users ORDER BY id asc";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<html>

<body>
    
</body>

</html>