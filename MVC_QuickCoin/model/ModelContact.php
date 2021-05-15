<?php

require_once ("Model.php"); 

class ModelContact extends Model{

  private $IDC;
  private $nom;
  private $prenom;
  private $mail;
  private $msg;

  protected static $table = 'contact';
  protected static $primary = ' IDC ';
   
  public function __construct($IDC = NULL, $nom = NULL, $prenom = NULL, 
    $adr_mail = NULL, $msg = NULL ) {
    if (!is_null($IDC) && !is_null($nom) && !is_null($prenom) && !is_null($mail) && !is_null($msg)) {
      $this->IDC = $IDC;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->adr_mail = $mail;
      $this->msg = $msg;
     }
  } 
 public function getIDC() {
       return $this->IDC;  
  }
 public function getNom() {
       return $this->nom;  
  }
  public function getPrenom() {
       return $this->prenom;  
  }
  public function getadr_mail() {
       return $this->mail;  
  }
  public function getmessage() {
       return $this->msg;  
  }
  
}
?>