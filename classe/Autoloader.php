<?php 

class Autoloader{
  public static function autoload(){
    /////*** Autoloader :  ***/////
    spl_autoload_register(function($class){
      $chemin = str_replace('\\', '/', $class); 
      require_once($chemin.'.php');
    });

    if(isset($_GET['page'])) {

      /////*** Déclaration des paramètres de la classe Rooter :  ***///// 
        switch($_GET['page']){
          case 'accueil':
            $namespace = 'controller\site\Accueil';
            $methode = 'afficherAccueil';
            break;
          case 'admin': 
            $namespace = 'controller\admin\Admin';  
            $methode = 'voirAdmin';
            break;
          case 'deconnexion':
            $namespace = 'controller\admin\Admin';  
            $methode = 'seDeconnecter';
            break; 
        }
      
      /////*** Instanciation de la classe Rooter :  ***///// 
        $rooter = new classe\Rooter($namespace, $methode);
      } else {
        $rooter = new classe\Rooter('controller\site\Accueil', 'afficherAccueil');
      }
      
      $rooter->chooseController();

  }
}