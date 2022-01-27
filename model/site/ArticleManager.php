<?php
namespace model\site; 
use PDO;

class ArticleManager{

  public function CreateArticle(Article $article){

  }

  public function ReadArticle($artID){

  }

  public function ReadAllArticle(){
    $cnx = $this->Connexion(); 
    $rs_readAllArticle = $cnx->prepare('SELECT * FROM article'); 
    $rs_readAllArticle->execute();

    while($data = $rs_readAllArticle->fetch(PDO::FETCH_ASSOC)){
      $article = new Article();
      $article->setTitre($data['titre']);  
      $article->setArticle($data['article']); 
      $articles[] = $article;   
    }
    return $articles; 

  }

  public function UpdateArticle(ARTICLE $article){

  }

  public function DeleteArticle(ARTICLE $article){

  }

  private function Connexion(){
    $cnx = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8',''.CNX_LOGIN.'',''.CNX_PASS.'');
    return $cnx;
  }

}