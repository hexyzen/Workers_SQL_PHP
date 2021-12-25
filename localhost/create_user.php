<?php
$userlogin = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$userpassword = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$useremail =  filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$userpassword = md5($userpassword."thisisforhabr");
require_once __DIR__."/database/pdo.php";
$query = $pdo->prepare("CREATE TEMPORARY TABLE tmp_table_users SELECT * FROM users");
$query ->execute();
$sql = "SELECT * FROM tmp_table_users WHERE Login = ?";
$stmt = $pdo-> prepare($sql);
$stmt -> execute([$userlogin]);
$users = $stmt->fetchAll();
$sql = "INSERT INTO `users` (`id`, `Login`, `Password`, `Email`) VALUES (NULL,:Login,:Password,:Email);";

$params =[
    "Login" => $userlogin,
    "Password" => $userpassword,
    "Email" => $useremail,
    ];
if(count($users) == 0){
    $prepare = $pdo->prepare($sql);
    $prepare -> execute($params);
    $lastInsertId = $pdo->lastInsertId();
    header("location: /index.php");
}else{
    exit();
}
    
    ?>
