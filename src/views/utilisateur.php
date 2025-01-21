<!DOCTYPE html>
<html lang="fr">
<?php
require_once "../api/cURL.php";
function getOneClient()
{
    $idClient = $_GET['id'];
    $url = "http://localhost/projet-test-LM/src/api/users/$idClient";
    $response = appel_cURLGET($url, $token);

    return json_decode($response, true);
}

$client = getOneClient();
?>
<head>
    <meta charset="UTF-8">
    <title>Informations</title>
    <link rel="stylesheet" href="../css/navStyles.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script defer src="../js/scripts.js"></script>
</head>
<header>
    <nav>
        <ul>
            <li><a href="../index.php">Rechercher un contact</a></li>
        </ul>
    </nav>
</header>
<body>
<h1><?= $client['nom'] ?>
    <a href="editer.php">
        <button id="btn_editer" class="btn" type="button">Editer</button>
    </a>
</h1>
<form id="formInfo">
    <legend>Informations</legend>
        <p>
            <label>Prénom & NOM</label>
            <label> <?= $client['nom']?> </label>
        </p>
        <p>
            <label>Téléphone</label>
            <label> <?= $client['telephone']?> </label>
        </p>
        <p>
            <label>Email</label>
            <label> <?= $client['email']?> </label>
        </p>
        <p>
            <label>Adresse</label>
            <label> <?= $client['adresse']?> </label>
        </p>
</form>
</body>
</html>