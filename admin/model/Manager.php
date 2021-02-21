
<?php
class Manager
{
	function dbConnect()
	{	
			$db=new
				PDO('mysql:host=localhost; dbname=test; charset=utf8','root','socrates1234',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			return $db;

	}
}

