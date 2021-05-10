<?php

$errors = [];

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$object = $_POST['object'];
$message = $_POST['message'];

$messages = "\nname: " . $name . "\ncompany: " . $company . "\nemail: " . $email . "\nphone: " . $phone . "\nobject: " . $object . "\nmessage: " . $message;

// VERIFICATIONS ET MESSAGES D'ERREUR

if (!isset($name) || empty($name)) {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if (!isset($email) || empty($email)) {
    $errors['email'] = "Vous n'avez pas renseigné votre email";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Votre Email est incorrect";
}
if (!isset($object) || empty($object)) {
    $errors['object'] = "Vous n'avez pas renseigné votre objet";
}
if (!isset($message) || empty($message)) {
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

// CREATION SESSION ET REDIRECTION

session_start();

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: contact');
} else {
    $_SESSION['success'] = 1;
    mail('eulaliemoreau.pro@gmail.com', $object, $messages);
    header('Location: contact');
}
