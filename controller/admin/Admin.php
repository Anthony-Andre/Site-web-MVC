<?php 
namespace controller\admin;
use classe;
use model\admin as ma; 

class Admin{
  public function voirAdmin(){
    // include(VIEW.'/admin/admin.php'); 
    if((empty($_POST['pseudo'])) || (empty($_POST['password'])) ){
    $manager = new ma\MembreManager(); 
    $message = $manager->getMsg();
    $view = new classe\View('admin','admin', 'Admin', 'Je suis la description de l\'admin', 'clé1, clé2');
    $view->afficherVue(array('message'=>$message));
   } else {
    
    $manager = new ma\MembreManager(); 
    $membre = $manager->ReadMembre($_POST['pseudo'], $_POST['password']); 

    if(($membre->getPseudo() == $_POST['pseudo']) AND ($membre->getPassword() == $_POST['password'])){
    $_SESSION['pseudo'] = $_POST['pseudo'];   
    $view = new classe\View('admin','admin-acces', 'Zone Administrateur', 'Je suis la description de la zone admin', 'clé zone admin 1, clé zone admin 2');
    $view->afficherVue(array('pseudo' => $_SESSION['pseudo'] ));
    } else {
      $manager = new ma\MembreManager(); 
      $message = $manager->getMsgErreur();

      $view = new classe\View('admin','admin', 'Admin', 'Je suis la description de l\'admin', 'clé1, clé2');
      $view->afficherVue(array('message'=>$message));
    }
   }
  }

  public function seDeconnecter(){
    $view = new classe\View('admin','deconnexion', 'Se déconnecter', 'Déconnexion de la zone administrateur', 'clé déco 1, clé déco 2');
    $view->afficherVue();

  }

}
