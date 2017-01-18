<?php
class Chat
{
    public $prénom;
    public $age;
    public $couleur;
    public $sexe;
    public $race;


    public function __construct($prénom, $age, $couleur, $sexe, $race)
    {
        $this->prénom = $prénom;
        $this->age = $age;
        $this->couleur = $couleur;
        $this->sexe = $sexe;
        $this->race = $race;
    }

    public function setPrénom($prénom)
    {
         $this->$prénom = $prénom;
    }

    public function getPrénom()
    {
        return $this->prénom;
    }
    public function setAge($age)
    {
        $this->$age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setCouleur($couleur)
    {
        $this->$couleur = $couleur;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setSexe($sexe)
    {
        $this->$sexe = $sexe;
    }

    public function getSexe()
    {
        return $this->sexe;
    }
    public function setRace($race)
    {
        $this->$race = $race;
    }
    public function getRace()
    {
        return $this->race;
    }
    $data = array('prénom' => 'minou1', 'age' => '2 ans', 'couleur' => 'roux', 'sexe' => 'male', 'race' => 'siamois');
    $chat1 = new Chat($data);
    echo 'mon chat' . $chat1->getPrénom() . 'il a' . $chat1->getAge() . 'est de couleur' .$chat1->getCouleur() . 'est un' .$chat1->getSexe() . 'et est de race' .$chat1->getRace ();
    }

