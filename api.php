<?php

require_once "Mailer.php";

// La valeur de $_POST['hp'] doit obligatoirement rester vide pour que le message soit envoyé.
// Il s'agit d'un test anti-spam pour piéger les robots qui rempliront le champ masqué du formulaire correspondant à $_POST['hp'].
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hp']) && empty($_POST['hp']))
{
    Mailer::sendMessage($_POST);

    echo Mailer::getResponse();
}