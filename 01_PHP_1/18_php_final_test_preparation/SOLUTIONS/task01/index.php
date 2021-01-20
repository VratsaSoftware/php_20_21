<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="script.php" method="post">
		<input type="text" name="fuel" placeholder="Разход на гориво ...">
		<label> Пътна обстановка </label>
		<select name="conditions">
			<option value="snow">Снежна покривка</option>
			<option value="traffic_jam">Задръстване</option>
			<option value="complicated_row">Участък с много завои и изкачвания и спускания</option>
			<option value="highway">Магистрала </option>
		</select>
		<input type="submit" name="Calculate">
	</form>
</body>
</html>