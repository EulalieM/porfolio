<?php

require ('includes/config.php');

require ('lib/phpmailer/src/Exception.php');
require ('lib/phpmailer/src/PHPMailer.php');
require ('lib/phpmailer/src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$errors = [];

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$object = $_POST['object'];
$message = $_POST['message'];

$messages = "<br>name: " . $name . "<br>company: " . $company . "<br>email: " . $email . "<br>phone: " . $phone . "<br>object: " . $object . "<br>message: " . $message;

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
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 1;
    $mail->Host = getenv('MAILSERV');
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = getenv('MAILFROM');
    $mail->Password = getenv('PASSWORD');
    $mail->SetFrom(getenv('MAILFROM'), 'Eulalie Moreau - Portfolio');
    $mail->addAddress(getenv('MAILTO'));
    $mail->Subject = $object;
    $mail->Body = $messages;
    $mail->AltBody = $messages;
    if($mail->send()) {
        header('Location: contact');
    } else {
        echo $mail->ErrorInfo;
    }
}
