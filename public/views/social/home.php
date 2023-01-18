<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Home work</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h3>HOME</h3> 

<h3>Вюшка для home from table home</h3> 
	<?php foreach ($test as $key => $value): ?>
	<?= $key ?>
	<?'- '?>
	<?= print_r ($value) ?>
	<br>
	<?php endforeach ?>


<?php /* <form action="" method="GET">
	<div>
		<label>your email</label>
		<input type="email" name="email"><br>
	</div>
	<div>
		<label>your password</label>
		<input type="password" name="password"><br>
	</div>
	<div>
		<label>currency</label>
		<label>USA</label>
		<input type="radio" name="currency" value="usa">
		<label>EURO</label>
		<input type="radio" name="currency" value="euro"><br>
	</div>
	<div>
		<label>suma</label>
		<input type="text" name="suma"><br>
	</div>
	<div>
		<label>exchange to</label>
		<label>UAH</label>
		<input type="checkbox" name="exchange[]" value="uah">
		<label>PLN</label>
		<input type="checkbox" name="exchange[]" value="pln"><br>
	</div>
	<input type="file" name="newfile"> <br>
	<input type="submit" value="Submit"> <br>
</form> */ ?>


</body>
</html>