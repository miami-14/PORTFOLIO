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
    <title>Page </title>
    <link rel="stylesheet" href="../Page/page.css">
    
    <h1> Bienvenu sur le projet PORTFOLIO  </h1>
   
</head>
<body>


<button> <li><a href="../Accueil/accueil.php" data-text="Acceuil">Acceuilùmmmmm</a></li> </button>
<button> <li><a href="../Compétences/comptétences.php" data-text="Compétences">Compétences</a></li> </button>
<button> <li><a href="../Réalisations/réalisation.php" data-text="Réalisation">Réalisation</a></li> </button>
<button> <li><a href="../Formation/formation.php" data-text="Formation">Formation</a></li> </button>
<button> <li><a href="../Conctact/Conctact.php" data-text="Conctact">Conctact</a></li> </button>


        </ul>
</body>
</html>

