<?php
session_start();
 $title  =" Ajout d'un étudiant";

// layout
ob_start();
include('views/studentpage/addstudent.php');

$content = ob_get_clean();

require 'views/layout.php';
?>
