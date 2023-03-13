<?php
$trans = ($_GET["id_tran"]);
$db = new mysqli("localhost", "root", "", "monprojet");
$sql = "SELECT * FROM transactions WHERE id_trans = id_tran ";
$result = $db->query($sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mon site d'investissement en SCPI</title>
    <link href="test 2.css" rel="stylesheet">
  </head>
  <body>
    <div class="header-container">
      <header class="header">
        <div class="logo">
          <img src="./Logo-removebg-preview.png" style="width: 100px;height: 100px;">
        </div>
        <nav>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Compte</a></li>
            <li><a href="#">Deconnexion</a></li>
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
          <label for="montant_transaction">Montant de la transaction :</label>
          <input type="text" id="montant_transaction" name="montant_transaction" value="<?php echo $row['montant_transaction']; ?>"><br><br>

          <label for="parts">Parts :</label>
          <input type="text" id="parts" name="parts" value="<?php echo $row['nombredepart']; ?>"><br><br>

          <label for="email">E-mail :</label>
          <input type="text" id="email" name="email" value="<?php echo $row['emailu']; ?>"><br><br>

          <button type="submit" name="sub">Valider</button>
          <button type="submit" style="background-color:red;margin-top: 10px ">Annuler</button>
      <?php
        }
      }
      ?>
    </form>
  </div>
 </div>

  </body>
</html>