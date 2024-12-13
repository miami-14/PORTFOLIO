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
<title><?= $data["titre"] ?></title>
</head>
<body>
<h1><?= $data["titre"]?>
<?php foreach ($data["presentation"] as $presentations) {?>
    <h2><?= $presentations["domaine"]?></h2>
    <?php foreach ($presentations["items"] as $item) {?>
        <div class='competence'>
        <strong><?=  $item["nom"]?></strong>
        <div class='barre'>
        <div class='niveau' style='width: <?=  $item["niveau"]?>%; background-color: <?= $item["color"]?>;'>
        <?=  $item["niveau"]?>
        </div>
        </div>
        </div>
    <?php }?>
<?php }?>

