<?php 
$title='administration';?>
<?php ob_start();?>

<?php include("navigation.php");?>
<?=include('listPostView.php');?>

<?php 
$content=ob_get_clean();
require("template.php")
?>
