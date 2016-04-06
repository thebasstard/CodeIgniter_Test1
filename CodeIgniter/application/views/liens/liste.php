<!DOCTYPE html>
<!-- application/views/liens/liste.php -->
<html lang="fr">
	<head>
	<meta charset="utf-8">
		<title> </title>
		<link href="http://127.0.0.1/Test_Code_Igniter/CodeIgniter/bootstrap/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<h1 align="center"><strong>Liste de liens</strong></h1>
		<div class="container"
			<form class="vertical" role="form">	
				<div class="form-group" id="body">							
					<table class="table table-striped table-bordered table-hover table-responsive table-condensed" id="dataTables-example">
							<thead>
								<tr>
									<th>Titre</th>
						            <th>Description</th>
						            <th>URL</th>
						            <th>Webmaster</th>
						            <th>Thème</th>
						            <th>choix 1</th>
						            <th>choix 2</th>
						            <th>choix 3</th>
								</tr>
							</thead>
						<?php foreach ($liste->result() as $row): ?>							
							<tbody>
								<tr class="success">
									<th><?php echo $row->titre; ?></th>
									<th><?php echo $row->description; ?></th>
									<th><?php echo $row->url; ?></th>
									<th><?php echo $row->webmaster; ?></th>
									<th><?php echo $row->theme; ?></th>
													
									<th><a href="<?=site_url("liens/ajout")?>">Ajouter</a></th>
													
									<th><a href="<?=site_url("liens/modif/".$row->id)?>">Modifier</a></th>
													
									<th><a href="<?=site_url("liens/supprime/".$row->id)?>">Supprimer</a></th>
								</tr>	
							</tbody>
						<?php endforeach; ?>				
					</table>				
				</div>
			</form>
		</div>
	</body>
</html>