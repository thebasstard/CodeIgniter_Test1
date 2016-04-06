<!DOCTYPE html>

<html lang="fr">
	<meta charset="utf8">
	<head>	
		<link href="http://127.0.0.1/Test_Code_Igniter/CodeIgniter/bootstrap/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<h1><strong><p align = "center">Formulaire de Suppression</strong></h1>
		<div class="container">
			<form class = "vertical" role="form" method="POST" action="<?=site_url("liens/script_supprime")?>">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    				<thead>
				        <tr class="warning">
				            <th>Titre</th>
				            <th>Webmaster</th>
				            <th>Description</th>
				            <th>URL</th>
				            <th>Thème</th>
    				</thead>
    				<tbody>				      
				          <tr>
				            <td><?php echo $lien->titre; ?></td>
				            <td><?php echo $lien->webmaster; ?></td>
				            <td><?php echo $lien->description; ?></td>
				            <td><?php echo $lien->url; ?></td>
				            <td><?php echo $lien->theme; ?></td>
				          </tr>
				      	<!--<?php echo "<td><input type='hidden' name='id' value='" .$lien->id."'/><td>\n"; ?>  première manière pour sélectionner l'id-->
				      	<input type="hidden" name="id" value="<?php echo $lien->id; ?>"/> <!--deuxième manière -->  
				    </tbody>
				</table>
				<div>			
					<input type="submit" id="delete" class="btn btn-danger" value="Supprimer"/>
				</div>
					<br />
					<br />
					<a href="http://dl.bienvu.net/ludod/CodeIgniter/index.php/Liens/liste">Retour à la liste</a>
			</form>
		</div>
		<br />		
	</body>
</html>
