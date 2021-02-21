<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0" charset="utf-8"/>
		<link rel="stylesheet" href="public/css/blog.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
			body{

				background-image: url("public/css/imageblog.jpg");
				margin: 0;
				
			}
			#navbar{
				overflow: hidden;
				position:fixed;
				top: 0;
				width: 100%;
				background-color: darkslateblue;		   
			}
			
			h3{
				background-color: darkslateblue;
			}
			
			#postItem{
				background-color: darkslateblue;
			}
		</style>
	</head>
	

	<body >
		
		<?= include("navigation.php")?>
		
		<?=$content?>

	</body>
</html>
