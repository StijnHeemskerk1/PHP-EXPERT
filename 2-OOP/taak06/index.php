<?php
    class Robot{
        public $naam;
        public $geluid;
        public $voorstuwing;

        function getsound(){
            return $this->geluid;
        }

    }

    $wally = new Robot();
    $wally->naam = 'wal-e';
    $wally->geluid = 'beepboop';
    $wally->voorstuwing = 'rollend';
    echo "Wally = " . $wally->getSound() . "<BR>";
     
    $wolly = new Robot();
    $wolly->naam = 'wol-e';
    $wolly->geluid = 'boopbeep';
    $wolly->voorstuwing = 'lopen';
    echo "Wolly = " . $wolly->getSound();

?>