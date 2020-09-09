<?php


class Scooter{
    public $kleur;
    public $merk;
    public $inhoudTank;

    function checkTank(){
        if($this->inhoudTank == 100){
            echo 'de tank is vol<BR>';
        } 
        else{
            echo 'de tank is niet vol<BR>';
        }
    }
}

$piago = new Scooter();
$piago ->merk = 'piago';
$piago ->kleur = 'rood';
$piago ->inhoudTank = '6';
$piago ->checkTank();
$peugeot = new Scooter();
$peugeot ->merk = 'peugeot';
$peugeot ->kleur = 'zwart';
$peugeot ->inhoudTank = '7';
$peugeot ->checkTank();

?>