<?php
session_start();
// titre de la page
$title = "Liste de nos etudiant";

require_once 'models/model.php';

//query for get all student
$students = getAll('students', 'fname');
// layout
ob_start();
include 'views/studentpage/home-student.php';
// stop la capture et stock 
$content = ob_get_clean();
require 'views/layout.php';
?>


