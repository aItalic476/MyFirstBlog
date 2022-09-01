<?php
include("database.php");
$stmt=$my_db->prepare("SELECT * FROM `users` WHERE `login`=:login");
$stmt->execute(['login'=>$_POST['login']]);//проверка введенного пользователем логина
if(!($stmt->rowCount()>0)){//если запрос не возвратил никаких записей
    echo("<script>alert('Неверный логин!'); location.href='index.php'</script>");
    exit;
}
$user = $stmt->fetch();

if(password_verify($_POST['password'],$user['password'])){ //если введенный пароль совпадает с его хэшем в бд
   $_SESSION['user_id'] = $user['id']; //id текущей сессии заменяется на id пользователя
    header('Location: /firstblog/index.php',true);//перенаправление на главную с заменой предыдущего заголовка
    exit;

}

echo("<script>alert('Неверный пароль!'); location.href='index.php'</script>");

?>