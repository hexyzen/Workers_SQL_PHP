<?php
    require_once __DIR__ . "/database/pdo.php";
    
    $workerid = $_POST["worker_id"];
	$workername = $_POST["worker_name"];
	$workergender = $_POST["worker_gender"];
	$workerbio = $_POST["worker_bio"];
	$workerexp = $_POST["worker_exp"];

    $sql = "INSERT INTO `worker` (`worker_id`, `worker_name`, `worker_gender`, `worker_bio`, `worker_exp`) VALUES (:worker_id, :worker_name, :worker_gender, :worker_bio, :worker_exp)";
    $params = [
        "worker_id" => $workerid,
        "worker_name" => $workername,
        "worker_gender" => $workergender,
        "worker_bio" => $workerbio,
        "worker_exp" => $workerexp,
    ];

    $prepare = $pdo->prepare($sql);
    $prepare->execute($params);

    $pdo->lastInsertId();

    $lastInsertId = $pdo->lastInsertId();

    header("Location: /worker.php?id=$lastInsertId");
?>    