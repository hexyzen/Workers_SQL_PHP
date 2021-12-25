<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
 <body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>     
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Workers Info</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
    </div>
  </div>
</nav>
<div class="container">
    <h2>Registration</h2>
    <form action="create_user.php" method="POST">
        <div class = "mb-3">
            <label for="exampleInputName1" class="from-label">Login</lable>
            <input type ="text" name="login" class = "form-control" id ="exampleinputTutle1">
</div>
<div class = "mb-3">
            <label for="exampleInputCat1" class="from-label">Password</lable>
            <input type ="text" name="password" class = "form-control" id ="exampleinputTutle1">
</div>
<div class = "mb-3">
            <label for="exampleInputCat1" class="from-label">Email</lable>
            <input type ="text" name="email" class = "form-control" id ="exampleinputTutle1">
</div>
<?php
?>
<button type="submit" class ="btn btn-outline-secondary">Registration</button>
<a href="/index.php" class = "btn btn-outline-secondary">Sign in</a>
    </form>
</div>
</body>
</html>
