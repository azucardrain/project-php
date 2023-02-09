<?php
require 'database.php';
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM users WHERE id = $id");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$users = $stmt->fetchAll();
?>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

<style>
    h1 {
        padding-left: 10px;

    }

    nav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }
</style>

<body>
    <table class=" table">
        <thead>
            <tr>
                <th>id</th>
                <th>naam </th>
                <th>IP </th>
                <th> email </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $users): ?>
                <tr>
                    <td>
                        <?php echo $users['id'] ?>
                    </td>
                    <td>
                        <?php echo $users['first_name'] . ' ' . $users['last_name']; ?>
                    </td>
                    <td>
                        <?php echo $users['ip_address'] ?>
                    </td>
                    <td>
                        <?php echo $users['email'] ?>
                    </td>
                    <td>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</body>

</html>