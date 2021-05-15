<?php

require_once ("Model.php"); 

class ModelOffers extends Model{

  private $IDA ;
  private $IDE;
  private $IDO;
  private $Offer;
  private $horaire;
  private $salaire;
  protected static $table = 'offres';
  protected static $primary = ' IDO ';
   
  public function __construct($IDA = NULL, $IDE = NULL, $IDO = NULL, 
    $Offer = NULL, $horaire = NULL, $salaire = NULL ) {
    if (!is_null($IDA) && !is_null($IDE) && !is_null($IDO) && !is_null($Offer) && !is_null($horaire) && !is_null($salaire)) {
      $this->IDA = $IDA;
      $this->IDE = $IDE;
      $this->IDO = $IDO;
      $this->Offer = $Offer;
      $this->horaire = $horaire;
      $this->salaire = $salaire; 
     }
  } 
 public function getIDA() {
       return $this->IDA;  
  }
 public function getIDE() {
       return $this->IDE;  
  }
  public function getIDO() {
       return $this->IDO;  
  }
  public function getoffer() {
       return $this->offer;  
  }
  public function gethoraire() {
       return $this->horaire;  
  }
  public function getsalaire() {
       return $this->salaire;  
  }

}
?>