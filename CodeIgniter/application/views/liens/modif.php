<html>
	<head>
    	<title></title>
    	<link href="http://127.0.0.1/Test_Code_Igniter/CodeIgniter/bootstrap/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<h1 align="center"><strong>Formulaire de modification</strong></h1>
		<br />
		<div class="container">
			<form class="vertical" action="<?= site_url("liens/script_modif")?>" method="POST">				
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	    				<thead>
					        <tr class="info">
					            <th>Titre</th>
					            <th>Webmaster</th>
					            <th>Description</th>
					            <th>URL</th>
					            <th>Thème</th>
					        </tr>
	    				</thead>
	    				<tbody>					      
					          <tr>
					           	 <td>
					           	 	<input type="text" name="titre" value='<?=($lien->titre) ?>'/>
					           	 </td>
					           	<!-- <?php echo "<td><input type='text' name='webmaster' value='".$lien->webmaster."'/></td>\n"; ?>  //une autre manière d'afficher -->
					           	<td>
					           		<input type="text" name="webmaster" value="<?= ($lien->webmaster) ?>" />
					           	</td>
					            <td>
					            	<input type="text" name="description" value="<?= $lien->description ?>"/>
					            </td>
					            <td>
					            	<input type="text" name="url" value="<?= $lien->url ?>"/>
					            </td>
					            <td>
					            	<input type="text" name="theme" value="<?= $lien->theme ?>"/>
					            </td>							                       
					          </tr>					      
					    </tbody>
					</table>			
					<input type="hidden" name="id" value="<?php echo $lien->id; ?>"/> 		
					<div>					
						<input type="submit" id="update" class="btn btn-primary" value="Modifier"/>									
					</div>
						<br />
						<br />
						<a href="http://localhost/Test_Code_Igniter/CodeIgniter/index.php/liens/liste">Retour à la liste</a>
		</div>   
		</form>
	</body>
</html>