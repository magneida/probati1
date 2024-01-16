
<?php 
	include('..\config.php');

	$erreur=null;

	if (isset($_GET['token']))
	{
		$tokens=  $_GET['token'] ;
		//	$token =  $_GET['tokens'] ;
		$check= $bd->prepare("SELECT * FROM compte WHERE Tokens = ? ");
		$check->execute(array( $tokens));
		$data = $check->fetch();
		$row = $check->rowCount();
		
		if(!$row)
		{
		    $erreur = "token non valide";
		}	
        
	}
	
	
	


?>

		
		<!DOCTYPE html>
			<html>
			<head>
				<title> interface de connexion</title>
				<meta charset="utf-8">

				<link type="text/css" href="resources/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
				<script src="resources/jquery-3.7.1.js"></script>
					<link href="web/css/style.css" rel="stylesheet">
					<link href="web/css/ida.css" rel="stylesheet">

					<script>
						$(document).ready(function()
						{
							$("#mot").fadeIn('slow').delay(8000).fadeOut('slow');
						
						});

				</script>
			</head>
			<body>

			<div class="container" style=" margin-top:20vh; transform:translate(-5%);">

			<div class="row" > 
				
				<div class="col-md-4 mx-auto" >
				<div class="card"  style="width:25rem;">
				<div class="card-body">

				<?php if ($row) : ?>
				 
					<form   class="form-horizontal" method="POST" action="password_change_post.php" role="form" name="mon formulaire" >
							
						
					<div class="page1" style="display:flex;justify-content: center; align-items:center;width:350px;"><h4 id="compte">Réinitialiser le mot de passe </h4></div><br>
						
						<div class="form-group">

							<input type="hidden"  class="form-control" name="tokens" value="<?php echo  $tokens; ?>"   required />
						
						</div>  
						<div class="form-group" >
						

						<?php

								if (isset($_GET['error'])){ ?>
								<span style= 'color:red;' ><?php echo $_GET['error'];  ?></span>
									
								
						<?php    }  ?>  

							<label for="pwd">Entrer votre nouveau de passe</label>
							<div class="input">
								<input type="password"  class="form-control" name="passwords" id="pass" placeholder="nouveau mot de passe"  required />
								<img src="web/image/oeil.png" id="eye" onclick="changer()"> 
							</div>
						</div>
							
						<div class="form-group">

							<label for="pwd">Confimer votre mot de passe</label>
							<div class="input">
								<input type="password"  class="form-control" name="password1" id="passe" placeholder=" confirmer votre mot de passe"  required /><br>
								<img src="web/image/oeil.png"   id="eye1" onclick="changeer()">
							</div>
							<br>
						</div>
						<div>
							<input type="submit" value="Modifier" name="envoyer" class="btn btn-primary  btn-block" style="width:350px; font-size:1.3em;"><br>
						</div>	
						
						<p  style ="text-align: center ;">Reconnectez-vous à nouveau? <a href="../connexion.php" style="text-decoration: underline;"> Connectez-vous</a> </p>
  
				</form>
				<?php endif; ?>
				
					<?php if (  $erreur !== null): ?>	
						<div class="container" style="background-color:rgba(12, 8, 219, 0.925);
   width:200px; 
   height: 70px; 
   color:white;
   display:flex; 
   align-items:center;
   border-radius: 50px;">
        <p style=" text-align:center; font-size : 1em; "> <?php echo $erreur; ?></p></div>
        </div>
				<?php endif; ?>

			
				<script>
							e=true;
							function changer()
							{
									if (e)
										{
											document.getElementById("pass").setAttribute("type","text");
											document.getElementById("eye").src="web/image/cacher.png";
											e=false;
											
										}
										else
												{
													document.getElementById("pass").setAttribute("type","password");
													document.getElementById("eye").src="web/image/oeil.png";
													e=true;
												}
								}
						</script>
						<script>
							e=true;
							function changeer()
							{
								if (e) 
								{
									document.getElementById("passe").setAttribute("type","text");
									document.getElementById("eye1").src="web/image/cacher.png";
									e=false;
									
								}
								else
									{
									document.getElementById("passe").setAttribute("type","password");
									document.getElementById("eye1").src="web/image/oeil.png";
									e=true;
									}
							}


					


					
				
							</script>
			</div> 

					</div>
					</div>
						</div>
						</body>
			</html>
			