<?php

namespace Styde;

require '../vendor/autoload.php';


$armor = new Armors\CursedArmor();

$carlugo = new Soldier('Carlugo');

$joako = new Archer('Joako', $armor);

$carlugo->attack($joako);

$carlugo->setArmor(new Armors\CursedArmor);

$carlugo->attack($joako);

$joako->attack($carlugo);