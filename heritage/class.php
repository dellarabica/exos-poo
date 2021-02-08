<?php
Class Race{
    private $_race;

    public function setRace($rc){
        $this->_race = $rc;
    }

    public function getRace(){
        return $this->_race;
    }
}

Class Humain extends Race{
    public function __construct(){
        $this->setRace('Humain');
    }

    public function setRace($rc){
        return parent::setRace($rc);
    }

}

Class Mage extends Humain{
    public function __construct(){
        $this->setRace('Mage');
    }

    public function setRace($rc){
        return parent::setRace($rc);
    }

}

Class Orc extends Race{
    public function __construct(){
        $this->setRace('Orc');
    }

    public function setRace($rc){
        return parent::setRace($rc);
    }
}
?>