<?php

require_once("model/PostManager.php");


function listPostsAdmin()
{

	$postManager=new PostManager();
	$posts=$postManager->getPosts();
	require('view/adminView.php');
}

function addPosts()
{

	require('view/addPostsView.php');
}

function getPosts($title,$content)
{
	$posts=new PostManager();
	$posts->addPosts($title,$content);

	if ($posts)
	{
	//	echo "artile publier";
		header("Location:index.php?action=listPostsAdmin");
	}
	else{
		echo "Article non ajoutés";
	}

}

function postUpdate()
{
die(" modification de posts");
}

