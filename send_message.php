<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Destinataire de l'email (remplace par ton adresse email)
    $to = "baudry.timothee@gmail.com";
    $subject = "Message de $name";

    // Corps du message
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

    // Entêtes de l'email
    $headers = "From: $email";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Message envoyé avec succès !</p>";
    } else {
        echo "<p>Échec de l'envoi du message.</p>";
    }
}
?>
