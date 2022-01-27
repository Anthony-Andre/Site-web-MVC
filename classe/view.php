<?php
namespace classe;

class View{
  private $dossier;
  private $fichier;
  private $titre; 
  private $description; 
  private $motCle; 


  public function __construct($dossier, $fichier, $titre, $description, $motCle){
    $this->dossier     = $dossier;
    $this->fichier     = $fichier; 
    $this->titre       = $titre; 
    $this->description = $description;
    $this->motCle      = $motCle; 
  }

  public function afficherVue($tableau = array()){

    extract($tableau);

    $dossier     = $this->dossier;
    $fichier     = $this->fichier;    
    $titre       = $this->titre;
    $description = $this->description;
    $motCle      = $this->motCle;
    ob_start();
    include(VIEW.'/'.$dossier.'/'.$fichier.'.php');
    $contenu = ob_get_clean();
    include(VIEW.'/_gabarit.php');
  }
}