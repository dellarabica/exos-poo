<?php
class Etudiant{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_promo;

    public function __construct($nom, $prenom, $age, $prom) // Constructeur demandant 2 paramètres
    {
      $this->setNom($nom); 
      $this->setPrenom($prenom); 
      $this->setAge($age); 
      $this->setProm($prom); 
    }
  

    public function getNom(){
        return $this->_nom;
    }

    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }

    public function getAge(){
        return $this->_age;
    }

    public function setAge($age){
        $this->_age = $age;
    }

    public function getProm(){
        return $this->_promo;
    }

    public function setProm($prom){
        $this->_promo = $prom;
    }
}

$stu1 = new Etudiant('Dupont', 'Jean', '25', 'L3 Médecine');

echo 'L\'étudiant se nomme ',$stu1->getPrenom(),' ',$stu1->getNom(),', il a ',$stu1->getAge(),' ans et est en ',$stu1->getProm(),' <br/>';

?>