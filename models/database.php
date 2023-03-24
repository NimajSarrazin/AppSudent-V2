
<?php
/*
 *  Connexion a la bdd
 * 
 * 
 * 
 * 
 * 
 */ 

function pdo() {
    // Création des variables 
    $serveur = 'localhost';
    $dbname ="app_student";
    $login= "root";
    $password ="";
    
    try {
        $pdo = new PDO("mysql:host=$serveur;dbname=$dbname", $login, $password, array
        (
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
            //  recuper la datas sous forme de tableau associatif
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO ::FETCH_ASSOC,
            //  voir les erreurs
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));

        return $pdo;
        
    } catch (PDOException $e) {
        echo 'Erreur de connexion ;'. $e ->getMessage();
    }
    
}