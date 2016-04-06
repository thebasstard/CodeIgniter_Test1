<!DOCTYPE html>
<html> 
	<head lang="fr">
		<meta charset="utf-8">
		<title></title>
		<link href="http://127.0.0.1/Test_Code_Igniter/CodeIgniter/bootstrap/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<h1 align="center"><strong>Formulaire d'ajout</strong></h1>
		<div class="container">
			<form class = "vertical" role="form" method="POST" action="<?=site_url("liens/script_ajout")?>">
				<div class="form-group">
					<label for="titre"><strong>Titre</strong></label>
					<input type="text" placeholder="Entrez le titre" name = "Titre" id = "Titre" class = "form-control">
				</div>
				<div class="form-group">
					<label for="description"><strong>Description</strong></label>
					<textarea placeholder="Description du site" name="Description" id ="Description" class ="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="url"><strong>URL</strong></label>
					<input type="text" placeholder="Entrez l'adresse URL du site" name="URL" id = "URL" class ="form-control">
				</div>
				<div class="form-group">
					<label class ="control-label" for="theme"><strong>Thème</strong></label>
					<select class ="form-control" name="Theme" id="Theme">
						<option value = "actualite">actualité</option>						
						<option value = "sciences">sciences</option>
						<option value = "divers">divers</option>
					</select>
				</div>
				<div>
					<label for="webmaster"><strong>Webmaster</strong></label>
					<input type="text" placeholder="Entrez une adresse e-mail" name="Webmaster" id="Webmaster" class="form-control">
				</div>
				<br />
				<div >
					<input type="submit" id="submit" class="btn btn-success" value="Valider"/>
				</div>
					<br />
					<br />
					<a href="http://dl.bienvu.net/ludod/CodeIgniter/index.php/Liens/liste">Retour à la liste</a>
				</div>
			</form>
		</div>
	</body>
</html>