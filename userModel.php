<?php
require 'db_connect.php';

function getAllUsers() {
    $stmt = $pdo->prepare("SELECT * FROM membership");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>