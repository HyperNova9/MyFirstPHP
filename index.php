<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

		

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		 <form action="admin.php" method="GET">
		<?php 
			$title = ["Статья 1", "Статья 2", "Статья 3", "Статья 4", "Статья 5"];
			$short_text = ["Доброго всем дня! Сегодня я хотел бы ознакомить вас с весьма малоизвестным проектом, название у которого Fear & Hunger. Вышла данная игра 21 мая 2017 года на сайте itchio и только 11 декабря 2018 года она добралась до площадки Steam. Что представляет эта игра из себя? Если кратко, то рпг, напоминающая по геймплею с первого взгляда все остальные игры на RPG-Maker, но с множеством деталей, красивой стилистикой, огромным количеством лора и очень высоким уровнем сложности и жестокости, плюс щепотка психологического хоррора.", "Lorem Lorem Lorem Lorem Lorem", "Lorem Lorem Lorem Lorem Lorem", "Lorem Lorem Lorem Lorem Lorem", "Lorem Lorem Lorem Lorem Lorem"];
			$img = ["img/1.webp", "img/2.jpg", "img/3.jpg", "img/4.jpg", "img/5.jpg",];
			$users = ["RedScarf", "user30", "user50", "user90", "user25",];
			$database = [
					[
						"title" => "СТРАХ И УЖАС В МИРЕ FEAR & HUNGER. ОБЗОР МАЛОИЗВЕСТНОЙ ИГРЫ, СОЗДАННОЙ НА RPG-MAKER", 
						"short_text" => "Доброго всем дня! Сегодня я хотел бы ознакомить вас с весьма малоизвестным проектом, название у которого Fear & Hunger. Вышла данная игра 21 мая 2017 года на сайте itchio и только 11 декабря 2018 года она добралась до площадки Steam. Что представляет эта игра из себя? Если кратко, то рпг, напоминающая по геймплею с первого взгляда все остальные игры на RPG-Maker, но с множеством деталей, красивой стилистикой, огромным количеством лора и очень высоким уровнем сложности и жестокости, плюс щепотка психологического хоррора.",
						"img" => "img/1.webp",
						"users" => "RedScarf",
						"icon" => "img/icon1.webp",	
					],
					[
						"title" => "ОБЗОРНОЕ МНЕНИЕ ОБ ИГРЕ THE WITCHER III: WILD HUNT", 
						"short_text" => "Наконец-то я завершил перепрохождение заключительной части игровой трилогии, о приключениях Геральта из Ривии. О первых двух частях писал ранее. Третья же, ввиду своего немалого объёма, отняла у меня несоизмеримо больше времени на вдумчивое прохождение. Но вот, настало время чиркануть парочку слов и о ней.
						Игровая трилогия о приключениях Геральта из Ривии – это отличный пример того, как студия из игры в игру растёт над собой и каждая следующая получается лучше предыдущей. Продолжит ли Cyberpunk 2077 эту славную тенденцию, мы узнаем уже совсем скоро. Если не произойдёт каких-либо эксцессов, то игра выйдет 19 ноября текущего года.",
						"img" => "img/2.jpg",
						"users" => "BalrogKolyan",
						"icon" => "img/icon2.jpg",
					],
					[
						"title" => "AMONG US — WHAT IS IT?", 
						"short_text" => " Among Us - многопользовательская онлайн-игра для вечеринок, создана студией InnerSloth (Америка). Игра разработана и издана американской игровой студией InnerSloth и выпущена 15 июня 2018 года. Тогда она вышла на мобильных платформах, чуть позже, а точнее в ноябре, вышла в Steam. Она оставалась в слепой зоне для большинства игроков мира, пока игра неожиданно не выстрелила в конце вот прошедшего лета.",
						"img" => "img/3.jpg",
						"users" => "Maslom_pomazan",
						"icon" => "img/icon3.jpg",
					],
					[
						"title" => "STAR WARS: REPUBLIC COMMANDO | КОММАНДОС ДАЛЁКОЙ-ДАЛЁКОЙ ГАЛАКТИКИ", 
						"short_text" => "Когда-то давно я обожал «Звёздные Войны», смотрел старые фильмы, смотрел новые (я имею ввиду хронологически первые три эпизода) и любил их все, хотя новые, конечно же, больше, потому что был детём малым. Но со временем я перестал фанатеть по этой франшизе и остыл к романтике рыцарства далёкого будущего в далёкой-далёкой галактике. Но до сих пор Star Wars ассоциируется у меня в первую очередь с джедаями, световыми мечами, мелким зелёным гремлином, ситхами, абсолютной властью, молниями, срывающимися с пальцев Палпатина, и лишь только после всех этих мощных ассоциаций, на задворках моих воспоминаний стройными рядами выступают отряды клонированных солдат.",
						"img" => "img/4.webp",
						"users" => "Greed Reviewer",
						"icon" => "img/icon4.webp",
					],
					[
						"title" => "SERIOUS SAM 4 ИЛИ ПОЧЕМУ ОЦЕНКА МУСОР — ОШИБКА ОБЗОРЩИКА", 
						"short_text" => "Для начала, я начну с введения, потому что некоторые люди, после видеообзора напрочь забыли, что такое Сэм, ведь никогда не проходили его на сложности выше, чем придуманной специально для журналистов. Случай из капхеда, тут как никак кстати.",
						"img" => "img/5.jpg",
						"users" => "EFFECT_PARASHI",
						"icon" => "img/icon4.jpg",

					],
					[
						"title" => $_GET["glav"], 
						"short_text" => $_GET["text"],
						"img" => $_GET["img"],
						"users" => $_GET["author"],
						"icon" => $_GET["img"],
					],
				];
		 ?>
	</form>
	</div>
	<?php
		// 1. Связаться со школой и по адресу придти
			// 1.
		// 2. Попросил прочитать журнал
		// 3. Вывод и отчитаться о своих результатах

		$connect = mysqli_connect("127.0.0.1", "root", "", "myFirstDB");

		if ($connect == false) {
			echo "Связь не установлена";
		}
		else {
			echo "Связь установлена";
		};

		$text_query = "SELECT * FROM posts";

		$query=mysqli_query($connect, $text_query); //ЭТО ЕСТЬ НАША ТАБЛИЦА ПОЛНОСТЬЮ

		if ($query == false) {
			echo "Запрос не работает";
		}
		else {
			echo "Запрос работает";
		};

		$result = $query->fetch_assoc();
		$result2 = $query->fetch_assoc();
		$result3 = $query->fetch_assoc();
		$result4 = $query->fetch_assoc();
		$result5 = $query->fetch_assoc();
		$result6 = $query->fetch_assoc();
		echo $result2["user"];
		echo $result2["title"];


	?>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<div class="row">
			<div>
				<h1 class="text-center">БЛОГ</h1> 
				
			</div>
			<div class="ml-auto">
				 <form action="auth.php" method="GET">
					<button class="btn btn-primary">Авторизироваться</button>
					
				</form>
			</div>
		</div>
		
		<hr>
		
		<h2>Добро пожаловать, господин 
		<form action="auth.php" method="GET">
		<?php
				$pass = 123123;
				if ($_GET["Pass"] <> $pass) {
					echo "Гость";
				}
				else {
					echo $_GET["Login"];
				}
		?>
		</form>
		 </h2>
		  
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
				echo "<h3 class='bg-success border border-dark'>".$result2["title"]."</h3>";
				echo "<p style='font-size:20px' class='font-weight:normal'>".$result2["text"]."</p>";
				echo "<img src='".$result2["img"]."' class='w-100'>";
				echo "<p style='font-weight:bold;margin-top:10px'><img src='".$result2["icon"]."'style='width:40px' class='rounded'>  Автор: ".$result2["user"]."</p>";
			?>
			<form action="page1.php" method="GET">
			<button class='btn btn-white text-primary mb-3 border border-primary'>Далее</button>
			</form>
			<?php 
				

				echo "<h3 class='bg-success border border-dark'>".$result3["title"]."</h3>";
				echo "<p style='font-size:20px' class='font-weight:normal'>".$result3["text"]."</p>";
				echo "<img src='".$result3["img"]."' class='w-100'>";
				echo "<p style='font-weight:bold;margin-top:10px'><img src='".$result3["icon"]."'style='width:40px' class='rounded'>  Автор: ".$result3["user"]."</p>";
				?>
				<form action="page2.php" method="GET">
				<button class='btn btn-white text-primary mb-3 border border-primary'>Далее</button>
				</form>
				<?php
				echo "<h3 class='bg-success border border-dark'>".$result4["title"]."</h3>";
				echo "<p style='font-size:20px' class='font-weight:normal'>".$result4["text"]."</p>";
				echo "<img src='".$result4["img"]."' class='w-100'>";
				echo "<p style='font-weight:bold;margin-top:10px'><img src='".$result4["icon"]."'style='width:40px' class='rounded'>  Автор: ".$result4["user"]."</p>";
				?>
				<form action="page3.php" method="GET">
				<button class='btn btn-white text-primary mb-3 border border-primary'>Далее</button>
				</form>
				<?php
				echo "<h3 class='bg-success border border-dark'>".$result5["title"]."</h3>";
				echo "<p style='font-size:20px' class='font-weight:normal'>".$result5["text"]."</p>";
				echo "<img src='".$result5["icon"]."' class='w-100'>";
				echo "<p style='font-weight:bold;margin-top:10px'><img src='".$result5["img"]."'style='width:40px' class='rounded'>  Автор: ".$result5["user"]."</p>";
				?>
				<form action="page4.php" method="GET">
				<button class='btn btn-white text-primary mb-3 border border-primary'>Далее</button>
				</form>
				<?php
				echo "<h3 class='bg-success border border-dark'>".$result6["title"]."</h3>";
				echo "<p style='font-size:20px' class='font-weight:normal'>".$result6["text"]."</p>";
				echo "<img src='".$result6["img"]."' class='w-100'>";
				echo "<p style='font-weight:bold;margin-top:10px'><img src='".$result6["icon"]."'style='width:40px' class='rounded'>  Автор: ".$result6["user"]."</p>";
	 		?>
				<form action="page5.php" method="GET">
					<button class='btn btn-white text-primary mb-3 border border-primary'>Далее</button>
				</form>
		</div>
	</div>
</body>
</html>