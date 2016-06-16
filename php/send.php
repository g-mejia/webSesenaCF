<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'alvaro.glez.mej@hotmail.com';
$message = 'FROM: ' . $name . ' Email: ' . $email . ' -->Message: ' . $message;
$headers = 'From: adsesenacf@gmail.com' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
    $successContact = 'El correo electronico es correcto';
    header("Location: ../contact.php?successContact=$successContact");
} else {
    $errorContact = 'El correo electronico es incorrecto';
    header("Location: ../contact.php?errorContact=$errorContact");
}

?>