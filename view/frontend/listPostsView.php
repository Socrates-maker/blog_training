<?php $title='Mon blog'?>
<?php ob_start(); ?>

<div class="container  my-5" >
	<h1 class="text-danger">Mon super blog!</h1>
        <p>liste de tous les billets</p>
            <?php
              while ($data=$posts->fetch()) 
	      {
             ?>
		
                 <div class="container   text-white  border-dark p-3 my-3" id="postItem" >
		     <h3 >
	               	<?= 
    htmlspecialchars($data["title"])?>
			
 <em> le <?=$data["date_creation_fr"]?></em>
		  
                     </h3>
                      <p >
			  <?=
			  nl2br( htmlspecialchars( $data["content"]))?>
                           <br/>
                          
			   <em><a
    href="index.php?postId=<?=htmlspecialchars($data["id"])?>&amp;action=post">Commentaires</a> </em>
		     </p>
                 </div>
		
           <?php
           }
     $posts->closeCursor();
?>
</div>
<?php $content=ob_get_clean(); ?>
<?php require('template.php')?>

