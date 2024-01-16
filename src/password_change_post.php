<?php 

include('..\config.php');

if (isset($_POST['passwords']) && isset($_POST['password1']) && isset($_POST['tokens']))
{
  //if (!empty($_POST['passwords']) && !empty($_POST['password1']) && !empty($_POST['tokens'])){

    $password  = htmlspecialchars($_POST['passwords']);
    $password1 = htmlspecialchars($_POST['password1']);
    $tokens    = htmlspecialchars($_POST['tokens']);
 

    $check = $bd->prepare("SELECT * FROM compte WHERE tokens = ?" ) ;
    $check->execute(array($tokens));
    $data = $check->fetch();
    $row = $check->rowCount();
    
    if($row)
       {
         if ($password === $password1) {
          /* $cost = ['cost'=>12];
            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
 */
            $update=$bd->prepare("UPDATE compte SET passwords = ?, tokens= NULL, tokens_user= NUlL   WHERE tokens = ?");
            $update->execute(array($password,$tokens));

           /* $delete = $bd->prepare("DELETE FROM compte WHERE tokens = ?");
            $delete->execute(array($tokens));
            */
         ?>
         <div class="container" style="background-color:rgba(12, 8, 219, 0.925);;
   width:500px; 
   height: 70px; 
   color:white;
   display:flex;
   justify-content: center; 
   align-items:center;
   border-radius: 50px;
    margin-top:40vh; transform:translate(150%);">
        <p style=" text-align:center; font-size : 1em; "> <?php  echo " la mise a jour de votre mot de passe  été effectué avec succes";?></p></div>
        </div>
          <?php 
         }
         else{
            $error = "les mot de passe ne sont par identique";
            header("location:password_change.php?error=".$error);
         }
       }
       else
        {
             echo "compte mon exitant";
        }
  } /*else
  {
    echo "merci de renseigne un mot de passe";
  }*/





?>