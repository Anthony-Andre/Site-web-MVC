<?php
namespace controller\site; 
use classe;
use model\site as ms; 

class Accueil{
  public function afficherAccueil(){

    $manager = new ms\ArticleManager(); 
    $articles = $manager->readAllArticle();

    // include(VIEW.'/site/accueil.php'); 
    $view = new classe\View('site', 'accueil', 'Accueil', 'Je suis la description de l\'accueil', 'clé1, clé2'); 
    $view->afficherVue(array('articles'=>$articles));
  }
}



