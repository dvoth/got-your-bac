<?php
include('../config.php');

$stmt = $pdo->prepare("SELECT DAYNAME(date_added) AS x, COUNT(*) AS y FROM user_bac GROUP BY DAYOFWEEK(date_added) ORDER BY DAYOFWEEK(date_added)");

$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}

echo json_encode($data);
