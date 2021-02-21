<?php $title='Les commentaires'?>

<?php ob_start();?>
<div class="container">
		<h1>Mon super blog!</h1>
		<a href="index.php?action=listPosts" class="text-white">Retour aux billets</a>

		<div class="news">
	       	<h3>
                 <?=
 htmlspecialchars($post["title"])?>
  
                        <em>
                           <?=
 htmlspecialchars($post["date_creation_fr"])?>
	        	</em>
		 </h3>	
                 <p>
                   <?=
htmlspecialchars( $post["content"])."<br>"?>
	         </p>

		</div>
</div>
<div class="container">	    
	<h2>Commentaires</h2>

	<form action="index.php?action=addComment&amp;id=<?=$post['id']?>" method="post">

            <div class="form-group">
                 <label for="author">Autheur</label>
                  <input type="text" id="author" name="author" class="form-control">

           </div>
           
           <div class="form-group">
                <label for="comment">Commentaire</label>
                <textarea id="comment" name="comment" cols="30" rows="10" class="form-control"></textarea>
           </div>
          
	    <div class="form-group">
            	<input type="submit" value="Ajouter" class="btn-primary">
	    </div>

        </form>
<?php
while ($comment=$comments->fetch())
{
?>
	<div class="container text-white">
	<p>	
		<strong><?=
		htmlspecialchars($comment["author"])?>
		</strong> le <?=
		htmlspecialchars($comment["comment_date_fr"])?>
		</p>
		<p><?=
		nl2br(htmlspecialchars($comment["comment"]))?>
		<button class="btn-success">
			 <a  style="text-decoration: none; color:black;" href="index.php?action=edit&amp;idComment=<?=$comment['id']?>&amp;editPostId=<?=$comment['post_id']?>">modifier</a>
 		</button>
		</p>
</div>
<?php

}
?>
<?php $content=ob_get_clean();?>
<?php require("template.php");?>
