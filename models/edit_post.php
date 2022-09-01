<?php
$id = isset($_GET['edit'])?$_GET['edit']:"";//существует ли переменная $_GET['edit'], если нет, то использовать ""
$stmt = $my_db->prepare("SELECT * FROM `posts` WHERE id=:id");//выборка данных поста с id=$post['id'] 
$stmt->execute(['id'=>$id]);
$post=$stmt->fetch();
if(isset($_GET['edit'])){
    
    if($_POST){
        
        if(!empty($_FILES['new_file']['name'])){//если был добавлен новый файл
            
            $img = $_FILES['new_file'];
            $name = 'images/' . md5(rand()).'.'. explode("/", $img['type'])[1];//путь к новому файлу
            move_uploaded_file($img['tmp_name'],$name);
        }
        else{
            
            $name=$post['image'];//если файл не был добавлен, то сохраняется путь к старому файлу
        };
        //запрос на обновление таблицы posts
        $stmt = $my_db->prepare("UPDATE `posts` SET `title`=:title,
        `subtitle`=:subtitle,`date`=CURRENT_DATE(), `resume`=:anons,
        `content`=:content,`image`=:link WHERE id=:post_id");
        
        $stmt->execute(['title'=>$_POST['title'], 'subtitle'=>$_POST['subtitle'], 'anons'=>$_POST['resume'], 
        'content'=>$_POST['content'],'link'=>$name, 'post_id'=>(int)$post['id']] );
        
        echo("<script>alert('Изменения сохранены'); location.href='index.php'</script>"); 
        }

}

?>