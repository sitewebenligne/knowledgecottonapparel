<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Stocker les informations dans un fichier texte (pour des fins éducatives uniquement)
    $file = fopen("subscribers.txt", "a");
    fwrite($file, "Prénom: " . $firstname . " Nom: " . $lastname . " Date de naissance: " . $dob . " Email: " . $email . " Mot de passe: " . $password . "\n");
    fclose($file);

    // Rediriger l'utilisateur vers une page de succès
    header("Location: success.html");
    exit();
}
?>
