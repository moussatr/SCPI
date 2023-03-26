<?php
$servername = "localhost"; // Nom du serveur MySQL en local
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "monprojet"; // Nom de la base de données MySQL

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification des erreurs de connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <title>Profile</title>
</head>
<body>
    <header>
        <h1>Mon profil</h1>
    </header>
    
    <section>
        <div class="photo">
            <img src="../image/Icon-profile.png"  alt="Ma photo de profil">
        </div>

        <?php
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              

                echo   "<div class='prez'>";
                echo  "<h2>Description</h2>";
                echo  "<p>Diplômé d'un master 2 Entrepreneuriat et Innovation (Programme Grande
                      Ecole EDHEC), je me tourne ensuite vers le développement informatique et les
                      thématiques liées au web comme l'optimisation du référencement (SEO).</p>";
                echo  "<a href='' >Télécharger mes documents</a>";
                echo "</div>";
                echo "<div class='contact'>";
                echo    "<h2>Informations de contact</h2>";
                echo  "<div class='contact-flex'>";
                echo   "  <p>Nom :  </p>    <p> ". $row["Nomcomplet"] . " </p> ";
                echo "</div>";
                echo "<div class='contact-flex'>";
                echo     " <p>Adresse : </p>  <p>115 Avenue des Lilas - 83000 Toulon</p>";
                echo "</div>";
                echo "<div class='contact-flex'>";
                echo      "<p>Téléphone :</p>    <p>06 36 65 65 65</p>";
                echo  "</div>";
                echo  "<div class='contact-flex'>";
                echo     "<p>Mail : </p>    <p><a href='giraud@edhec.com'>giraud@edhec.com</a></p>";
                echo "</div>";
                echo" <div class='contact-flex'>";
                echo   " <p>Statut :</p>   <p>Vendeur</p>";
                echo "</div>";
           
                echo  "</div>";
            }
          }
        ?>


        
    </section>
</body>
</html>