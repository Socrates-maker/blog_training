<?php 
$title='Ajout d\'articles';
ob_start();
include ('navigation.php');
?>


<h1>Ajouter un article</h1>

	<form action='index.php?action=getPost' method='POST'>
		<div class='form-group'>
			<label for="title">Titre de l'article</label>
			<input type="text" name='postTitle' class='form-control'>
		</div>

		<div class='form-group'>
			<label for="content">Contenu de l'article</label>
			<textarea  name="postContent" cols="30" rows="10" class='form-control'></textarea>
		</div>
		<div>
			<button type="submit" class=" btn-primary">publier</button>
		</div>
	</form>


<?php
$content=ob_get_clean();

require('template.php')?>
