<?php
require 'userModel.php';
$users = getAllUsers();
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Directory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>User Directory</h2>
    <?php if ($users): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>First Name</th><th>Last Name</th><th>Username</th><th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['firstname']) ?></td>
                        <td><?= htmlspecialchars($user['lastname']) ?></td>
                        <td><?= htmlspecialchars($user['username']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No users found.</p>
    <?php endif; ?>

    <?php include 'footer.php';?>
</div>
</body>
</html>
