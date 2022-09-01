<?php



if($_POST){
    $title=htmlspecialchars($_POST['title']);//экранирование нежелательных html тэгов
    $subtitle=htmlspecialchars($_POST['subtitle']);
    $resume = htmlspecialchars($_POST['resume']);
    $content =htmlspecialchars($_POST['content']);

    $img = $_FILES['file'];
$name = 'images/' . md5(rand()).'.'. explode("/", $img['type'])[1];//$img['type']='image/jpeg', директория загрузки
move_uploaded_file($img['tmp_name'],$name);// перемещение загр. файла в директорию
$stmt = $my_db->prepare("INSERT INTO `posts` SET `title`=:title,
`subtitle`=:subtitle,`date`=CURRENT_DATE(), `resume`=:anons,`content`=:content,`image`=:link, `author_id`=:user");
$stmt->execute(['title'=>$title, 'subtitle'=>$subtitle, 'anons'=>$resume, 'content'=>$content,'link'=>$name,'user'=>$_SESSION['user_id']]);
echo("<script>alert('Новая запись успешно добавлена'); location.href='index.php'</script>");//перенаправление на главную
}

?>