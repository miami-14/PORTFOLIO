<?php

// Charger la fonction pour parser le YAML
require_once("../yaml/yaml.php");

// Lire et parser le fichier YAML
$data = yaml_parse_file('compétences.yaml');

// Vérifier que les données sont correctement chargées
if (!$data) {
    die("Erreur : Impossible de lire le fichier YAML.");
}


$realisations = [
    "contenus_obligatoires" => [
        "titre" => "Titre",
        "description" => "Description",
        "illustration" => "Illustration",
        "documents" => [
            "type" => ["Procédures", "Captures", "Autres"]
        ]
    ]
];

// Exemple d'affichage
print_r($realisations);


echo '<!DOCTYPE html>';
echo '<html lang="fr">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>' . htmlspecialchars($titre) . '</title>';