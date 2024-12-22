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

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="acceuil.css">
</head>
<body>
    <h1><?= $titre ?></h1>
    <div class="container">
        <p><strong><?= $prenom ?> <?= $nom ?></strong></p>
        <p><em><?= $accroche ?></em></p>
        <p><?= $presentation ?></p>
        <img src="../../Image/<?= $photo ?>" alt="Photo de <?= $prenom ?> <?= $nom ?>">
    </div>
</body>
</html>
