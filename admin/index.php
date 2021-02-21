<?php

require("controllers/backend.php");

try{
	if (isset($_GET['action']))
	{
		$action=$_GET['action'];

			//list of post route
			if ($action=='listPostsAdmin')
			{
				listPostsAdmin();
			}

			//Route for adding post on sites
			elseif ($action=='addPosts')
			{
				addPosts();

			}

			//Route for getting new post
			elseif ($action=="getPost")
			{
				//verification for post title and post Content
				if (isset($_POST['postTitle']) AND isset($_POST['postContent']))
				{
					if (!empty($_POST['postTitle']) AND !empty($_POST['postContent']))
					{

						getPosts($_POST['postTitle'],$_POST['postContent']);
					}
					else
					{
						echo "Vous devez remplir les champs";			
					}
				}else
				{
					throw new EXCEPTION("Aucune données envoyées");
				}
			}
			//Route for update post
			elseif($action='postUpdate')
			{
				if (isset($_GET['postId']))
				{
					postUpdate();
				}else{

					throw new EXCEPTION("Id non envoyées");
				}
			}
			else{
				echo "aucune action envoyées";
			
			}
	}
	else{

		listPostsAdmin();
	}

}catch(EXCEPTION $e)
{
	die('Erreur:'.$e->getMessage());
}
