<?php
    require_once __DIR__ . "/database/pdo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>List</title>
</head>
<body>
    <div class="container">
        <h2 class="mt-3 mb-3">Записи</h2>
        <div class = "row">
            <?php   
                $workers = $pdo->query("SELECT * FROM worker")->fetchAll(PDO::FETCH_ASSOC);
                //print_r($workers);
                foreach($workers as $worker){
                    if($worker["worker_id"] == NULL){
                        continue;
                    }
                
            ?>
                <div class="col-sm-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?=$worker["worker_name"]?></h5>
                            <p class="card-text"><?=$worker["worker_bio"]?></h5>
                            <a href="/edit.php?worker_id=<?=$worker["worker_id"]?>" class="btn btn-success">Редагувати</a>
                            <a href="/worker.php?worker_id=<?=$worker["worker_id"]?>" class="btn btn-primary">Детальніше</a>
                            <a href="/delete.php?worker_id=<?=$worker["worker_id"]?>" class="btn btn-danger">Видалити</a>
                        </div> 
                    </div>
                </div> 
            <?php
                }
            ?>
           
            <a href="/create.php">Додати запис</a>                                      
</body>
</html>