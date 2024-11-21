<?php

// Charger la fonction pour parser le YAML
require_once("../yaml/yaml.php");

// Lire et parser le fichier YAML
$data = yaml_parse_file('compétences.yaml');

// Vérifier que les données sont correctement chargées
if (!$data) {
    die("Erreur : Impossible de lire le fichier YAML.");
}

// Extraire les données globales
$titre = $data['titre'];
$presentations = $data['presentation'];

 

echo '<!DOCTYPE html>';
echo '<html lang="fr">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>' . htmlspecialchars($titre) . '</title>';
echo '</head>';
echo '<body>';
echo '<h1>' . htmlspecialchars($titre) . '</h1>';
echo  '<link rel="stylesheet" href="comptetence.css">';
foreach ($presentations as $presentation) {
    echo '<h2>' . htmlspecialchars($presentation['domaine']) . '</h2>';
    foreach ($presentation['items'] as $item) {
        echo '<div class="competence">';
        echo '<strong>' . htmlspecialchars($item['nom']) . '</strong>';
        echo '<div class="barre">';
        echo '<div class="niveau" style="width: ' . htmlspecialchars($item['niveau']) . '%; background-color: ' . htmlspecialchars($item['color']) . ';">';
        echo htmlspecialchars($item['niveau']) . '%';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

echo '</body>';
echo '</html>';


?>
