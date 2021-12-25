<?php
    require_once __DIR__ . "/database/pdo.php";
    
    $workerid = $_POST["worker_id"];
	$workername = $_POST["worker_name"];
	$workergender = $_POST["worker_gender"];
	$workerbio = $_POST["worker_bio"];
	$workerexp = $_POST["worker_exp"];

    $sql = "UPDATE `worker` SET  worker_id= :worker_id, worker_name = :worker_name, worker_gender = :worker_gender, worker_bio = :worker_bio, worker_exp = :worker_exp WHERE worker_id= :worker_id";
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

    header("Location: /worker.php?id=$workerid");
?>    