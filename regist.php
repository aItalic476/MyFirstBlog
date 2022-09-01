<?php
include("database.php");
$stmt=$my_db->prepare("SELECT * FROM `users` WHERE `login`=:login");
$stmt->execute(['login'=> $_POST['login']]);
if($stmt->rowCount()>0){
    echo("<script>alert('Пользователь с таким именем уже существует'); location.href='index.php'</script>");
    exit;
}
$stmt=$my_db->prepare("INSERT INTO `users`(`login`,`password`,`avatar`,`role`) 
VALUES(:login, :password,:avatar,:role)");
$stmt->execute(['login'=>$_POST['login'],
'password'=>password_hash($_POST['password'],PASSWORD_DEFAULT),//хэш пароля зарегистрированного пользователя
'avatar'=>"images/avatar.jpg",
'role'=>2]);
//password_hash создает хеш пароля на основе случайно генерируемого ядра(seed)

echo("<script>alert('Вы успешно зарегистрировались!'); location.href='index.php'</script>");
?>