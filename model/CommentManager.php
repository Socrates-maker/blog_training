
<?php
require_once("Manager.php");

class CommentManager extends Manager
{

	function getComments($postId)
	{
		
		$db=$this->dbConnect();
		$comments=$db->prepare('SELECT id, post_id,author,comment,DATE_FORMAT(comment_date,\'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id=? ORDER BY comment_date DESC');
		$comments->execute(array($postId));
		return $comments;
	}


	function postComment($postId,$author,$comment)
	{

		$db=$this->dbConnect();
		
		$comments=$db->prepare("INSERT INTO comments(post_id,author,comment,comment_date) VALUES(?,?,?,now())");
		$affectedLines=$comments->execute(array($postId,$author,$comment));
		return $affectedLines;
	
	}


	function editComment($comment,$idComment)
	{
		$db=$this->dbConnect();

		$comments=$db->prepare("UPDATE  comments SET comment=? WHERE id=?");
		$editComment=$comments->execute(array($comment,$idComment));
		
		return $editComment;
	}
}
