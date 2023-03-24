<?php
 // 3- faille xss
    // //////////////////////////////
    // $id = trim(htmlspecialchars ($_POST['id']));
    $fname = trim(htmlspecialchars ($_POST['fname']));
    $lname = trim(htmlspecialchars ($_POST['lname']));
    $age = trim(htmlspecialchars ($_POST['age']));
    $date_of_birth = trim(htmlspecialchars ($_POST['date_of_birth']));
    $email = trim(htmlspecialchars ($_POST['email']));
    $status = isset($_POST ['status']) ? trim(htmlspecialchars ($_POST['status'])): ""; 
    //vérifie qu'un boutton a été checked
    $formation = isset($_POST ['formation']) ? trim(htmlspecialchars ($_POST['formation'])): "";

// validation des champs
if(empty($fname)) {
    $error['fname'] = $errorMsgRequire;
} elseif (strlen('fname') < 4 || strlen('fname') > 40) {
    $error ['fname'] = "<span class='text-red-500'>
       Le prénom doit contenir 4 à 40 caractères!</span>";
}

// last name
if(empty($lname)) {
    $error['lname'] = $errorMsgRequire;
} elseif (strlen('lname') < 4 || strlen('lname') > 40) {
    $error ['lname'] = "<span class='text-red-500'>
       Le prénom doit contenir 4 à 40 caractères!</span>";
}


// mail
if(!empty($email)) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        $error['email'] = "<span class='text-red-500'>
       Le prénom doit contenir 4 à 40 caractères!</span>";
} else {
    $error['email'] = $errorMsgRequire;
}

 // age
    // verifie que user a bien remplie le champs
   if(!empty($age)){
    // verifie si l'age est un nombre entier
    if(!is_numeric($age)) {
           $error['age'] = "<span class='text-red-500'>
       merci de rentrer un age correct</span>";
    //    verifie qu'il est majeur
    } elseif($age < 0 ) {
           $error['age'] = "<span class='text-red-500'>
      merci de rentrer votre age </span>";
    } elseif ($age < 18 ){
        $error['age'] = "<span class='text-red-500'>
        interdit au mineur
        </span>";
    }   
   } else  {
    $error['age'] = $errorMsgRequire;
   }


if(empty($formation)) {
    // $error['formation'] = $errMsgRequire;
} elseif (strlen($formation) <4 || strlen($formation) > 40) {
    $error['formation'] = "<span class='text-red-500'>
       Le prénom doit contenir 4 à 40 caractères!</span>";
}


// status
    // verifie que user a bien remplie le champs
   if(!empty($status)) {
    // verifie si le status est un nombre entier
    if(!is_numeric($status) || $status < 0 || $status > 1) {
           $error['status'] = "<span class='text-red-500'>
       merci de rentrer un status correct</span>";
    }
   } else  {
    $error['status'] = $errorMsgRequire;
}

// date_of_birth


?>