<?php  
session_start();

if (!$_SESSION['email']) {
	header("location:connexion");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title> creer un compte</title>
	<meta charset="utf-8">

	<link type="text/css" href="resources/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="web/css/style.css" rel="stylesheet">
		<link href="web/css/ida.css" rel="stylesheet">
<body>



  <div> <img src="web/image/Capture.JPG" alt="logos"></div>
<br> 
 
<center>
	      <h3>Accueil</h3>
           <strong> bonjour vous etes actuellement connecté en tant que <?php  echo "<h3 style ='color:blue;'>" .$_SESSION['nom'].$_SESSION['prenom'] ."<hr/></h3>"; ?></strong>
</center>

  <a href="deconnexion"><h2 style= "color: blue;"> deconnexion</h2>
     
    	
     

</body>
</html>