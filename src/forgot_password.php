<?php

include('..\config.php'); 

if (isset($_POST['email']) && !empty($_POST['email'])) {


 $email = htmlspecialchars_decode($_POST['email']);
 $check = $bd->prepare('SELECT * FROM compte WHERE email= ? ');
 $check->execute(array($email));
 $data = $check->fetch();
 $row = $check->rowCount();

 if ($row) {
    
    
        $tokens      = bin2hex(random_bytes(32));
        $heure=1701822477;
        $tokens_user =date("Y-m-d H:i:s", $heure);
    
        $insert = $bd->prepare('UPDATE compte SET tokens=?, tokens_user=? WHERE email=?');
        $insert->execute(array( $tokens,$tokens_user, $email));

        $reset="http://formation.com/password_change.php?tokens= $tokens";
         $to=$email;
         $subject='reinitialiser votre mot de passe';
         $message="clique sur le lien pour reinitialiser votre mot  de passe";
         $headers="From:idamagnee@gmail.com" ."Reply-To:idamagnee@gmail.com" . "X-Mailer: PHP/" . phpversion();

         mail($to, $subject, $message,$headers);

      
       /* $link = "jetons.php?token=".$tokens;

	echo "<center><h2>pour réinitiatiser votre mot de passe, cliquer sur le :</h2> <a href='$link'>  <h2> lien</h2> </a></center> ";
        exit;*/
        header("location:password_change.php?token=".$tokens);

 }
 else{

    $error= "adresse email non valide";
    header("location: index.php?error=".$error);
 }
} 
  ?>