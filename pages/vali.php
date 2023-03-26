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
$sql = "SELECT * FROM transactions";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mon site d'investissement en SCPI</title>
    <link href="../css/test 2.css" rel="stylesheet">
    
  </head>
  <body>
    <div class="header-container">
      <header class="header">
        <div class="logo">
          <img src="../image/Logo-removebg-preview.png" style="width: 100px;height: 100px;">
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="profile.php">Compte</a></li>
            <li><a href="">Deconnexion</a></li>
          </ul>
        </nav>
      </header>
    </div>

    <div class="content-common">
      <div class="form-simulateur">
          <form method="post" action="" style="margin-top: 250px;margin-left: 100px;width: 400px;">
              <?php
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      ?>
                      <label for="id_scpi">Id :</label>
                      <a href='validation.php?ida=<?php echo $row["id_trans"]; ?>' class='blog-titre'>numero transaction : <?php echo $row["id_trans"]; ?></a>
  
                      <p class='blog-publication-date'><?php echo $row["nombredepart"]; ?></p>
                      <p class='blog-publication-date'><?php echo $row["Montant"]; ?></p>
                      <p class='blog-publication-date'><?php echo $row["numcpi"]; ?></p>
                      <?php
                  }
              }
              ?>
          </form>
      </div>
  </div>

  </body>
</html>