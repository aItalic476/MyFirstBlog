<?php
include("database.php");
include("models/posts.php");
$user = null;
$check_auth = boolval(isset($_SESSION['user_id'])?$_SESSION['user_id']:false);
if($check_auth){//проверка авторизации для управления логикой вывода компонентов в "views/index.php"
	$stmt=$my_db->prepare("SELECT * FROM `users` WHERE `id`=:id");
	$stmt->execute(['id'=>$_SESSION['user_id']]);
	$user=$stmt->fetchall();
}
include("views/index.php");
?>