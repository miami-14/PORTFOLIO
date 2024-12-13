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
<?php foreach ($data["Description"] as $Description) {?>
    <h2><?= $Description["Sections"]?></h2>
    <?php foreach ($Sections["Nom"] as $item) {?>
        <div class='...'>
        <strong><?=  $item["Id"]?></strong>
        <div class='barre'>
        <div class='...' style='width: <?=  $item["niveau"]?>%; background-color: <?= $item["color"]?>;'>
        <?=  $item["Texte"]?>
        </div>
        </div>
        </div>
    <?php }?>
<?php }?>
