<?php

try{
    $connexion = new PDO('mysql:host=localhost;dbname=stock_manage', 'root', '');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $connexion;
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
