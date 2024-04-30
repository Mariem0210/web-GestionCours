<?php
require_once '../../view/pages/evalF.php';
require_once '../../controller/coursC.php';

// Supposons que $coursC est initialisé correctement
$cours = $coursC->listCours();
?>

<!DOCTYPE html>
<head>
    <title>Recherche Evaluation</title>
</head>
<body>
    <h1>Recherche Eval par id</h1>
    <form action="" method="POST">
        <label for="cours">Sélectionnez un id: </label>
        <select name="cours" id="idC">
            <?php foreach ($cours as $cours) { ?>
                <option value="<?= $cours['idC'] ?>"><?= $cours['idC'] ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Rechercher" name="searchEval">
    </form>

    <?php if (isset($list)) { ?>
        <br>
        <h2>Évaluations correspondantes au cours sélectionné :</h2>
        <ul>
            <?php foreach ($list as $evalcours) { ?>
                <li><?= $evalcours['titre'] ?> <?= $evalcours['prix'] ?> dt</li>
            <?php } ?>
        </ul>
    <?php } ?>
</body>
</html>
