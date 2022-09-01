<?php
include("database.php");
$check_auth = boolval(isset($_SESSION['user_id'])?$_SESSION['user_id']:false);
include("models/article.php");
include("views/single.php");
?>