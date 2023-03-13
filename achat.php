<!DOCTYPE html>
<html>
<head>
  <title>Mon site d'investissement en SCPI</title>
  <link href="test.css" rel="stylesheet">
</head>
<body>
<?php
$db  = new mysqli ("localhost","root","","monprojet");
if(isset($_POST['sub'])){
  if (!empty($_POST['E-mail']) and !empty($_POST['nombre'])){
    $email = ($_POST['E-mail']);
    $nbr =($_POST['nombre']);
    $montant= 2000;
    $ncpi =($_GET['ida']);
    $sq = "INSERT into transactions (Montant,numcpi,emailu,nombredepart) VALUES ('$montant','$ncpi','$email','$nbr')";
    $res = $db->query($sq);
   
    


  }
}
?> 
   <header>
    <div class="logo">
      <img src="./Logo-removebg-preview.png" style="width: 100px;height: 100px;">
    </div>
    <nav style="margin-top: 25px;">
      <ul>
        <li><a href="">Accueil</a></li>
      </ul>
    </nav>
  </header>
  <div class="content-common">
    <div class="form-simulateur">
      <form method="post" action="" style="margin-top: 250px; margin-left: 500px; height: 340px; width: 340px;">
        <label for="nombre">Nombre de parts :</label>
        <input type="number" id="nombre" name="nombre" required>
        <label for="E-mail">E-mail :</label>
        <input type="text" id="E-mail" name="E-mail" required>
        <button type="submit" name="sub">Acheter</button>
        <button type="submit" style="margin-top: 30px;background-color: red;">Annuler</button>
      </form>
    </div>
    <section class="revenues-section" style="margin-top: 250px;margin-left: 630px;height: 100px;width: 0px;"></section>
  </div>
</body>
</html>