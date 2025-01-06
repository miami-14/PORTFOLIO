<?php

// Charger la fonction pour parser le YAML
require_once("../yaml/yaml.php");

// Lire le fichier YAML
$data = yaml_parse_file('page.yaml');


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Portfolio </title>
    <link rel="stylesheet" href="page.css">
    
    <h1> Bienvenu sur le projet PORTFOLIO  </h1>
   
</head>
<body>


<button> <li><a href="Page/Accueil/accueil.php" data-text="Acceuil">Acceuil</a></li> </button>
<button> <li><a href="Page/Compétences/comptétences.php" data-text="Compétences">Compétence</a></li> </button>
<button> <li><a href="Page/Réalisations/réalisation.php" data-text="Réalisation">Réalisation</a></li> </button>
<button> <li><a href="Page/Formation/formation.php" data-text="Formation">Formation</a></li> </button>
<button> <li><a href="Page/Contact/contact.php" data-text="Contact">Contact</a></li> </button>

        </ul>
</body>
</html>
