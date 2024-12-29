<?php
session_start();

// Charger la fonction pour parser le YAML
require_once("../yaml/yaml.php");

// Lire le fichier YAML
$data = yaml_parse_file('contact.yaml');

$message_sent = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = strip_tags($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = strip_tags($_POST['subject']);
    $message = strip_tags($_POST['message']);
    $captcha_clicked = $_POST['captcha_clicked'] ?? false;

    // Vérification du Captcha
    if (!$captcha_clicked) {
        echo "Veuillez cliquer sur la bulle pour vérifier que vous n'êtes pas un robot.";
        exit;
    }

    // Valider les champs
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Tous les champs sont obligatoires.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse e-mail invalide.";
        exit;
    }

    // Préparer l'email
    $to = $data['receiver_email'];
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $full_message = "Nouveau message depuis le formulaire de contact :\n\n";
    $full_message .= "Nom : $name\n";
    $full_message .= "E-mail : $email\n";
    $full_message .= "Objet : $subject\n\n";
    $full_message .= "Message :\n$message\n";

    // Envoyer l'email
    if (mail($to, $subject, $full_message, $headers)) {
        $message_sent = true;
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <form action="contact_form.php" method="post" class="contact-form" onsubmit="return checkCaptcha();">
        <h2>Formulaire de Contact</h2>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Objet :</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <!-- Captcha avec bulle -->
        <label>Captcha :</label>
        <div class="captcha-bubble" id="captcha-bubble" onclick="markCaptchaClicked();">
            Cliquez ici pour prouver que vous n'êtes pas un robot.
        </div>
        <input type="hidden" name="captcha_clicked" id="captcha_clicked" value="0">

        <button type="submit">Envoyer</button>
    </form>

    <!-- Bulle de confirmation -->
    <?php if ($message_sent): ?>
        <div class="confirmation-bubble" id="confirmation-bubble">
            Message envoyé avec succès !
        </div>
        <script>
            // Faire disparaître la bulle après 3 secondes
            setTimeout(() => {
                document.getElementById('confirmation-bubble').style.display = 'none';
            }, 3000);
        </script>
    <?php endif; ?>

    <script>
        function markCaptchaClicked() {
            const bubble = document.getElementById('captcha-bubble');
            const input = document.getElementById('captcha_clicked');

            bubble.classList.add('clicked');
            bubble.textContent = "Vous êtes vérifié !";
            input.value = "1";
        }

        function checkCaptcha() {
            const input = document.getElementById('captcha_clicked');
            if (input.value !== "1") {
                alert("Veuillez cliquer sur la bulle pour vérifier que vous n'êtes pas un robot.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
