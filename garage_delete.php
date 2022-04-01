<?php

require 'GarageQueries.php';
$garagesQueries = new GarageQueries();
$garagesQueries->startConnection();
$succes = $garagesQueries->deleteGarage($_GET['garage_id']);

if ($succes == false){
    header('Location:garages.php?supression=réussi');
} else {
    echo "<script>alert(\"Votre garage n'a pas été supprimer !\")</script>";
}


?>