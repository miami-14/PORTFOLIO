<?php

// Charger la fonction pour parser le YAML
require_once("Page/yaml/yaml.php");

// Lire le fichier YAML
$data = yaml_parse_file('Page/Page/page.yaml');


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Portfolio </title>
    <link rel="stylesheet" href="Page/Page/page.css">
    
    <h1> Bienvenu sur le projet PORTFOLIO  </h1>
   
</head>
<body>


<button> <li><a href="Page/Accueil/accueil.php" data-text="Acceuil">Accueil</a></li> </button>
<button> <li><a href="Page/Compétences/competences.yaml" data-text="Competences">Compétences</a></li> </button>
<button> <li><a href="Page/Réalisations/réalisation.php" data-text="Réalisation">Réalisations</a></li> </button>
<button> <li><a href="Page/Formation/formation.php" data-text="Formation">Formations</a></li> </button>
<button> <li><a href="Page/Contact/contact.php" data-text="Contact">Contact</a></li> </button>

        
</body>
</html>
