<?php
$id = isset($_GET['post'])?$_GET['post']:"";//после нажатия Continue Reading ?post=$post['id']
$stmt = $my_db->prepare("SELECT * FROM `posts` WHERE id=:id");//получение текущего поста из бд 
$stmt->execute(['id'=>$id]);
$post=$stmt->fetch();
$author_id = $post['author_id'];//внеш.ключ posts.author_id_users.id
$stmt = $my_db->prepare("SELECT `login`,`avatar` FROM `users` WHERE id=:author_id");//получение аватара и имени пользователя
$stmt->execute(['author_id'=>$author_id]);
$author_name = $stmt->fetch();
$delete = isset($_GET['delete']) ? $_GET['delete']:"";//после нажатия DELETE ?delete=$post['id']
if(isset($_GET['delete'])){
    $stmt = $my_db->query("DELETE FROM `posts` WHERE `id`='$delete'");
    $auto_incr=intval($delete);//знач. последнего удаленного поста = начальное знач. автоинкремента
    $stmt =$my_db->query("ALTER TABLE `posts` AUTO_INCREMENT=$auto_incr");
    echo("<script>alert('Пост успешно удален');location.href='index.php'; </script>");
   $delete=null;
}

?>