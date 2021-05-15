<?php

require_once ("Model.php"); 

class ModelEtudiant extends Model{

  private $IDE ;
  private $nom;
  private $prenom;
  private $adr_mail;
  private $mdp;
  private $ville;
  private $univer;
  private $genre;
  protected static $table = 'etudiant';
  protected static $primary = ' IDE ';
   
  public function __construct($IDE = NULL, $nom = NULL, $prenom = NULL, 
    $adr_mail = NULL, $mdp = NULL, $ville = NULL, $univer = NULL, $genre = NULL  ) {
    if (!is_null($IDA) && !is_null($nom) && !is_null($prenom) && !is_null($adr_mail) && !is_null($mdp) && !is_null($ville)) {
      $this->IDE = $IDE;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->adr_mail = $adr_mail;
      $this->mdp = $mdp;
      $this->ville = $ville;
      $this->univer = $univer ;
      $this->genre = $genre ; 
     }
  } 
 public function getIDE() {
       return $this->IDE;  
  }
 public function getNom() {
       return $this->nom;  
  }
  public function getPrenom() {
       return $this->prenom;  
  }
  public function getadr_mail() {
       return $this->adr_mail;  
  }
  public function getmdp() {
       return $this->mdp;  
  }
  public function getville() {
       return $this->ville;  
  }
  public function getuniver() {
       return $this->univer;  
  }
  public function getgenre() {
       return $this->genre;  
  }
  
}
?>