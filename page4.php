<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>

</head>
<body>
	<?php
		// 1. Связаться со школой и по адресу придти
			// 1.
		// 2. Попросил прочитать журнал
		// 3. Вывод и отчитаться о своих результатах

		$connect = mysqli_connect("127.0.0.1", "root", "", "myFirstDB");

		

		$text_query = "SELECT * FROM more";

		$query=mysqli_query($connect, $text_query); //ЭТО ЕСТЬ НАША ТАБЛИЦА ПОЛНОСТЬЮ

		

		 //тут хранится только первая строка 
		$query->fetch_assoc();
		$query->fetch_assoc();
		
		$result2 = $query->fetch_assoc(); //тут хранится только вторая строка 
	?>
	<div class="col-9 mx-auto pb-2 shadow p-3 rounded mb-5" style="margin-top: 50px; background-color: white;">
	 <?php 
				echo "<h3 class='bg-success border border-dark'>".$result2["title"]."</h3>";
				echo "<p style='font-size:20px' class='font-weight:normal'>".$result2["text"]."</p>";
				echo "<img src='".$result2["img"]."' class='w-100'>";
				echo "<p style='font-weight:bold;margin-top:10px'><img src='".$result2["icon"]."'style='width:40px' class='rounded'>  Автор: ".$result2["user"]."</p>";
	?>
</div>
</body>
</html>