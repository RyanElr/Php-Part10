<?php
//Variable Gender.
$gender = htmlspecialchars($_POST['gender']);
//Déclaration des regex
//Déclaration regex numéro de téléphone
$regexPhoneNumber = '/^[0-9]{10}$/';
//Déclaration regex nom
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
//Déclaration regex date
$regexDate = '/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/';
//Déclaration regex texte
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\']+$/';
//Déclaration regex adresse
$regexAddress = '/^[A-z0-9àáâãäåçèéêëìíîïðòóôõöùúûüýÿ\- ]+$/';
//Déclaration regex nombre et lettre
$regexNumberLetter = '/^[0-9A-z]+$/';
$regexAge = '/^[0-9]{1,2}$/';
//déclaration d'un tableau d'érreur
$formError = array();
//Si LastName existe , la passer au test regex , si elle passe la stocker dans $lastName sinon c'est vide
if (isset($_POST['lastName'])) {
    //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
    $lastName = htmlspecialchars($_POST['lastName']);
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $lastName)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['lastName'] = 'Saisie invalide.';
    }
    // verifie si le champs de nom et vide
    if (empty($lastName)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['lastName'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['firstName'])) {
    $firstName = htmlspecialchars($_POST['firstName']);
    if (!preg_match($regexName, $firstName)) {
        $formError['firstName'] = 'Saisie invalide.';
    }
    if (empty($firstName)) {
        $formError['firstName'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['age'])) {
    $age = htmlspecialchars($_POST['age']);
    if (!preg_match($regexAge, $age)) {
        $formError['age'] = 'Saisie invalide.';
    }
    if (empty($age)) {
        $formError['age'] = 'Champ obligatoire.';
    }
}
 if (isset($_POST['society'])) {
    $society = htmlspecialchars($_POST['society']);
    if (!preg_match($regexText, $society)) {
        $formError['society'] = 'Saisie invalide.';
    }
    if (empty($society)) {
        $formError['society'] = 'Champ obligatoire.';
    }
    }
?>