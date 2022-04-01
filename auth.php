<?php
    $user = $_POST['username'];
    setcookie('userconnection',$user);
    header('Location:garages.php');
?>