<?php

$stmt = $my_db->prepare("SELECT * FROM `settings`");//запрос к таблице, содержащей данные для пагинации
$stmt->execute();
$settings=$stmt->fetch();
$current_page = isset($_GET['page']) ? $_GET['page']:1;//текущая страница, по умолчанию ?page=1
$offset=(($current_page-1)*intval($settings['pages']));//параметр смещения по записям для запроса к бд
$limit = $settings['pages'];// количество постов на одной странице
$stmt = $my_db->prepare("SELECT * FROM `posts` 
ORDER BY id DESC LIMIT $limit OFFSET $offset");//выборка постов по убыванию c заданным limit и offset
$stmt->execute();
$posts=$stmt->fetchall();

?>