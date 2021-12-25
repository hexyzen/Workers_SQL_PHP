<?php
    require_once __DIR__ . "/database/pdo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Worker</title>
</head>
<body>
    <div class = "container">
    <a href="/list.php">Всі працівники</a>
        <?php
            $id = $_GET["worker_id"];

            $query = $pdo->prepare("SELECT * FROM worker WHERE worker_id = :worker_id");

            $query->execute(["worker_id"=>$id]);
            $worker = $query->fetch(PDO::FETCH_ASSOC);

            if(!$worker) {
                echo '<h5 class="card-title">Запис не знайдено</h5>';
                die();
            }
        ?>
        <h2 class ="mt-3 mb-3">Працівники</h2>
        <div class = "row">
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <h5 class="card-title"><?=$worker["worker_name"]?></h5>
                    <p class="card-text"><?=$worker["worker_gender"]?></p>
                    <p class="card-text"><?=$worker["worker_bio"]?></p>
                    <p class="card-text"><?=$worker["worker_exp"]?></p>
                </div>        
            </div>        
        </div>    
</body>
</html>