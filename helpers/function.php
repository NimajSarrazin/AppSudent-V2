<?php
 function debugArray($arr)
 {
    echo '<pre>';
        print_r($arr);
    echo '</pre>';
 }
?>
<!-- nettoyage des inputs -->
<?php
function cleanInput ($string)
{
    return trim(htmlspecialchars($string));
}

function errorMsg($name)
{ 
    global $error;
  if (isset($error[$name])) {
    echo $error[$name] ;
        }
        
}
// sauvegarde la valeur de l'input submit
function showInputValue($name) {
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}

// show select value
function showSelectValue($name, $value)
{
    if (!empty($_POST[$name]) && $_POST[$name] == $value) {
        echo "selected";
    }
}

// update select
function showUpdateSelectValue($item, $value)
{
    if ($item == $value) {
        echo "selected";
    }
}




// show select value
function showRadioValue($name, $value)
{
    if (!isset($_POST[$name]) && $value == 1) {
        echo "checked";
    } elseif (!isset($_POST[$name])) {
        echo "";
    } elseif ($_POST[$name] == $value) {
        echo "checked";
    }
}

function showUpdateRadioValue($item, $value)
{
    if ($item == $value) {
        echo "checked";
    }
}


?>