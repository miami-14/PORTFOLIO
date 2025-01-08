<?php

// Charger la fonction pour parser le YAML
require_once("../yaml/yaml.php");
// Lire le fichier YAML bbbbbbbb
$data = yaml_parse_file('page.yaml');

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Portfolio </title>
    <link rel="stylesheet" href="page.css">
    
   
</head>
<body>
<h1> Bienvenu sur le projet PORTFOLIO  </h1>


<button> <li><a href="Page/Accueil/accueil.php" data-text="Acceuil">Acceuil</a></li> </button>
<button> <li><a href="Page/Compétences/competences.php" data-text="competences">Compétences</a></li> </button>
<button> <li><a href="Page/Réalisations/réalisation.php" data-text="Réalisation">Réalisations</a></li> </button>
<button> <li><a href="Page/Formation/formation.php" data-text="Formation">Formations</a></li> </button>
<button> <li><a href="Page/Contact/contact.php" data-text="Contact">Contacts</a></li> </button>

    
</body>
</html>

