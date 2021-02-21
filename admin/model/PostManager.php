
<?php
require_once("Manager.php");

class PostManager extends Manager
{
	function getPosts()
	{
	
		$db=$this->dbConnect();
		$posts=$db->query('SELECT id ,title,content,DATE_FORMAT(date_creation,\'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM Posts ORDER BY date_creation  desc ');

		return $posts;
	
	}

	
	function getPost($postId)
	{
		
		$db=$this->dbConnect();
		
		$req= $db->prepare('SELECT id,title,content,DATE_FORMAT(date_creation,\'%d/%m/%Y à %Hh%imin%ss\')AS date_creation_fr FROM Posts WHERE id=?');
		$req->execute(array($postId));
		$post=$req->fetch();

		return $post;

	}

	public function addPosts($title,$content)
	{
		$db =$this->dbConnect();

		$req=$db->prepare('INSERT INTO Posts(title,content,date_creation) VALUES(?,?,now());');
		$addPosts=$req->execute(array($title,$content));
		return $addPosts;


	
	}


}

