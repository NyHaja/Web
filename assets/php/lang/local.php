<?php
if(isset($_GET['lang']))    // vérifie si un paramètre de langue est présent dans l'URL
{
    $lang = $_GET['lang'];
    setcookie('lang',$lang,time() + (3600 * 24 * 30));  // crée un cookie qui expire dans 30 jours

} elseif (isset($_COOKIE['lang']))  // vérifie si le cookie de langue est déjà présent
{
    $lang = $_COOKIE['lang'];   // si oui, on utilise la langue stockée dans le cookie
}else{
    $lang = 'fr';   // si aucun cookie de langue n'est présent, on définit la langue par défaut
}

require_once (dirname(__FILE__) . '/' . $lang . '.php');    //inclure le fichier de langue correspondant
?>