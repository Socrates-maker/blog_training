<?php
require_once("model/PostManager.php");
require_once("model/CommentManager.php");

/*
 * require listPostsView
 */
function listPost()
{
	$postManager=new PostManager();
	$posts=$postManager->getPosts();
	require("view/frontend/listPostsView.php");
}

function post()
{	
	
	$postManager=new PostManager();
	$commentManager=new CommentManager();

	$post=$postManager->getPost($_GET["postId"]);
	$comments=$commentManager->getComments($_GET["postId"]);
	require("view/frontend/postView.php");
}

function addComment($postId,$author,$comment)
{
	
	$commentManager=new CommentManager();
	
	$affectedLines=$commentManager->postComment($postId,$author,$comment);
	if ($affectedLines==false)
	{
		throw new
			Exception('Impossible d\'ajouter un commentaire');
	}
	else{
		header('Location:index.php?action=post&postId=' .$postId);
	
	}



}

	//display editCommentView
function editCommentView($idComment,$editPostId)
{
	$idComment=$idComment;
	$editPostId=$editPostId;
	require("view/frontend/editCommentView.php");

}

function changeComment($comment,$idComment,$editPostId)
{
	$editComment=new CommentManager();
	$changeComment=$editComment->editComment($comment,$idComment);
	

	if($changeComment==false)
	{
		throw new
			Exception('Erreur:comment non modifier');
	
	}else
	{

		header("Location:index.php?action=post&postId=".$editPostId);
	}

 
}

