<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
      public static function createMyWarrior() {

        $Chuck = new MarvelWarrior($GLOBALS['warriorID']);
        $Chuck->SetImageUrl('http://why-ed.com/wp-content/uploads/2017/04/Chuck-Norris.jpg');

        $ChuckWeapon = new Weapon ("Chuck call your mom");
        $ChuckWeapon->SetWeapon("https://pbs.twimg.com/media/B4_zKH2IcAA_I_u.jpg");

        $Chuck->SetPower();
        $Chuck->SetWeapon($ChuckWeapon);
        $Chuck->saveNew();
      }
      public static function createOtherWarrior() {

      }
  }
