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
					<li class="selected"><a href="serials.php">Сериалы</a></li>
					<li><a href="rating.php">Рейтинг фильмов</a></li>
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
					    <h2>Жанры фильмов</h2>
						<ul>
							<li><a href="boevik.php">Боевик</a></li> 
							<li><a href="detektiv.php">Детектив</a></li> 
							<li><a href="drama.php">Драма</a></li> 
							<li><a href="ist.php">Исторический</a></li> 
							<li><a href="mult.php">Мультфильмы</a></li>
                            <li><a href="horror.php">Ужасы</a></li>	
                            <li><a href="comedy.php">Комедия</a></li>	
                            <li><a href="fantastika.php">Фантастика</a></li>	
                            						
						</ul>
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
					<h1>Ходячие мертвецы</h1>
					<video width="560" height="315" controls="controls"> <source src="video/dead.mp4" type='video/mp4' > </video>
					<div class="info_film_page">
						<span class="label">рейтинг:</span><span class="value"> 8.6 / 10</span>
						<span class="label">год:</span><span class="value"> с 2010</span>
						<span class="label">режиссер:</span><span class="value"> Фрэнк Дарабонт</span>
					</div>
					<hr>
					<h2>Описание сериала (6 сезон)</h2>
					<div class="description_film">
						<img src="assets/img/dead.png">
						Помощник шерифа Рик Граймс получает тяжёлое пулевое ранение во время перестрелки с преступниками, вследствие чего впадает в кому. Очнувшись в больнице, он замечает, что весь медицинский персонал отсутствует, зато в самом здании царит разруха. Постепенно он осознает, что произошла трагедия, как-то связанная с ожившими трупами. Он пытается во что бы то ни стало найти свою жену и сына, по-видимому, сумевших уцелеть, и помочь им выжить в новом опасном мире. По ходу сюжета он встречается с другими выжившими и благодаря своим лидерским способностям возглавляет борьбу за выживание.
					</div>
					<hr>
					<h2>Отзывы</h2>
					<div class="reviews">
						<div class="review_name">
							Ерболат
						</div>
						<div class="review_text">
							Отличный фильм! 3 часа пролетели незаметно
						</div>
						<div class="review_name">
							Карлыга
						</div>
						<div class="review_text">
							Грамотный фильм, актерский состав супер!
						</div>
					</div>
					<h2>Оставить отзыв</h2>
					<div class="send">
						<form method="post" action="#" id="review">
								<div class="user1"><i><?php echo $login_session , ':'; ?></i></div>							<textarea name="review_text"></textarea>
							<input type="submit" value="Отправить">
						</form>
					</div>
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