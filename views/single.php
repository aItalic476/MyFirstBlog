<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Single - Future Imperfect by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Future Imperfect</a></h1>
						<nav class="links">
							<ul>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Ipsum</a></li>
								<li><a href="#">Feugiat</a></li>
								<li><a href="#">Tempus</a></li>
								<li><a href="#">Adipiscing</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Actions -->
						<section>
							<ul class="actions stacked"> <!--stacked-->
								<li><h3>Login</h3></li>
								<hr>
								<li>
									<form action="" method="post">
									<input type="text" name="login" placeholder="Username"><br>
									<input type="password" name="password" placeholder="Password"><br>
									<input type="submit" name="login" class="button large fit" value="Log in">
									</form>
									</li>
									
								<li><h3>Registration</h3></li>
								<hr>
								<li>
									<form action="" method="post">
									<input type="text" name="login" placeholder="Username"><br>
									<input type="password" name="password" placeholder="Password"><br>
									<input type="file" name="file"><br><br>
									<input type="submit" name="register" class="button large fit" value="Sign up">
									</form>
							</li>
							</ul>
						</section>

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#"><?=$post['title']?></a></h2>
										<p><?=$post['subtitle']?></p>
									</div>
									<div class="meta">
										<time class="published" datetime="<?=$post['date']?>"><?=$post['date']?></time>
										<a href="#" class="author"><span class="name"><?=$author_name['login']?></span><img src="<?=$author_name['avatar']?>" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="<?=$post['image']?>" alt="" /></span>
								<p><?=$post['content']?></p>
								
								<footer>
									<ul class="stats">
										<?php if($check_auth && $post['author_id']==$_SESSION['user_id']):?>
										<li><a href="edit_post.php?edit=<?=$post['id']?>">Edit</a></li>
										<li><a href="?delete=<?=$post['id']?>">Delete</a></li>
										<?php endif;?>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

					</div>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>