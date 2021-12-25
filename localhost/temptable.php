<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
</style>
</head>
 <body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>     
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Workers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/create.php">Додати</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown"id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Таблиці </a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a href="/list.php">Робочі</a></li>
              <li><a href="">інші</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
 <p class="h2 m-3">Посади</p>
<div class ="card">
<table class="table">
  <tr>
    <td scope ="col">ID рабочего</td>
    <td scope ="col">Ім'я</td>
    <td scope ="col">Дата створення</td>
    <td scope ="col">Стать</td>
    <td scope ="col">Додатково</td>
  </tr>
  
 

    <?php
    require_once __DIR__."\database\pdo.php";
    $query = $pdo->prepare("CREATE TEMPORARY TABLE tmp_table SELECT * FROM worker");
    $query ->execute();
    $orders = $pdo->query("SELECT * FROM tmp_table WHERE Worker_id > '123' ") -> fetchAll(PDO::FETCH_ASSOC);
   
    foreach($orders as $orderinf){
    ?>
    <tr>
    <td><?= $orderinf["worker_id"]?></td>
    <td><?= $orderinf["worker_name"]?> </td>
    <td><?= $orderinf["DateOfCreation"]?></td>
    <td><?= $orderinf["worker_gender"]?></td>
  </tr>
    <?php
    }
    ?> 
    </table>
    <br>
</div>
</body>
</html>
