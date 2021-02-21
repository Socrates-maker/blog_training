
<?php
require("controller/frontend.php");
try{
	if (isset($_GET['action']))
	{

		if($_GET['action']=='listPosts')
		{

			listPost();
		}
		else if($_GET['action']=='post')
		{

			if (isset($_GET['postId']) AND $_GET['postId']>0){
				post();
			}
			else{
				throw new
				Exception( "Erreur:aucun identifiant de biller envoyé");
		
			}
		}

		else if($_GET['action']=='addComment')
		{

			if(isset($_GET['id']) AND $_GET['id']>0)
			{
			if (!empty($_POST['author']) AND !empty($_POST['comment']))
				{
				addComment($_GET['id'],$_POST['author'],$_POST['comment']);
		
			}
			else{
				throw new
				Exception('Erreur:toutes les cases ne sont pas remplis');
			
	
			}
			
			}else
			{
				throw new
				
				Exception(' Erreur:identifiant du billet non envoyé');
			}
	
		}
		else if($_GET["action"]=='edit')
		{
			if(isset($_GET["idComment"]) AND $_GET["idComment"]>0 AND isset($_GET["editPostId"]) AND $_GET["editPostId"]>0)	
			{
				$editPostId=$_GET["editPostId"];
				$idComment=$_GET["idComment"];

				editCommentView($idComment,$editPostId);	
			}else
			{
				throw new
					Exception("iditifiant du commentaire non envoye");
			
			}

			
		}

		elseif ($_GET["action"]=='editComment')
		{
			if( isset($_GET['idComment']) AND isset($_GET['editPostId'])){	
				if (!empty($_POST['editComment']))	
				{
				
					changeComment($_POST['editComment'],$_GET['idComment'],$_GET['editPostId']);
				}else {
					throw new 
						Exception("Le commentaire n'a pas ete modifié");
				
				}
			}else{

				throw new
					Exception('Erreur: Iditifiant du billet ou du commentairenon envoyé');
				
			}
		}

		
	}
	else
	{

	listPost();
	
	}
}

catch(Exception $e){
	die("Erreur:" .$e->getMessage());

}
