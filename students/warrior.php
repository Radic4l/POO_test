<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'Radical';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {
    public $id;
    public $name;
    public $speed;
    public $life;
    public $shield;
    public $imageUrl;
    public $weapon;

    public function __construct($newId){
        $this->id = $newId;
        $this->speed=30;
        $this->life=100;
        $this->shield=20;
    }

    public function SetWeapon($myWeapon) {
        $this->weapon = $myWeapon;
    }
    public function SetImageUrl($url){
        $this->imageUrl = $url;
    }
}

class StartrekWarrior extends Warrior {
    public $mentalPower;
    public function power(){
        return $this->mentalPower;
    }
    public function __construct($newId){
        parent::__construct($newId);
        $this->mentalPower=8;
    }
}
class MarvelWarrior extends Warrior {
    public $superPower;
    public function power(){
        return $this->superPower;
    }
    public function __construct($newId){
        parent::__construct($newId);
        $this->superPower=100;
    }
}
class PokemonWarrior extends Warrior {
    public $level;
    public function power(){
        return $this->level;
    }
    public function __construct($newId){
        parent::__construct($newId);
        $this->level=1;
    }
}
class Weapon {
    public $id;
    public $strength;
    public $imageUrl;
    public function __construct($WeaponId,$WeaponStrength){
        $this->id = $WeaponId;
        $this->strength = $WeaponStrength;
    }
    public function SetImageUrl($url){
        $this->imageUrl = $url;
    }
}
