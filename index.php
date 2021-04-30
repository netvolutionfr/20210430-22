<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Essai PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="liste-fruits">
<?php
$tab = array(
    "Pomme",
    "Banane",
    "Fraise",
    "Abricot"
);
$index = 0;
foreach ($tab as $fruit) {
    $index++;
    echo '<div class="fruit">';
    echo $index;
    echo " - ";
    echo $fruit;
    echo "</div>";
}
?>
</div>
</body>
</html>