<?php
include('config.php');

if (!empty($_REQUEST['bac'])) {
    $stmt = $pdo->prepare("UPDATE users SET bac = :user_bac  WHERE id = :user_id");

    $user_bac = $_REQUEST['bac'];
    $user_id = $_REQUEST['id'];

    $stmt->bindParam(':user_bac', $user_bac, PDO::PARAM_STR);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

    $stmt->execute();

    echo $user_bac;
}