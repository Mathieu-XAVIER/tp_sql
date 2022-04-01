<h1>Ajouter un garage</h1>
<form method="POST" action="form.php">
    <label for="garage_name">Nom du garage</label>
    <input id="garage_name" name="garage_name" />

    <label for="city">Ville</label>
    <input id="city" name="city" />

    <label for="creation_date">Date de création</label>
    <input type="date" id="creation_date" name="creation_date"/>
    
    <label for="turnover">Chiffre d'affaire annuel</label>
    <input type="number" id="turnover" name="turnover"/>
    
    <button type="submit">Envoyer</button>
    
 </form> 

<?php
require 'GarageQueries.php';
$garagesQueries = new GarageQueries();
$garagesQueries->startConnection();
$garagesQueries->cookies();
?>