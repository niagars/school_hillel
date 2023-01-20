<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Users</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h3>USERS</h3> 

<form action="" method="GET">
	<div>
		<label for="email">Email:</label>
		<input type="email" name="email"><br>
	</div><br>
	<div>
		<label for="login">Login:</label>
		<input type="text" name="login"><br>
	</div><br>
	<div>
		<label for="password">Password:</label>
		<input type="password" name="password">
	</div><br>
	<div>
		<label for="phone">Phone:</label>
		<input type="text" name="phone">
	</div><br>
	<div>
		<label for="firstname">First name:</label>
		<input type="text" name="firstname">
	</div><br>
	<div>
		<label for="lastname">Last name:</label>
		<input type="text" name="lastname">
	</div><br>
	
	<input type="submit" value="ExportDB"> <br>
</form>

<h3>Вюшка для users from table users</h3> 
	<?php foreach ($test as $key => $value): ?>
	<?= $key ?>
	<?'- '?>
	<?= print_r ($value) ?>
	<br>
	<?php endforeach ?>

</body>
</html>