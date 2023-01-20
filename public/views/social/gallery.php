<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Home work</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h3>GALLERY</h3> 
<form action="" method="GET">
	<div>
		<label for="name">Name:</label>
		<input type="text" name="name"><br>
	</div><br>
	<div>
		<label for="description">Description:</label>
		<input type="text" name="description"><br>
	</div><br>
	<div>
		<label for="typefile">Type file:</label>
		<input type="text" name="typefile">
	</div><br>
	<input type="submit" value="ExportDB"> <br>
</form>
<h3>Вюшка для gallery from table gallery</h3> 
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