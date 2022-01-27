<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $description ?>"/> 
  <meta name="keyword" content="<?= $motCle ?>"/> 
  <title><?= $titre ?></title>
  <link rel="stylesheet" href="<?= MEDIA; ?>/css/style.css">
</head>

<body>

  <div id="site">
    <header>

      <h1>Accueil</h1>

    </header> 

    <nav>
      <ul>
<?php
        if(isset($_SESSION['pseudo'])){
?>
        <li><a href="deconnexion.html">Quitter</a></li>
        <li><a href="#">Créer</li></a>
        <li><a href="#">Modifier</li></a>
        <li><a href="#">Supprimer</li></a>
<?php
        } else {
?>
        <li><a href="accueil.html">Accueil</a></li>
        <li><a href="admin.html">Admin</a></li>
<?php
        }
?>
      </ul>
    </nav>

    <?= $contenu; ?> 

    <footer>
      <p>Je suis le footer.</p>
    </footer>


  </div>

<script src="<?= MEDIA; ?>jquery/jquery-3.6.0.min.js"></script>
<script src="<?= MEDIA; ?>jquery/controle-formulaire.js"></script>

</body>
</html>
