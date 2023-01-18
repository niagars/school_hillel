<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Home work</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h3>ABOUT</h3> 

<form action="/about" method="POST">
	<div>
		<label for="themes">Themes:</label>
		<input type="text" name="themes"><br>
	</div><br>
	<div>
		<label for="number">Number:</label>
		<input type="text" name="number"><br>
	</div><br>
	<div>
		<label for="address">Address:</label>
		<input type="text" name="address">
	</div><br>
	<div>
		<label for="delivery">Delivery:</label>
		<input type="text" name="delivery">
	</div><br>

	<input type="submit" value="ExportDB"> <br>
</form>

<h3>Вюшка для about from table about</h3> 
	<?php foreach ($test as $key => $value): ?>
	<?= $key ?>
	<?''?>
	<?= print_r ($value) ?>
	<br>
	<?php endforeach ?>

<form action="" method="GET">

</form>


</body>
</html>