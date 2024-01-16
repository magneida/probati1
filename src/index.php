<?php include('..\config.php');?>
<!DOCTYPE html>
	<html>
	<head>
		<title> interface de connexion</title>
		<meta charset="utf-8">

		<link type="text/css" href="resources/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="resources/jquery-3.7.1.js"></script>
			<link href="web/css/style.css" rel="stylesheet">
			<link href="web/css/ida.css" rel="stylesheet">
</head>
<body>

<div class="container" style=" margin-top:20vh; transform:translate(-5%);" >
		<div class="row"  > 
			<div class="col-md-4 mx-auto" >
			<div class="card"  style="width:25rem;">
		<div class="card-body">
		
				<form   class="form-horizontal" method="POST" action="forgot_password.php" role="form" name="mon formulaire" >
				
				
					<div class="page1" style="display:flex;justify-content: center; align-items:center; width:350px;" ><h3 id="compte">mot de passe oublié </h3></div><br>
                 
                    <div class="form-group">
					<?php

if (isset($_GET['error'])){ ?>
  <?php echo "<span style= 'color:red;' >".$_GET['error']."</span>";  ?>
	
  
<?php    }  ?>  <br>
					<label  for="email"> Entrer votre adresse email</label>

					<input type="email"  class="form-control" name="email" placeholder=" exemple:nom@gmail.com"  required /><br>
                    <input type="submit" value="Réintialiser mon mot de passe" name="envoyer" class="btn btn-primary  btn-block" style="width:350px; font-size:1.2em;">
					
				</div>
</form>
</div> 

</div>
</div>
</div>
</body>
</html>