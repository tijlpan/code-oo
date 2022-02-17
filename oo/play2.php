<?php

class Ship
{
    public $name;
    public $weaponPower = 0;
    public $jediFactor = 0;
    public $strength = 0;

    public function getNameAndSpecs()
    {
        return sprintf(
            '%s: (w:%s, j:%s, s:%s)',
            $this->name,
            $this->weaponPower,
            $this->jediFactor,
            $this->strength
        );
    }
}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->strength = 10;

echo 'Ship name: '.$myShip->name;
echo '<hr>';
echo $myShip->getName();
echo $myShip->getNameAndSpecs();




