<?php
include("database.php");
//проверка авторизации пользователя при попытке зайти на страницу
//редактирования через поисковую строку
$check_auth = boolval(isset($_SESSION['user_id'])?$_SESSION['user_id']:false);
if(!$check_auth){
    echo("<script>alert('У вас недостаточно прав для доступа к этой странице'); location.href='index.php'</script>");
}

include("models/add.php");
include("views/add.php");


?>