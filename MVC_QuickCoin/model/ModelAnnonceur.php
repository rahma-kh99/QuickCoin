<?php

require_once ("Model.php"); 

class ModelAnnonceur extends Model{

  private $IDA ;
  private $nom;
  private $prenom;
  private $adr_mail;
  private $mdp;
  private $ville;
  protected static $table = 'annonceur';
  protected static $primary = ' IDA ';
   
  public function __construct($IDA = NULL, $nom = NULL, $prenom = NULL, 
    $adr_mail = NULL, $mdp = NULL, $ville = NULL ) {
    if (!is_null($IDA) && !is_null($nom) && !is_null($prenom) && !is_null($adr_mail) && !is_null($mdp) && !is_null($ville)) {
      $this->IDA = $IDA;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->adr_mail = $adr_mail;
      $this->mdp = $mdp;
      $this->ville = $ville; 
     }
  } 
 public function getIDA() {
       return $this->IDA;  
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

}
?>
