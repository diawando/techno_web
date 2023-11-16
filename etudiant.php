<?php

  class Etudiant {
    private $nom;
    protected $prenom;
    private $age;
    public function __construct($nom, $prenom, $age){
         $this ->nom=$nom;
         $this ->prenom=$prenom;
         $this ->age=$age;
    }

    public function presentation(){
         return "je m'appelle $this->nom $this->prenom et j'ai $this->age ans"  ;
    }
    
    public function setAge($age){
          if ($age > 130){
            echo "l'age doit être inférieur à 130";
          }
          elseif($age < 0){
            echo "l'age doit être superieur à 0";
          }else{
            $this->age = $age;
          } 
    }
    
  }
                 
?>