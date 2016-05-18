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
					<div class="info_film">
						<img src="assets/img/breakingbad.png">
						«Во все тяжкие» (англ. Breaking Bad) — культовый американский телесериал, созданный Винсом Гиллиганом. Сюжет сериала повествует о докторе химических наук, который работает учителем химии в школе: узнав о том, что он болен раком лёгких, начинает заниматься изготовлением метамфетамина ради обеспечения будущего своей семьи.
						<div class="button">
							<a href="breaking.php">Смотреть</a>
						</div>
					</div>
					<div class="info_film">
						<img src="assets/img/dead.png">
						«Ходячие мертвецы» — американский постапокалиптический телесериал, разработанный Фрэнком Дарабонтом, основанный на одноименной серии комиксов, созданной Робертом Киркманом, Тони Муром русск. и Чарли Адлардом.
						<div class="button">
							<a href="dead.php">Смотреть</a>
						</div>
					</div>
					<div class="info_film">
						<img src="assets/img/xfiles.png">
						«Секре́тные материа́лы» (англ. The X-Files) — американский научно-фантастический телесериал, созданный Крисом Картером. Премьерный показ стартовал в эфире 10 сентября 1993 года и завершился через 9 лет, 19 мая 2002 года. За это время были сняты 202 серии.
						<div class="button">
							<a href="xfiles.php">Смотреть</a>
						</div>
					</div>
					<div class="info_film">
						<img src="assets/img/silicon.png">
						«Кремниевая долина» (англ. Silicon Valley) — американский комедийный сериал, созданный Дэйвом Крински, Джоном Альтшулером и Майклом Джаджем о бизнесе в кремниевой долине. Премьера телесериала состоялась 6 апреля 2014 года на телеканале HBO.
						<div class="button">
							<a href="silicon.php">Смотреть</a>
						</div>
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