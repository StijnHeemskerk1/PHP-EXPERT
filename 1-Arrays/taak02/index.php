<?php

$medewerkers = [
    [
      'voornaam' => 'Willem',
      'achternaam' => 'van Oranje',
      'functie'  => 'koning'
    ],
    [
      'voornaam' => 'Donald',
      'achternaam' => 'Trump',
      'functie'  => 'president'
    ],
    [
      'voornaam' => 'Homer',
      'achternaam' => 'Simpson',
      'functie'  => 'fabrieksarbeider'
    ],
    [
      'voornaam' => 'Johan',
      'achternaam' => 'Cruyff',
      'functie'  => 'voetbalicoon'
    ]
    ,
    [
      'voornaam' => 'Badr',
      'achternaam' => 'Hari',
      'functie'  => 'Kickboxer'
    ]
  ];


  for ($x=0; $x<=4 ;$x++) {
    echo $medewerkers[$x]['voornaam'] . " " . $medewerkers[$x]['achternaam'] . " is een " . $medewerkers[$x]['functie'] . "<BR>";
  }
?>

