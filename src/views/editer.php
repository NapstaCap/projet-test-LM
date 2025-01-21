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
    <button id="btn_editer" class="btn" type="button">Editer</button>
</h1>
<form id="formInfo" method="post">
    <legend>Édition</legend>
    <p>
        <label for="nom">Prénom & NOM</label>
        <input id="nom" name="nom" type="text" value="<?= $client['datas']['nom']?>" />
    </p>
    <p>
        <label for="tel">Téléphone</label>
        <input id="tel" name="tel" type="text" value="<?= $client['datas']['tel']?>" />
    </p>
    <p>
        <label for="email">Email</label>
        <input id="email" name="email" type="text" value="<?= $client['datas']['email']?>" />
    </p>
    <p>
        <label for="adresse">Adresse</label>
        <input id="adresse" name="adresse" type="text" value="<?= $client['datas']['adresse']?>" />
    </p>
    <p>
        <label for="code_postal">Code postal</label>
        <input id="code_postal" name="code_postal" type="text" value="<?= $client['datas']['code_postal']?>" />
    </p>
    <p>
        <label for="ville">Ville</label>
        <input id="ville" name="ville" type="text" value="<?= $client['datas']['ville']?>" />
    </p>
    <div class="form-buttons">
        <a href="utilisateur.php?id=<?= rawurlencode($client['datas']['id'])?>"><button id="btn_annuler" class="btn" type="button">Annuler</button></a>
        <button id="btn_enregistrer" class="btn" type="submit">Enregistrer</button>
    </div>
</form>
</body>
</html>