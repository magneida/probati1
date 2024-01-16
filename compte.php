<!DOCTYPE html>
<html>
<head>
	<title> creer un compte</title>
  <meta name="viewport" content="width=device-width, initialscale=1.0">
	<meta charset="utf-8">
<script src="resources/bootstrap/jquery.min.js"></script>
    <script src="resources/bootstrap/bootstrap.min.js"></script>
    <script src="resources/bootstrap/bootstrap.min.js"></script>
        <script src="resources/bootstrap/bootstrap-transition.js"></script>
        <script src="resources/bootstrap/bootstrap-alert.js"></script>
        <script src="resources/bootstrap/bootstrap-dropdown.js"></script>
        <script src="resources/bootstrap/bootstrap-scrollspy.js"></script>
        <script src="resources/bootstrap/bootstrap-tab.js"></script>
        <script src="resources/bootstrap/bootstrap-popover.js"></script>
        <script src="resources/bootstrap/jquery.bpopup.min.js"></script>
        <script src="resources/bootstrap/bootstrap-button.js"></script>
        <script src="resources/bootstrap/bootstrap-carousel.js"></script>
        <script src="resources/bootstrap/bootstrap-typeahead.js"></script>
    <script src="resources/bootstrap/datepicker/js/bootstrap-datepicker.js"></script>

  

	  <link type="text/css" href="resources/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
	  <link href="web/css/style.css" rel="stylesheet">
    <link href="web/css/ida.css" rel="stylesheet">
</head>


<body>
  
 <div> <img src="web/image/Capture.JPG" alt="logos"></div>
 <div class="container">
 	  <div class="row" >  <div class="col-md-4 mx-auto" >

 		<div class="card " style="width:30rem;">
      <div class="card-body" >  

      <form  action="ajout.php"  class="form-horizontal" method="POST" role="form" name="mon formulaire" >

        <div class="page" ><h1 id="compte">Creer un compte </h1><br><br></div>
        <script>
         $(document).ready(function(){
          $("#mot").fadeIn('slow').delay(8000).fadeOut('slow');
         
					   });

    </script>
    
       <br>
       <?php
          if (isset($_GET['id'])){ ?>
        
            <div  class="alert alert-success  alert-dismissible fade show" id="mot"  role="alert" >
            <?php echo '<span>'.$_GET['id'].'</span>';  ?>
              
            </div> 
        <?php    }  ?>  

          <br>
          
         <div class="form-group" >

          <label for="nom" > Nom </label>
          <input type="text" name="nom" value="<?php if (isset($_GET['nom'])) {
            echo $_GET['nom'];
          } ?>" placeholder="entrer votre nom"  class="form-control" required />
          

        </div>
        <div class="form-group">

          <label for="prenom" > Prenom </label>
          <input type="text"  class="form-control" value="<?php if (isset($_GET['prenom'])) {
            echo $_GET['prenom'];
          } ?>" name="prenom" placeholder="entrer votre prenom" required />

        </div>
       <div class="form-group">

          <label for="numero" > Numero de telephone </label><br>
          <?php

              if (isset($_GET['erreur'])){ ?>
                <?php echo "<span style= 'color:red;' >".$_GET['erreur']."</span>";  ?>
                  
                
              <?php    }  ?> 
          <input type="tel"  class="form-control" value="<?php if (isset($_GET['numero'])) {
            echo $_GET['numero'];
          } ?>"name="numero" placeholder="numero 670380030 " required maxlength="9" />

        </div> 
        <div class="form-group">

          <label  for="email">Email</label><br>
          <?php

              if (isset($_GET['erreur'])){ ?>
                <?php echo "<span style= 'color:red;' >".$_GET['erreur']."</span>";  ?>
                  
                
              <?php    }  ?> 
                        
          <input type="email"  class="form-control" value="<?php if (isset($_GET['email'])) {
            echo $_GET['email'];
          } ?>" name="email" placeholder="exemple.nom@gmail.com" required />
       
        </div>
       <div class="form-group">

          <label for="ville" > Ville</label>
          <input type="text"  class="form-control" value="<?php if (isset($_GET['ville'])) {
            echo $_GET['ville'];
          } ?>"name="ville" placeholder="entrer votre ville" required />
      </div>
       <div class="form-group">

          <label for="password" >Mot de passe</label>

          <div  class="input" >
            <input type="password"  class="form-control" value="<?php if (isset($_GET['passwords'])) {
            echo $_GET['passwords'];
          } ?>"name="passwords" placeholder="entrer votre mot de passe" id ="pass" required />
            <img src="web/image/oeil.png" id="eye" onclick="changer()"> 
            <div class="error"></div>
          </div>
        </div>
        <div class="form-group">
          <label  for="password1"> Confirmer votre mot de passe</label>

           <div  class="input1" >

             <input type="password"  class="form-control" value="<?php if (isset($_GET['password1'])) {
            echo $_GET['password1'];
          } ?>" name="password1" placeholder="confirmer votre mot de passe" id ="passe" required />
             <img src="web/image/oeil.png"   id="eye1" onclick="changeer()"> 
            
          </div> 
           
            <?php

          if (isset($_GET['error'])){ ?>
            <?php echo "<span style= 'color:red;' >".$_GET['error']."</span>";  ?>
              
            
        <?php    }  ?>  
          
      </div>
      <div style = "text-align: center ;">
      <br>
          <input type="submit" name="" value="Annuler"  class=" btn btn-danger ">
          <input type="submit" name="envoyer" value="Enregistrer" class="btn btn-success " onclick="checkPassword()" style = "position:relative;  left:20px;" >
      </div>
      </form><br>
      
       <p  style ="text-align: center ;">Votre compte existe déjà? <a href="connexion" style="text-decoration: underline;"> Connectez-vous</a> </p>
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
           <script>
					   e=true;
					   function changeer(){
						   if (e) {
							   document.getElementById("passe").setAttribute("type","text");
							   document.getElementById("eye1").src="web/image/cacher.png";
							   e=false;
							   
						   }else{
							document.getElementById("passe").setAttribute("type","password");
							   document.getElementById("eye1").src="web/image/oeil.png";
							   e=true;
						   }
					   }


             function passwordchek(){


              
             }
					</script>
  
    </div>
   </div>
 	</div>	
 </div>
<br><br>
  <div class="row">
 	 	<div  class="col-md-4"></div>

 	 	<div  class="col-md-4"></div>
	<div  class="col-md-4">
		<p>SAJOR COMPAGNY SARL en route pour l'innovation dans le monde numerique ...</p></div>
  </div>
 </div>
</body>
</html>