<!DOCTYPE html>
<html lang="fr">
<?php

require_once "api/cURL.php";

function getTokenAPI() {
    $url = "https://evaluation-technique.lundimatin.biz/api/auth";
    $response = appel_cURLPOSTAUTH($url);

    return json_decode($response, true);
}
function getClients($token){
    $url = "https://evaluation-technique.lundimatin.biz/api/clients";
    $response = appel_cURLGET($url, $token);

  return json_decode($response, true);
}

$token = getTokenAPI()['datas']['token'];
$token = explode("-", $token)[1];
echo $token;

$clients = getClients($token)?>
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
        <?php foreach($clients as $client) {
            echo "<tr><td>".$client['nom']."</td>";
            echo "<td>".$client['adresse']."</td>";
            echo "<td>". $client['code_postal'] . " " . $client['ville'] ."</td>";
            echo "<td>".$client['tel']."</td>";
            echo '<td><a href="views/utilisateur.php?id='. $client['id'].'"><button class="btn" type="button">Voir</button></a></td></tr>';
        } ?>
    </tbody>
</table>
</body>
</html>