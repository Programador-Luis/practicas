<?php

namespace Styde;

require 'src/helpers.php';
require 'vendor/Armor.php';

spl_autoload_register(function ($className) {
    show("Intentando cargar $className");

    if (strpos($className, 'Styde\\') === 0) {
        $className = str_replace('Styde\\', '', $className);

        if (file_exists("src/$className.php")) {
            require "src/$className.php";
        }
    }
});

$armor = new CursedArmor();

$carlugo = new Soldier('Carlugo');

$joako = new Archer('Joako', $armor);

$carlugo->attack($joako);

$carlugo->setArmor(new CursedArmor);

$carlugo->attack($joako);

$joako->attack($carlugo);