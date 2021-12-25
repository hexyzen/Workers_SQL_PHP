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
			<div class="row">
				<div class="col-6">
				<h2>Оновити дані про працівника</h2>
					<form action="update.php" method="POST">
						<div class="form-group">
							<label>Worker ID</label>
							<input type="text" name="worker_id" class="form-control" value="<?= $worker["worker_id"]?>">
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="worker_name" class="form-control" value="<?= $worker["worker_name"]?>">
						</div>
						<div class="form-group">
							<label>Gender</label>
							<div>
								<label class="radio-inline">Male</label> 
									<input type="radio" name="worker_gender" value="Male" value="<?= $worker["worker_gender"]?>">	
								<label class="radio-inline">Female</label>
									<input type="radio" name="worker_gender" value="Female" value="<?= $worker["worker_gender"]?>">
							</div>
						</div>	
						<div class="form-group">
							<label for="workbio">Bio</label>
							<input type="text" name="worker_bio" class="form-control" value="<?= $worker["worker_bio"]?>">
						</div>
						<div class="form-group">
							<label for="workexp">Experience</label>
							<input type="text" name="worker_exp" class="form-control" value="<?= $worker["worker_exp"]?>">
						</div>
						<button type="submit" class="btn btn-success">Оновити</button>
					</form>
				</div>
		    </div>
		</div>
</body>
</html>