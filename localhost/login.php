<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$pass = md5($pass."thisisforhabr");
require_once __DIR__."/database/pdo.php";
$query = $pdo->prepare("CREATE TEMPORARY TABLE tmp_table_users SELECT * FROM users");
$query ->execute();
$sql = "SELECT * FROM tmp_table_users WHERE Login = ? AND Password = ?  ";
$stmt = $pdo-> prepare($sql);
$stmt -> execute([$login,$pass]);
$users = $stmt->fetchAll();
$params =[
    "Login" => $login,
    "Password" => $pass,
    ];
if(count($users) == 0){
    header("location: /index.php");
    exit();
}else{
    echo "Yes";
    header("location: /main.php");
    exit();
}

?>
