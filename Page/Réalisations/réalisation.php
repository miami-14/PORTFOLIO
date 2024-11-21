<?php

// Charger la fonction pour parser le YAML
require_once("../yaml/yaml.php");

// Lire et parser le fichier YAML
$data = yaml_parse_file('réalisation.yaml');

// Vérifier que les données sont correctement chargées
if (!$data) {
    die("Erreur : Impossible de lire le fichier YAML.");
}

// Définir les valeurs par défaut au cas où certaines informations seraient manquantes
$titre = $data['realisations']['contenus_obligatoires']['titre'] ?? "Titre par défaut";
$description = $data['realisations']['contenus_obligatoires']['description'] ?? "Description par défaut";
$illustration = $data['realisations']['contenus_obligatoires']['illustration'] ?? "Illustration par défaut";
$documents = $data['realisations']['contenus_obligatoires']['documents']['type'] ?? ["Procédures", "Captures", "Autres"];

// Afficher les réalisations pour vérifier les données

echo "<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' href='réalisation.css'>
<title>Présentation des Réalisations</title>
<link rel='stylesheet' href='style.css'>
</head>
<body>

<header>
<h1>Réalisations</h1>
</header>

<main>
<section>
<h2>Contenus obligatoires</h2>
<ul>
<li><strong>Titre :</strong> " . htmlspecialchars($titre) ." </li>
<li><strong>Description :</strong> " . htmlspecialchars($description) ." </li>
<li><strong>Illustration :</strong> " . htmlspecialchars($illustration) ." </li>
<li><strong>Documents :</strong>
<ul>
</ul>
</li>
</ul>
</section>
</main>

 <footer>
 <p>Réalisé avec PHP et YAML</p>
 </footer>

 </body>
 </html>"
?>


