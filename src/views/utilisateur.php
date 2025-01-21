<!DOCTYPE html>
<html lang="fr">
<?php
require_once "../api/api.php";

$token = getTokenAPI()['datas']['token'];
$client = getOneClient($token);
?>
<head>
    <meta charset="UTF-8">
    <title>Informations</title>
    <link rel="stylesheet" href="../css/navStyles.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<header>
    <nav>
        <ul>
            <li><a href="../index.php">Rechercher un contact</a></li>
        </ul>
    </nav>
</header>
<body>
<h1><?= $client['datas']['nom'] ?>
    <a href="editer.php?id=<?= $client['datas']['id']?>"><button id="btn_editer" class="btn" type="button">Editer</button></a>
</h1>
<form id="formInfo">
    <legend>Informations</legend>
        <p>
            <label>Prénom & NOM</label>
            <label> <?= $client['datas']['nom']?> </label>
        </p>
        <p>
            <label>Téléphone</label>
            <label> <?= $client['datas']['tel']?> </label>
        </p>
        <p>
            <label>Email</label>
            <label> <?= $client['datas']['email']?> </label>
        </p>
        <p>
            <label>Adresse</label>
            <label> <?= $client['datas']['adresse']?> <?= $client['datas']['code_postal']?> <?= $client['datas']['ville']?></label>
        </p>
</form>
</body>
</html>