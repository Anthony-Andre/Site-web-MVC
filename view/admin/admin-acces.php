<?php
if(isset($_SESSION['pseudo'])){
  $pseudo = $_SESSION['pseudo'];
} else{
  header('location: admin.html'); 
}
?>

<article>
  <h1>Admin</h1>
  <p>Zone Administrateur</p>
  <p><?= $pseudo ?></p>
</article>