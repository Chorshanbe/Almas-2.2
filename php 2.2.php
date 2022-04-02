<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Введите дату от 1 до 12</h1>
	<form method="POST">
		<input type="number" name="month">
		<input type="submit" name="Применить">
</form>
	<?php
	$month=$_POST["month"];
	$nonResult = "Введите число от 1 до 12";
	if($month>=1 and $month<=12){
		if ($month>=1 and $month<=2){
		echo "Зима";
	}
	else if($month>=3 and $month<=5){
		echo"Весна";
	}
	else if($month>=6 and $month<=8){
		echo"Лето";
	}
	else if($month>=9 and $month<=11){
		echo"Осень";
	}
	else if($month=12){
		echo"Зима";
	}
}
else{
	echo $nonResult;
}
?>
</body>
</html>