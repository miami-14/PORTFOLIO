<?php
// Charger le fichier YAML
require_once("../yaml/yaml.php");
$data = yaml_parse_file('formation.yaml');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formation.css">
    <title><?= $data["Title"] ?></title>
</head>
<body>
    <!-- Titre principal -->
    <div class="container">
        <h1><?= $data["Title"] ?></h1>
        <p><?= $data["Description"] ?></p>
    </div>

    <!-- Lien vers le CV -->
    <div class="container cv-section">
        <?php if (isset($data["CV"]["URL"])): ?>
            <p>
                <a href="<?= $data["CV"]["URL"] ?>" target="_blank" class="cv-link">
                    <?= $data["CV"]["Label"] ?>
                </a>
            </p>
        <?php endif; ?>
    </div>

    <!-- Parcourir les sections -->
    <div class="container">
        <?php if (isset($data["Sections"])): ?>
            <?php foreach ($data["Sections"] as $section): ?>
                <div class="projet" id="<?= $section["Id"] ?>">
                    <h2><?= $section["Nom"] ?></h2>
                    <ul>
                        <?php foreach (explode("\n", trim($section["Texte"])) as $item): ?>
                            <li><?= $item ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucune section disponible.</p>
        <?php endif; ?>
    </div>
</body>
</html>
