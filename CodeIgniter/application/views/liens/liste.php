<!DOCTYPE html>
<!-- application/views/liens/liste.php -->
<html lang="fr">
	<head>
	<meta charset="utf-8">
		<title> </title>
	</head>
	<body>
		<h1>Liste de liens</h1>

		<div id="body">
			<?php foreach ($liste->result() as $row): ?>
				<div>
					<?php echo $row->titre; ?>
					<?php echo $row->description; ?>
					<?php echo $row->url; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</body>
</html>