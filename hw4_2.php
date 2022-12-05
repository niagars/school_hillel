<?php 

$arr = ['my', 'favorit', 'film', 'is', 'Apocalypse Now', 'by', 'Francis Ford Coppola' ];


?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Home work TWO</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
 

	
	<?php 
		echo '<ul>';
		$html = '';
		foreach ($arr as $value) { 
		$html .= '<li>' . $value . '</li>';
		}
		echo $html;
		echo '</ul>';
	?>
	
	
</body>
</html>