<html>
    <body>

<?php 

function estrazione(){
    $estrazione = [];
    for($x=1; $x<=5; $x++){
        $estrazione[$x] = rand(1,90);
    }
    return $estrazione;
}

$ruote = array (
    "Bari" => estrazione(),
    "Cagliari" => estrazione(),
    "Firenze" => estrazione(),
    "Genova" => estrazione(),
    "Milano" => estrazione(),
    "Napoli" => estrazione(),
    "Palermo" => estrazione(),
    "Roma" => estrazione(),
    "Torino" => estrazione(),
    "Venezia" => estrazione(),
    "Nazionale" => estrazione(),
    
    
);

foreach ($ruote as $key => $value){
    print ($key);
    print_r ($value);
}

