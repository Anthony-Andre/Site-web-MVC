
<article>
   <h1>Admin</h1>
   <div class="box">
   <?= $message ?> 
   <form action="" method="post">
      <p><input id="pseudo" type="text" name="pseudo" placeholder="Votre Pseudo"></p>
      <span class="erreurPseudo"></span>
      <p><input id="password" type="password" name="password" placeholder="Votre Mot de Passe"></p>
      <span class="erreurPassword"></span>
      <p><input id="soumission" type="submit" value="Entrer"></p>

   </form>
   </div>
</article>