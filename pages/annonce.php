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
$sql = "SELECT * FROM scpi";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/Accueil.css">
    <link rel="stylesheet" href="./styl.css">
    <title>Annonces</title>
</head>
<body>
    <section >

        <div class="contenair">
            <header class="navbar">
            
                <div class="logo">
                    <img src="../image/Logo-removebg-preview.png" width="80px"/>
                </div>
                <div class="search" >
                    <input id="searchbar" onkeyup="search_animal()" type="text"
                          name="search" placeholder="Search ...">
                          <input id="searchbar" onkeyup="search_animal()" type="text"
                          name="search" placeholder="Ville">
                </div>
                
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="achat.php">Achat</a></li>
                        <li><a href="achat.php">achats</a></li>
                        <li><a href="annonce.html">Annonces</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        
                    </ul>
                   
                </nav>
                <!-- <div class="col-2">
                <a href="Connexion.php">Se connecter</a>
                <a href="Inscription.php">S'inscrire</a>
                </div> -->

                <button class="login-button" type="submit"name="sub">Se déconnecter</button>
             
            </header>
        </section>
    <div class="contenair">
        <h2>Les annonces</h2>
        <?php
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='blog'>";
                echo "<a href='achat.php?ida=" . $row["id"] . "&nbrpart=" . $row["nombredpart"]  . "' class='blog-titre'>numero scpi : " . $row["id"] . "</a>";
            
                echo "<p class='blog-publication-date'>  " . $row["Description"] . "</p>";
                echo "<h3 class='blog-author'>Le vendeur : " . $row["nombredpart"] . "</h3>";
                echo "</div>";
            

                
            }
          }
        ?>
    </div>
       
    
</body>
</html>