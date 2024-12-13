<link rel="stylesheet" href="../../réalisation.css;"> 

<h1>Réalisations</h1>

<?php

require_once("../yaml/yaml.php");
$data = yaml_parse_file('réalisation.yaml');

echo"<h1>".$data["Title"]."</h1>";
echo"<h1>".$data["Description"]."</h1>";

?>

<link rel='stylesheet' href='réalisation.css'>

<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title><?= $data["Title"] ?></title>
</head>
<body>
<h1><?= $data["Title"]?>
<?php foreach ($data["Description"] as $item) {?>
    <h2><?= $Description["Sections"]?></h2>
    <?php foreach ($Sections["Nom"] as $item) {?>
        <div class='...'>
        <?php foreach ($Sections["id"] as $item) {?>
        <strong><?=  $item["Id"]?></strong>
        <?php foreach ($Sections["texte"] as $item) {?>

        <?=  $item["Texte"]?>
        
        
    <?php }?>
<?php }?>

