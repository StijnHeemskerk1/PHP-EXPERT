<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];

$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];

for ($x = 0; $x <=2; $x++){
    echo "Speelgoed " . $speelgoed[$x]['naam'] . " uit de categorie " . $speelgoed[$x]['soort'] . " kost " . $speelgoed[$x]['prijs'] . "<BR>"; 
}

echo "Speelgoed " . $games['sport']['naam'] . " van de uitgever " . $games['sport']['uitgever'] . " kost " . $games['sport']['prijs'] . "<BR>"; 

echo "Speelgoed " . $games['action']['naam'] . " van de uitgever " . $games['action']['uitgever'] . " kost " . $games['action']['prijs'] . "<BR>";

echo "Speelgoed " . $games['fps']['naam'] . " van de uitgever " . $games['fps']['uitgever'] . " kost " . $games['fps']['prijs'] . "<BR>"; 





