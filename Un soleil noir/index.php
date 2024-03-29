<?php session_start(); ob_start();?>
<!DOCTYPE html>
<style>
  * {
  box-sizing: border-box;
  }
  body {
  font-family: Roboto, Helvetica, sans-serif;
  }
  /* Fixez le bouton sur le côté gauche de la page the button on the left side of the page */
  .open-btn {
  display: flex;
  justify-content: center;
  }
  /* Stylez et fixez le bouton sur la page */
  .open-button {
  background-color: #1c87c9;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  }
  /* Positionnez la forme Popup */
  .login-popup {
  position: relative;
  text-align: center;
  width: 100%;
  }
  /* Masquez la forme Popup */
  .form-popup {
  display: none;
  position: fixed;
  left: 50%;
  top:50%;
  transform: translate(-50%,-5%);
  border: 2px solid #666;
  z-index: 9;
  }
  /* Styles pour le conteneur de la forme */
  .form-container {
  max-width: 300px;
  padding: 20px;
  background-color: #fff;
  }
  /* Largeur complète pour les champs de saisie */
  .form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: none;
  background: #eee;
  }
  /* Quand les entrées sont concentrées, faites quelque chose */
  .form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  }
  /* Stylez le bouton de connexion */
  .form-container .btn {
  background-color: #8ebf42;
  color: #fff;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  }
  /* Stylez le bouton pour annuler */
  .form-container .cancel {
  background-color: #cc0000;
  }
  /* Planez les effets pour les boutons */
  .form-container .btn:hover, .open-button:hover {
  opacity: 1;
  }
</style>
</head>
<div class="login-popup">
  <div class="form-popup" id="popupForm">
    <form action="index.php" class="form-container" method="post">
      <label for="name">
      <strong>Votre prénom : <br>(si vous êtes un homme <br> changez de sexe et mettez un prénom féminin merci !)</strong> <br>
      </label>
      <input type="text" name="prénom" placeholder="Votre prénom" name="prénom" required>
      <button type="submit" name="valider" class="btn">Connecter</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
    </form>
  </div>
</div>
<?php if (isset($_POST['valider'])) {
  $_SESSION['Prénom'] = $_POST['prénom'];
  if ($_SESSION['Prénom']=="Margaux"||$_SESSION['Prénom']=="margaux") {
      header('Location:pages/pageMargaux.php');
  }
  else {
      header('Location:pages/page0.php');
  }
}
?>
<script>
  function openForm() {
    document.getElementById("popupForm").style.display="block";
  }
  function closeForm() {
    document.getElementById("popupForm").style.display="none";
  }
</script>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="couverture">
     <center><img class="couverture" src="./Images/couverture.png" alt="" onclick="openForm()"></center>
  </body>
</html>
