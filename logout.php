<?php
//выход пользователя из "профиля"
include("database.php");
$_SESSION['user_id']=null;//завершение текущей сессии пользователя
header('Location: /firstblog/index.php',true);
?>