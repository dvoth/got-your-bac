<?php
include('../config.php');

if (!empty($_REQUEST['bac']) && !empty($_REQUEST['id'])) {
    $stmt = $pdo->prepare("INSERT INTO user_bac(user_id, bac, date_added) VALUES(:user_id, :user_bac, :date_added)");
    $user_bac = $_REQUEST['bac'];
    $user_id = (int)$_REQUEST['id'];
    $date_added = date('Y-m-d H:i:s');

    $stmt->bindParam(':user_bac', $user_bac, PDO::PARAM_STR);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':date_added', $date_added, PDO::PARAM_STR);

    $stmt->execute();

    echo $user_bac;
}