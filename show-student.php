<!-- header -->
<?php 

$title = "Information de l'étudiant";
// include_once('helpers/function.php');
require_once('models/model.php');
$student = get('students');
// debugArray($students);
// Capture 
ob_start();
include('views/studentpage/show-student.php');
$content = ob_get_clean();

include("views/layout.php");





