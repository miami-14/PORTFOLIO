<?php

// Charger la fonction pour parser le YAML
require_once("../yaml/yaml.php");

// Lire le fichier YAML
$data = yaml_parse_file('accueil.yaml');

// Extraire les données
$titre = $data["titre"];
$prenom = ucfirst($data["Presentation"]["Prenom"]);
$nom = ucfirst($data["Presentation"]["Nom"]);
$accroche = $data["Presentation"]["Accroche"];
$presentation = $data["Presentation"]["Présentation"];
$photo = $data["Presentation"]["Photo"];

// Afficher les données dans une structure HTML
echo "<!DOCTYPE html>";
echo "<html lang='fr'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>$titre</title>";
echo  '<link rel="stylesheet" href="acceuil.css">';
echo "</head>";
echo "<body>";
echo "<h1>$titre</h1>";
echo "<div class='container'>";
echo "<p><strong>$prenom $nom</strong></p>";
echo "<p><em>$accroche</em></p>";
echo "<p>$presentation</p>";
echo "<img src='../../Image/$photo' alt='Photo de $prenom $nom'>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
