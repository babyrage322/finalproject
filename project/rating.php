<?php
   include('session.php');
?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Киномонстр - это портал о кино">
	<meta name="keyword" content="фильмы, фильмы онлайн">
	<title>КиноМонстр</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/JavaScript/Navigation.js"></script>
    <script src="assets/JavaScript/slider.js"></script>
	<link rel="shortcut icon" href="../favicon.ico"> 
   
	<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
	
	<script src="js/modernizr.custom.17475.js"></script>
	<script type="text/javascript">

</script>




</head>
<body>
	<video autoplay loop muted class="bgvideo" id="bgvideo">
   		<source src="video/bg1.mp4" type="video/mp4"></source>
 	 </video>
	<div class="main">
		<div class="header">
			<div class="logo">
				<div class="logo_text">
					<h1><a href="index.php">КиноМонстр</a></h1>
					<h2>Кино - наша страсть!</h2>
				</div>
			</div>
			<div class="menubar">
				<ul class="menu">
					<li><a href="index.php">Главная</a></li>
					<li><a href="films.php">Фильмы</a></li>
					<li><a href="serials.php">Сериалы</a></li>
					<li class="selected"><a href="rating.php">Рейтинг фильмов</a></li>
					<li><a href="contacts.php">Контакты</a></li>
				</ul>
			</div>
		</div>
		<ul id="carousel" class="elastislide-list">
					<li><a href="breaking.php"><img src="assets/img/breakingbad.png"	width="150" height="178" alt="image01" /></a></li>
					<li><a href="cloud.php"><img src="assets/img/cloud.png" 	width="150" height="178"alt="image02" /></a></li>
					<li><a href="dead.php"><img src="assets/img/dead.png" 	width="150" height="178"alt="image03" /></a></li>
					<li><a href="interstellar.php"><img src="assets/img/inter.png"	width="150" height="178" alt="image04" /></a></li>
					<li><a href="matrix.php"><img src="assets/img/matrix.png"	width="150" height="178" alt="image05" /></a></li>
					<li><a href="mad.php"><img src="assets/img/max.png"	width="150" height="178" alt="image06" /></a></li>
					<li><a href="silicon.php"><img src="assets/img/silicon.png"	width="150" height="178" alt="image06" /></a></li>
					<li><a href="xfiles.php"><img src="assets/img/xfiles.png"	width="150" height="178" alt="image06" /></a></li>
					<li><a href="breaking.php"><img src="assets/img/breakingbad.png"	width="150" height="178" alt="image01" /></a></li>
					<li><a href="cloud.php"><img src="assets/img/cloud.png" 	width="150" height="178"alt="image02" /></a></li>
					<li><a href="dead.php"><img src="assets/img/dead.png" 	width="150" height="178"alt="image03" /></a></li>
					<li><a href="interstellar.php"><img src="assets/img/inter.png"	width="150" height="178" alt="image04" /></a></li>
					<li><a href="matrix.php"><img src="assets/img/matrix.png"	width="150" height="178" alt="image05" /></a></li>
					<li><a href="mad.php"><img src="assets/img/max.png"	width="150" height="178" alt="image06" /></a></li>
					<li><a href="silicon.php"><img src="assets/img/silicon.png"	width="150" height="178" alt="image06" /></a></li>
					<li><a href="xfiles.php"><img src="assets/img/xfiles.png"	width="150" height="178" alt="image06" /></a></li>
				</ul>
			<div class="site_content">
				<div class="sidebar_container">
					<div class="sidebar">
						<h2>Поиск</h2>
						<form method="post" action="#" id="search_form">
							<input type="search" name="search_field" placeholder="Ваш запрос"/>
							<input type="submit" class="btn" value="найти">
						</form>
					</div>
					<div class="sidebar">
						<h2>Добро пожаловать</h2>
						<div class="user"><i><?php echo $login_session; ?></i></div>
						
							<div class="lables_passreg_text">
							  <span><a href="logout.php">Выйти</a></span>
							</div>
						</form>
					</div>
					<div class="sidebar">
						<h2>Новости</h2>
						<span>10.03.2016</span>
						<p>Трейлер к шестому сезону "Игры престолов" установил новый рекорд</p>
						<a href="http://www.kinonews.ru/news_61112/">Читать</a>
					</div>
					<div class="sidebar">
						<h2>Рейтинг фильмов</h2>
						<ul>
							<li><a href="interstellar.php">Интерстеллар</a><span class="rating_sidebar">8.6</span></li> 
							<li><a href="cloud.php">Выживший</a><span class="rating_sidebar">8.2</span></li> 
							<li><a href="mad.php">Дэдпул</a><span class="rating_sidebar">7.8</span></li> 
							<li><a href="breaking.php">Во все тяжкие</a><span class="rating_sidebar">9.5</span></li> 
						</ul>
					</div>
				</div>
				<div class="content">
				<h2>Рейтинг фильмов</h2>
					<table class="simple-little-table">
						<tr>
							<th></th>
							<th>Фильмы</th>
							<th class="center">Год</th>
							<th class="center">Рейтинг</th>
						</tr>
						<tr>
							<td class="center"><img src="assets/img/matrix.png"></td>
							<td>1. <a href="matrix.php">Зверополис</a></td>
							<td class="center">2016</td>
							<td >8.6</td>
						</tr>
						<tr>
							<td class="center"><img src="assets/img/inter.png"></td>
							<td>2. <a href="interstellar.php">Интерстеллар</a></td>
							<td class="center">2014</td>
							<td >8.6</td>
						</tr>
						<tr>
							<td class="center"><img src="assets/img/max.png"></td>
							<td>3. <a href="mad.php">Дэдпул</a></td>
							<td class="center">2016</td>
							<td>7.8</td>
						</tr>
						<tr>
							<td class="center"><img src="assets/img/cloud.png"></td>
							<td>4. <a href="cloud.php">Выживший</a></td>
							<td class="center">2014</td>
							<td>8.2</td>
						</tr>
					</table>
				</div>
			</div>
	</div>
		<div class="footer">
		<p>
			<a href="index.php">Главное </a>|
			<a href="films.php">Фильмы </a>|
			<a href="serials.php">Сериалы </a>|
			<a href="rating.php">Рейтинг фильмов </a>|
			<a href="contacts.php">Контакты </a>
		</p>

	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<script type="text/javascript" src="js/jquery.elastislide.js"></script>
	<script type="text/javascript">	
		$( '#carousel' ).elastislide();	
	</script>	
			
	
</body>
</html>