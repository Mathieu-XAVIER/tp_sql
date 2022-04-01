<?php

$new_garage = [
    'garage_name' => $_POST['garage_name'],
    'city' => $_POST['city'],
    'creation_date' => $_POST['creation_date'],
    'turnover'=>$_POST['turnover']
];

require 'GarageQueries.php';
    $GarageQueries = new GarageQueries();
    $GarageQueries->startConnection();
    $succes = $GarageQueries->addGarage($new_garage);

if ($succes == false){
    echo "<script>alert(\"Échec !\")</script>";
} else {
    header('Location:garages.php?ajout=réussi');
}

var_dump($new_garage);
?>