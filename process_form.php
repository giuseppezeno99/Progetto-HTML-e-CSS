<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Includi qui la logica per l'invio del messaggio all'indirizzo email desiderato

    // Esempio di invio di email
    $to = "tuaemail@example.com";
    $subject = "Nuovo messaggio da $name";
    $headers = "From: $email";
    $mailBody = "Messaggio da $name ($email):\n\n$message";

    mail($to, $subject, $mailBody, $headers);

    // Reindirizza l'utente a una pagina di conferma
    header("Location: conferma.html");
}
?>
