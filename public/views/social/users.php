<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Users</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h3>USERS</h3> 

<h3>Вюшка для users</h3> 
	<?php foreach ($test as $key => $value): ?>
	<?= $key ?>
	<?'- '?>
	<?= $value ?>
	<br>
	<?php endforeach ?>

</body>
</html>