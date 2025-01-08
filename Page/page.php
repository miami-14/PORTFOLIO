<?php

// Charger la fonction pour parser le YAML
require_once("../yaml/yaml.php");
// Lire le fichier YAML bbbbbbbb
$data = yaml_parse_file('Page/page.yaml');

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


<button> <li><a href=../Accueil/accueil.php" data-text="Acceuil">Acceuil</a></li> </button>
<button> <li><a href="../Compétences/competences.php" data-text="Competences">Compétence</a></li> </button>
<button> <li><a href="../Réalisations/réalisation.php" data-text="Réalisation">Réalisation</a></li> </button>
<button> <li><a href="../Formation/formation.php" data-text="Formation">Formation</a></li> </button>
<button> <li><a href="../Contact/contact.php" data-text="Contact">Contact</a></li> </button>

    
</body>
</html>


