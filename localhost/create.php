<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content = "IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale =1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-6">
				<h2>Додати працівника</h2>
					<form action="store.php" method="POST">
						<div class="form-group">
							<label>Worker ID</label>
							<input type="text" name="worker_id" class="form-control" />
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="worker_name" class="form-control">
						</div>
						<div class="form-group">
							<label>Gender</label>
							<div>
								<label class="radio-inline">Male</label> 
									<input type="radio" name="worker_gender" value="Male">	
								<label class="radio-inline">Female</label>
									<input type="radio" name="worker_gender" value="Female">
							</div>
						</div>	
						<div class="form-group">
							<label for="workbio">Bio</label>
							<input type="text" name="worker_bio" class="form-control">
						</div>
						<div class="form-group">
							<label for="workexp">Experience</label>
							<input type="text" name="worker_exp" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">Додати</button>
					</form>
				</div>
		    </div>
		</div>
</body>
</html>
