<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $demande = $_POST["demande"];

    // Générer le nom du fichier
    $date = date("Y-m-d-H-i-s");
    $directory = "client/";
    $filename = $directory . $date . ".txt";

    //  données à enregistrer dans le fichier
    $data = "Nom: " . $nom . "\n";
    $data .= "Prénom: " . $prenom . "\n";
    $data .= "Email: " . $email . "\n";
    $data .= "Téléphone: " . $telephone . "\n";
    $data .= "Demande: " . $demande . "\n";

    // Enregistrement  dans un fichier
    $file = fopen($filename, "w");
    fwrite($file, $data);
    fclose($file);

    // Affiche un message de succès
    echo "Le formulaire a été soumis avec succès.";
}
?>