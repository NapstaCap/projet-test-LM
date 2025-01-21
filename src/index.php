<!DOCTYPE html>
<html lang="fr">
<?php

require_once "api/api.php";

$token = getTokenAPI()['datas']['token'];
$clients = getClients($token);
$tabClients = getTabClients($clients['datas'], $token);
?>
<head>
    <meta charset="UTF-8">
    <title>Recherche d'un contact</title>
    <link rel="stylesheet" href="css/navStyles.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Rechercher un contact</a></li>
        </ul>
    </nav>
</header>
<body>
<h1>Recherche d'une fiche de contact</h1>
<form>
    <label for="search">Renseigner un nom ou une dénomination</label>
    <input type="text" placeholder="Nom ou dénomination" name="search" id="search">
    <button class="btn" type="button">Rechercher</button>
</form>
<table id="tableUtilisateurs">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>Téléphone</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        <?php
        foreach($tabClients as $client) {
            echo "<tr><td>".$client['datas']['nom']."</td>";
            echo "<td>".$client['datas']['adresse']."</td>";
            echo "<td>". $client['datas']['code_postal'] . " " . $client['datas']['ville'] ."</td>";
            echo "<td>".$client['datas']['tel']."</td>";
            echo '<td><a href="views/utilisateur.php?id='. rawurlencode($client['datas']['id']).'"><button class="btn" type="button">Voir</button></a></td></tr>';
        } ?>
    </tbody>
</table>
</body>
</html>