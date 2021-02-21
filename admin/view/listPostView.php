
<div class="container  " >
	<h1 class="text-danger">Mon super blog!</h1>
        <p>liste de tous les billets:</p>
            <?php
              while ($data=$posts->fetch()) 
	      {
             ?>
		
                 <div class="container     border-dark p-3 my-3" id="postItem" >
		     <h3 >
	               	<?= 
    htmlspecialchars($data["title"])?>
			
 <em> le <?=$data["date_creation_fr"]?></em>
		  
                     </h3>
                      <p >
			  <?=
			  nl2br( htmlspecialchars( $data["content"]))?>
                           <br/>
                          
			   <button class="btn"><em><a href="index.php?action=postUpdate&amp;postId=<?=htmlspecialchars($data['id'])?>" class="link">Modifier</a></em></button>

			 <button class="btn"><em><a href="#" class="link">Supprimer</a></em></button>

		     </p>
                 </div>
		
           <?php
           }
     $posts->closeCursor();
?>
</div>

