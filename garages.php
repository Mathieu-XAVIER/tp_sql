<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE['userconnection'])){
        header('Location:index.php');
    } else{
        $user = $_COOKIE['userconnection'];
        echo '<h1>';
        echo 'bonjour'. " ".$user;
        echo '</h1>';
    }

    ?>
    <h2>Liste des garages</h2>
    <div>
        <a href="index.php">Retourner au menu</a>
        <a href="garage_add.php">Ajouter un garage</a>
    </div>
    <?php

    require ('GarageQueries.php');
    $garagesQueries = new GarageQueries();
    $garagesQueries->startConnection();
    $garagesQueries->showGarages();

    
    ?>
</body>
</html>