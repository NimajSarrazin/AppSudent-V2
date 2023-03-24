<?php
session_start();
 $title  = "Modifer un étudiant";



ob_start();
include('views/studentpage/updateStudent.php');
 // stop la capture
$content = ob_get_clean();

// layout
require 'views/layout.php';
?>