<?php
$message = "Bienvenue sur notre site sécurisé. Veuillez entrer votre mot de passe pour accéder à votre compte.";
$alert_type = "success";

if ( isset( $_GET['submit'] ) ) {
  $password = $_GET['password'];
  if (strlen($password) < 8) {
    $message = "Le mot de passe doit comporter au moins 8 caractères.";
    $alert_type = "danger";
} elseif (!preg_match('/[A-Z]/', $password)) {
    $message = "Le mot de passe doit comporter au moins une majuscule.";
    $alert_type = "danger";
} elseif (!preg_match('/[a-z]/', $password)) {
    $message = "Le mot de passe doit comporter au moins une minuscule.";
    $alert_type = "danger";
} elseif (!preg_match('/[0-9]/', $password)) {
    $message = "Le mot de passe doit comporter au moins un chiffre.";
    $alert_type = "danger";
} else {
    $message = "Le mot de passe est valide.";
    $alert_type = "success";
}
// echo '<h3>Informations récupérées en utilisant GET</h3>';
// echo 'MDP : '. $password;
// exit;
}



?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Condition - Mot de passe</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center">Condition - Mot de passe - PHP</h1>

    <div align="center">
    <form>
    <label for="pass">Votre mot de passe :</label>
    <input type="password" id="pass" name="password" required>

    <input align="center" type="submit" name="submit" value="Envoyez">
    </div>
    <div class="alert alert-<?= $alert_type ?>" role="alert">
      <?= $message ?>
    </div>
  </form>



  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>