<?php

class GarageQueries{

private $dbh;    

    function startConnection () {
    $user = 'root';
    $this->dbh = new PDO('mysql:host=localhost; dbname=tp_sql; charset=utf8', $user);
        
    try{
        $this->dbh = new PDO('mysql:host=localhost; dbname=tp_sql; charset=utf8', $user);
        //echo "<script>alert(\"Connection Ok !\")</script>";
    }catch(PDOException $ex){
        echo "<script>alert(\"Connection KO !\")</script>";
    }
    }


function getGarage(){
    $sql = "SELECT * FROM `garages`";
    $query = $this->dbh -> query($sql);
    $values = $query -> fetchAll();  
    return $values;
}

function showGarages(){
    $values = $this->getGarage();
    foreach ($values as $table) {
        $table['id'] . ' ';
        echo "<p>";
        echo $table["garage_name"] . " ";
        echo '<br>';
        echo $table["city"] . " ";
        echo $table["creation_date"] . " ";
        echo $table["turnover"] . " <a href='garages_cars.php?garage_id=". $table['id'] . "'>Voir les voitures</a>";
        echo "           <a href='garage_delete.php?garage_id=". $table['id'] . "'>Supprimer un garage</a>";
        echo "</p>";
    }
}

function showGaragesCars($garage_id){
    $sql = "SELECT color, model, price, garage_id FROM `cars` WHERE garage_id = " . $garage_id . "";
    $query = $this->dbh->query($sql);
    $values = $query->fetchAll();
    // var_dump($values);
    foreach($values as $table) {
        echo '<p>';
        echo $table['model'] . ' ';
        echo $table['color'] . ' ';
        echo $table['price'] . ' ';
        echo '</p>';
    }
}

function addGarage($new_garage){
    $sql = "INSERT INTO garages(garage_name,city,creation_date,turnover) VALUES(:garage_name, :city, :creation_date, :turnover)";
    $statement = $this->dbh->prepare($sql);
    $succeed = $statement->execute($new_garage);
    return $succeed;
}

function deleteGarage($garage_id){
    $sql = "DELETE FROM garages WHERE id=" . $garage_id . "";
    $statement = $this->dbh->prepare($sql);
    $statement->execute();
}
   
function cookies(){
    if(!isset($_COOKIE['userconnection'])){
        header('Location:index.php');
    }
}


}
?>