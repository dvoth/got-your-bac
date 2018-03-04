<?php
include('../config.php');

if(!empty($_REQUEST['timeframe']) && !empty($_REQUEST['id'])) {
	if ($_REQUEST['timeframe'] == 'day') {
		$dateSql = "WHERE DATE(date_added) = CURDATE()";
	} else if ($_REQUEST['timeframe'] == 'week') {
		$dateSql = "WHERE DATE(date_added) between date_sub(now(),INTERVAL 1 WEEK) and now()";
	} else if ($_REQUEST['timeframe'] == 'month') {
		$dateSql = "WHERE DATE(date_added) between date_sub(now(),INTERVAL 1 MONTH) and now()";
	}

	if (!empty($dateSql)) {
		var_dump($dateSql);
		$stmt = $pdo->prepare("SELECT * FROM user_bac " . $dateSql . " AND user_id = :user_id");
	    $user_id = (int)$_REQUEST['id'];
	    $date_added = date('Y-m-d H:i:s');

	    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

	    $stmt->execute();

	    echo $stmt->rowCount();
	}
}
