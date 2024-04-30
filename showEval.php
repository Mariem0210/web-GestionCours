<?php
include '../../controller/evalC.php';

$evalc = new evalC();
$list = $evalc->listEvalCours();
?>

<html>
<head>
    <title>Liste des évaluations</title>
</head>
<body>
    <center>
        <h1>Liste des évaluations</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>id Eval</th>
            <th>Email de l'élève</th>
            <th>id cours</th>
            <th>rate</th>
            <th>Commentaire</th>
            
        </tr>
        <?php foreach ($list as $evalCours) { ?>
            <tr>
                <td><?= $evalCours['idEval']; ?></td>
                <td><?= $evalCours['emailEleve']; ?></td>
                <td><?= $evalCours['idC']; ?></td>
                <td><?= $evalCours['rate']; ?></td>
                <td><?= $evalCours['comment']; ?></td>
                <td>
                    <!-- Lien de suppression avec passage de l'email de l'élève et du nom du cours -->
                    <a href="deleteEval.php?idEval=<?= $evalCours['idEval']; ?>">Supprimer</a>
                    <a href="updateEvalCours.php?idEval=<?= $evalCours['idEval']; ?>" class="update-btn">Modifier</a>

                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
