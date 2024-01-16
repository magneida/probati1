<?php 

//session_start();

try{

	$bd= new PDO("mysql:host=localhost;dbname=user","root","");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


   
}catch(PDOException $e)
{
	echo "erreur;",$e->getMessage();
}

 ?>