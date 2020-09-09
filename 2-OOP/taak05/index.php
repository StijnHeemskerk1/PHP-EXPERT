<?php

class Lamp{
    public $kleur;
    public $helderheid;
    public $isAan;



    function setStatus($status){
        $this->isAan = $status;
    }




}



$woonkamerLamp = new Lamp();
$woonkamerLamp->kleur = 'geel';
$woonkamerLamp->helderheid = 'zacht';
$woonkamerLamp->isAan = 'true';
$keukenLamp = new Lamp();
$keukenLamp->kleur = 'wit';
$keukenLamp->helderheid = 'vel';
$keukenLamp->isAan = 'false';

$woonkamerLamp->setStatus('true');







?>