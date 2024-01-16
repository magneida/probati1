<?php


require_once 'config.php';
  
 if (isset($_POST['envoyer'])) {

    $nom       =    $_POST['nom'];
    $prenom    =    $_POST['prenom'];
    $numero    =    $_POST['numero'];
    $email     =    $_POST['email'];
    $ville     =    $_POST['ville'];
    $passwords =    $_POST['passwords'];
    $password1 =    $_POST['password1'];

    $req= $bd->prepare("SELECT * FROM compte WHERE  numero= ? AND email=?" );
    $req->execute([ $numero, $email]);
				$result = $req->fetch();
        if($result){

         $erreur= "l'e-mail ou le numero de telephone est déjà utlisé. ";
          header("location:compte?erreur=".$erreur.' &nom='. $nom .' &prenom=' . $prenom .' &numero= '. $numero . '&email='. $email . '&ville=' . $ville . '&passwords=' . $passwords.'&password1=' . $password1);
        }
        else{ 
   
          if ($passwords != $password1 ) {  
            
            
            $error= "mot passe de confirmation incorrect! ";

            header("location:compte?error=" . $error .' &nom='. $nom .' &prenom=' . $prenom .' &numero= '. $numero . '&email='. $email . '&ville=' . $ville . '&passwords=' . $passwords.'&password1=' . $password1);
          } 
          else{ 
            
        // $passwords=PASSWORD_HASH( $passwords,PASSWORD_DEFAULT);

            $query ="INSERT INTO `compte`(`nom`, `prenom`, `numero`, `email`, `ville`, `Passwords`) 
                  VALUES(:nom, :prenom, :numero, :email, :ville,  :passwords)"; 

            $stm = $bd->prepare($query);
                  

              $stm->bindParam(':nom',       $nom);
              $stm->bindParam(':prenom',    $prenom);
              $stm->bindParam(':numero',    $numero);
              $stm->bindParam(':email',     $email);
              $stm->bindParam(':ville',     $ville);
              $stm->bindParam(':passwords', $passwords);
            // $stm->bindParam(':tokens',    $password1);
              
   
         $stm->execute();
         
$id="<p style = 'color: green;'><center>votre compte à été creé avec succes</p></center";
header("location:compte?id=".$id);
   
 }
 }
}
 else{

    echo "eror";
 }
 ?>