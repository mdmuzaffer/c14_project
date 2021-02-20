<!DOCTYPE html>
<html>
<head>
	<title><?= $page_title?></title>
</head>
<body>
<h1><?= $page_content?></h1>
<h3>Subject:</h3>
	<?php
		foreach($subjects as $sub):
			echo "<p>".$sub."</p>";
		endforeach;

	?>
</body>
</html>