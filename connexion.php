	<?php 
	session_start();
	$email ="";

	if (isset($_POST['envoyer'])) {

		if (isset($_POST['email']) && isset($_POST['Passwords'])) {

			if (!empty($_POST['email'])  && !empty($_POST['Passwords']) ) {

				$email    =    $_POST['email'];
				$password = $_POST['Passwords'];


				require_once 'config.php';

				$req = $bd->prepare("SELECT * FROM compte where email = :email ");
				
				$req->execute(['email' => $email]);
				
				$result = $req->fetch();

				if($result == true){

                
					if($password == $result['passwords'] ) {

						$_SESSION['nom']    =  $result['nom'];
						$_SESSION['prenom'] =  $result['prenom'];
						$_SESSION['email']  =  $result['email'];
						$_SESSION['numero'] =  $result['numero'];
						$_SESSION['ville']  =  $result['ville'];
				///	$_SESSION['Passwords']  =  $result['Passwords'];

						header("location:accueil");
							
					}
					else{
							$erreur="Mot de passe incorrecte";
							$email=$result['email'];
					}
				}
				else{
					echo"le compte portant l'email ".$email." n'existe par";
				}
			}
			else{

			echo "adresse email ou  mot de passe incorrete ";
			}
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
         $(document).ready(function(){
          $("#mot").fadeIn('slow').delay(3000).fadeOut('slow');
					   });

          $(document).ready(function(){
          $("#mo").fadeIn('slow').delay(3000).fadeOut('slow');
					   });

    </script>
	<body>
		
	<div> <img src="web/image/Capture.JPG" alt="logos"></div>
	<div class="container">
		<div class="row" > 
			<div class="col-md-4 mx-auto" >
			<div class="card"  style="width:25rem;">
		<div class="card-body">
		
				<form   class="form-horizontal" method="POST" action="" role="form" name="mon formulaire" >
				
					<div class="page1"><h1 id="compte">Connectez-vous </h1></div><br><br>

				
					 <?php  if(isset($erreur)) {?>

						<div class="alert alert-danger text-center " id="mot" >
						<?php echo $erreur; ?>	</div>
					 <?php } ?>
						
				

					<div class="form-group">
					<label  for="email">Email</label>

					<input type="email"  class="form-control" name="email" placeholder=" exemple:nom@gmail.com"  value= "<?php  if(isset($email)) {
						echo $email;
					 } ?>"required />
					
				</div>
				<div class="form-group">
					<label for="password" >Mot de passe</label>
					<div  class="input" >
						<input type="password"  class="form-control" name="Passwords" id ="pass" placeholder="entrer votre mot de passe"  required />
						<img src="web/image/oeil.png"  id="eye" onclick="changer()">             
	               </div>
				</div>
			<div >
					<label for="name"><input type="checkbox" name="name" value="1"> Se souvenir de moi</label><br><br></div>

				<div style = " width:450px;  " >
					
					<input type="submit" value="Se Connecter" name="envoyer" class="btn btn-success  btn-block" style="width:350px;">
                 </div>
					<br>
					<a href="src/index" style="text-align:left;"> Mot de passe oublié? </a><br><br> 
				 <p  style ="text-align: center ;">Vous avez déjà Créer un compte? <a href="compte" style="text-decoration: underline;"> Créer un compte</a> </p><br>
				  
				</form>
						
                   <script>
					   e=true;
					   function changer(){
						   if (e) {
							   document.getElementById("pass").setAttribute("type","text");
							   document.getElementById("eye").src="web/image/cacher.png";
							   e=false;
							   
						   }else{
							document.getElementById("pass").setAttribute("type","password");
							   document.getElementById("eye").src="web/image/oeil.png";
							   e=true;
						   }
					   }
					</script>
					<br>
				

			</div>
			

		
		</div>	
		
		</body>
	</html>

