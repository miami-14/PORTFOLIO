<?php
require_once("../yaml/yaml.php");
$data = yaml_parse_file('réalisation.yaml'); // Chargement du fichier YAML
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="réalisation.css">
    <title><?= $data["Title"] ?></title> <!-- Titre directement récupéré du YAML -->
</head>
<body>
    <!-- Titre principal -->
    <div class="container">
        <h1><?= $data["Title"] ?></h1>
    </div>

    <!-- Parcourir les sections -->
    <div class="container">
        <?php if (isset($data["Sections"])): ?>
            <?php foreach ($data["Sections"] as $section): ?>
                <div class="projet" id="<?= $section["Id"] ?>">
                    <h2><?= $section["Nom"] ?></h2>
                    <p><?= $section["Texte"] ?></p> <!-- Affichage direct du texte -->

                    <!-- Lien unique pour chaque section -->
                    <?php if (!empty($section["URL"])): ?>
                        <a href="<?= $section["URL"] ?>" target="_blank">
                            Voir plus
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucune section disponible.</p>
        <?php endif; ?>
    </div>
</body>
</html>
