<?php

require_once ("Model.php"); 

class ModelAdmin extends Model{

  private $mail ;
  private $mdp;
  private $nom_pre;
  private $IDAD;
  protected static $table = 'offres';
  protected static $primary = ' IDAD ';
   
  public function __construct($mail = NULL, $mdp = NULL, $nom_pre = NULL, $IDAD= NULL 
     ) {
    if (!is_null($mail) && !is_null($mdp) && !is_null($nom_pre) && !is_null($IDAD)) {
      $this->mail = $mail;
      $this->mdp = $mdp;
      $this->nom_pre  = $nom_pre ;
     $this->IDAD  = $IDAD ;
     
     }
  } 
 public function getmail() {
       return $this->mail;  
  }
 public function getmdp() {
       return $this->mdp;  
  }
 public function getnom_pre() {
       return $this->nom_pre;  
  }
 
 public function getIDAD() {
       return $this->IDAD;  
  }
}
?>