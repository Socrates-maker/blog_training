<?php $title='Modifier commentaire';?>

<?php ob_start();?>

<form action="index.php?action=editComment&amp;idComment=<?=$idComment?>&amp;editPostId=<?=$editPostId?>" method="post">

	<label for="editcomment">Modifier le commentaire</label>

	<textarea id="editComment" name="editComment" cols="30" rows="10"></textarea>

	<input type="submit">
</form>

<?php $content=ob_get_clean();?>
<?php require("template.php");?>

