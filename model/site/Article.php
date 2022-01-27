<?php
namespace model\site;

class Article{
  private $artID; 
  private $titre;
  private $article; 

  public function getArtID(){
    return $this->artID; 
  }

  public function getTitre(){
    return $this->titre; 
  }

  public function getArticle(){
    return $this->article; 
  }

  public function setArtID($artID){
    if($artID > 0){
    $this->artID = $artID; 
    }
  }

  public function setTitre($titre){
    if(is_string($titre)){
    $this->titre = $titre; 
    }
  }

  public function setArticle($article){
    if(is_string($article)){
    $this->article = $article; 
    }
  }

}