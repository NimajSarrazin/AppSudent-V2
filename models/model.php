<?php
// recupère la connexion à la base de donnée
require_once('database.php');
include_once('helpers/function.php');
// je stock la connexion dans $pdo
$pdo = pdo();

/**
 * Get all items in DB
 * 
 * 
 */
function getAll($table, $order="") 
{
    global $pdo;
    $sql = "SELECT * FROM $table";
    if($order) {
        $sql .=" ORDER BY " . " " . $order;
    }
    // Prépare ma requette 
    $query = $pdo->prepare($sql);
    //  execute la requette 
    $query->execute();
    //  Je return le resutlat de la query 
    return $query->fetchAll();
    // debugArray($students);
}
/**
 * get the id of item
 * 
 * 
 */
function getId()
{  
    // 1-récupere le bon id du student
    if(!empty($_GET['id']) && isset ($_GET['id']) && is_numeric($_GET['id']))
    {
        // on nettoie l'id
        $id = cleanInput($_GET['id']);
    } else {
        $_SESSION["error"] = "ID invalide";
        // redirection quand l'id est invalide
        header('Location: index.php');
    }
    return $id;
}

/**
 * get a single item
 * 
 * 
 */
function get($table)
{
 global $pdo;
    $id = getId();
     // faire la request
    $sql = "SELECT * FROM $table where id= :id";
    // prepare la request
    $query = $pdo->prepare($sql);
    // associe  ou lié la valeur à un parametre
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    // execute ma request
    $query->execute();
    // on stock student dans une variable

    //  fetch = va me chercher 1 élément
    $item = $query->fetch();
    // debug_array($student);
    

    // pas de student redirect
    if(!$id) {
        $_SESSION["error"] = "Cet étudiant n'existe pas";
        header('Location: index.php');
    }
    return $item;
}

function delete($table)
{ 
    global $pdo;
    $id = getId(); 
    $sql = "DELETE FROM $table where id= :id";
    // prepare la request
    $query = $pdo->prepare($sql);
    // associe  ou lié la valeur à un parametre
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    // execute ma request
    $query->execute();

    $_SESSION["success"] = "l'élément a bien été supprimé avec succés!";
    // redirect
    header('Location: index.php');
}


function update($fname, $lname, $email, $age, $formation, $date_of_birth, $status, $id)
{
    global $success;
    global $pdo;
    global $error;
    if (count($error) == 0) {
    $success == true;

// la requette
    $sql = "UPDATE `students` SET fname=:fname, lname=:lname, email=:email, age=:age, formation=:formation, date_of_birth=:date_of_birth, status=:status, updated_at=NOW() WHERE id=:id";

// prepare la requette
    $query = $pdo->prepare($sql);

// associer chaque paramètre a sa value
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->bindValue(':fname', $fname, PDO::PARAM_STR);
    $query->bindValue(':lname', $lname, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':age', $age, PDO::PARAM_INT);
    $query->bindValue(':status', $status, PDO::PARAM_STR);
    $query->bindValue(':formation', $formation, PDO::PARAM_STR);
    $query->bindValue(':date_of_birth', $date_of_birth, PDO::PARAM_STR);

    // execute le query
    $query->execute();


    // redirect
    $_SESSION['success'] = "L'Etudiant {$fname} {$lname} à été modifié";

    // redirect
    header('Location: index.php');
    }
}






function  create($fname, $lname, $email, $age, $formation, $date_of_birth, $status)
{


    global $success;
    global $pdo;
    global $error;
    if (count($error) == 0) {
    $success == true;

// la requette
    $sql = "INSERT INTO students(fname, lname, email, age, formation, created_at, date_of_birth, status ) VALUE(:fname, :lname, :email, :age, :formation, NOW(), :date_of_birth, :status)";

// prepare la requette
    $query = $pdo->prepare($sql);

// associer chaque paramètre a sa value
    $query->bindValue(':fname', $fname, PDO::PARAM_STR);
    $query->bindValue(':lname', $lname, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':age', $age, PDO::PARAM_INT);
    $query->bindValue(':status', $status, PDO::PARAM_STR);
    $query->bindValue(':formation', $formation, PDO::PARAM_STR);
    $query->bindValue(':date_of_birth', $date_of_birth, PDO::PARAM_STR);

    // execute le query
    $query->execute();


    // redirect
    $_SESSION['success'] = "L'Etudiant à été ajouté";

    // redirect
    header('Location: index.php');
    }

}
