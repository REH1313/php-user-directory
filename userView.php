<?php
require 'userModel.php';
$users = getAllUsers();
include 'header.php';
?>

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
