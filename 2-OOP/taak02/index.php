<?php
    class auto{
        public $merk;
        public $kleur;
        public $type;
        public $uitvoering;
        public $brandstof;
    }

    $nieuweAuto = new auto();
    $nieuweAuto ->merk = 'Tesla';
    $nieuweAuto ->kleur = 'rood';
    $nieuweAuto ->type = 'model 3';
    $nieuweAuto ->uitvoering = 'cabrio';
    $nieuweAuto ->brandstof = 'elektrisch';
    echo $nieuweAuto->merk . "<BR>";
    echo $nieuweAuto->kleur . "<BR>";
    echo $nieuweAuto->type . "<BR>";
    echo $nieuweAuto->uitvoering . "<BR>";
    echo $nieuweAuto->brandstof . "<BR>";

    
?>