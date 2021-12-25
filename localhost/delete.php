<?php
    require_once __DIR__ . "/database/pdo.php";
    $id = $_GET["worker_id"];

    $sql = "DELETE FROM worker WHERE worker_id = :worker_id";

    $params = [
        "worker_id" ->$id
    ];

    $prepare = $pdo->prepare($sql);
    $prepare->execute($params);
    header("Location: /list.php");
?>    