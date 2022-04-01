<?php

require('GarageQueries.php');
$garage_id = $_GET['garage_id'];

$class = new GarageQueries();
$class->startConnection();
$class->showGaragesCars($garage_id);
$class->cookies();

?>