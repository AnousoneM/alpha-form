<?php
$nameRegex = '/^[a-zA-Z_-]{3,15}$/';
$error= array();

if (isset($_POST['lastname'])) {  
    if (preg_match($nameRegex, $_POST['lastname']) == false) {
        $error['lastname'] = 'Mauvais format';
    };
    if (empty($_POST['lastname'])) {
        $error['lastname'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['firstname'])) {    
    if (!preg_match($nameRegex, $_POST['firstname'])) {
        $error['firstname'] = 'Mauvais format';
    };
    if (empty($_POST['firstname'])) {
        $error['firstname'] = 'Veuillez renseigner le champ';
    };
}