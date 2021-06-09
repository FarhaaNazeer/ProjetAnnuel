
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CMS Restaurant</title>
</head>
    <body>
    <main>
        <section>
            <form method="post" action="">  
                <label>Adresse Email</label>
                <input type="text" id="email_address" name="email_address" required autofocus>
                            <div>
                                <label>Mot de passe</label>
                                <div>
                                    <input type="password" id="password" name="password" required>
                                </div>
                            </div>

                            <div class="">
                                <div class="">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Se souvenir de moi
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <button type="submit" name="BtnConnexion" class="btn btn-primary">
                                    Connexion
                                </button>
                                <a href="#" class="btn btn-link">
                                    Mot de passe oublié 
                                </a>
                    </form>
    </section> 
</main>



</body>
</html>



<?php 

/* 



function Connexion($host,$bdd,$login,$mdp)
{
try
{ 
    $DB = new PDO("mysql:host=".$host.";dbname=".$bdd,$login,$mdp);
}
catch(PDOException$e)
{
    echo "Connexion impossible".$e->getMessage();
}
return $DB;
}
function Deconnexion($DB)
{
    if($DB)
    $DB = NULL;

} 



session_start();
 

$message = "";
try
{
     $connect=Connexion('localhost','table_test','root','root');
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if(isset($_POST["BtnConnexion"]))
     {
          if(empty($_POST["email_adress"]) || empty($_POST["password"]))
     

          {
               $message = '<label>Remplir tous les champs !</label>';
          }
          else
          {
               $query = "SELECT * FROM table_user WHERE LOGINUTILISATEUR = :user AND MOTDEPASSEUTILISATEUR = :password";
              
               $statement = $connect->prepare($query);
       
               $statement->execute(
                    array(
                         'user'     =>     $_POST["email_adress"],
                         'password'     =>    sha1($_POST["password"]) 
                    )
               );
               $count = $statement->rowCount();
               if($count > 0)
               {
                    $_SESSION["user"] = $_POST["email_adress"];
                    header("location:Dashboard.php");
               }
               else
               {
                    $message = '<label>Erreur login ou mdp !</label>';
               }  
          }
     }
}
catch(PDOException $error)
{
     $message = $error->getMessage();
}


*/ 

?> 

