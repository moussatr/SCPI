<?php
$dbPDO = new PDO('mysql:host=localhost; dbname=monprojet', 'root', "");
$dbPDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connecté";

if(isset($_POST['sub'])){

  $nom = ($_POST['nomcomplet']);
  $email =($_POST['email']);
  $md = ($_POST['motdepasse']);

  if(!empty($nom) && !empty($email) && !empty($md) )
  {
      $requete = $dbPDO->prepare('INSERT INTO utilisateurs(nomcomplet, email, motdepasse) 
      VALUES (:nomcomplet, :email, :motdepasse)');

      $requete->bindvalue(':nomcomplet', $nom);
      $requete->bindvalue(':email', $email);
      $requete->bindvalue(':motdepasse', $md);
      
     
      $result = $requete->execute();

      if(!$result){
          echo "Un probleme est sur venu";
      }
      else{
          echo "Vous etes bien enregistrer";
          
          
      }
  }
  else{
   echo "Tout les champs sont requisent !";
  }
 }


// $db  = new mysqli ("localhost","root","","monprojet");
//       if(isset($_POST['sub'])){
//         if (!empty($_POST['nomcomplet']) and !empty($_POST['email']) and !empty($_POST['mdp'])){
//           $nom = ($_POST['nomcomplet']);
//           $email =($_POST['email']);
//           $md = ($_POST['mdp']);
//           //$sq = "INSERT INTO utilisateurs VALUES ('$nom','$email','$md')";
  
//           $requete =  $db->prepare('INSERT INTO utilisateurs(nom, email, mdp) 
//             VALUES (:nom, :email, :mdp)');

//             $requete->bindvalue(':nom', $nom);
//             $requete->bindvalue(':email', $email);
//             $requete->bindvalue(':mdp', $md);
//             // $requete->bindvalue(':adresse', $adresse);
//             // $requete->bindvalue(':ville', $ville);
//             // $requete->bindvalue(':mail', $mail);
           
//             $result = $requete->execute();

//             echo "Inscris avec succes.";

//           // $res = $db->query($sq);
//           }else{
//         echo"veillez remplir";
//       }
//     }   
?>
<div class="container">
  <link href="../css/style 2.css" rel="stylesheet">
      <!--Data or Content-->
      <div class="box-1">
          <div class="content-holder">
              <h2>S'inscrire</h2>
             
              
              
          </div>
      </div>

      
      <!--Forms-->
      <div class="box-2">
          <div class="login-form-container">
           <form method="post" action="">
            <img src="../image/PHO6fec33cc-8004-11e6-9c43-d957f3b3814a-805x453-modified.webp" alt="image de fond" class="background-img">
              <h1>Inscription</h1>
              <input type="text" placeholder="Nom Complet" name="nomcomplet" class="input-field">
          <br><br>
          <input type="email" placeholder="Email" name="email" class="input-field">
          <br><br>
          <input type="password" placeholder="Mot de Passe"name="motdepasse" class="input-field">
          <br><br>
          
          <form method="post" action="">
          <button class="signup-button" type="submit"name="sub">S'inscrire</button>
          <p style="margin-top: 15px;">  <a href="Connexion.php" style="color: red;font-family: Arial, Helvetica, sans-serif;">Se connecter</a></p>
          </form>
          </div>




      </div>