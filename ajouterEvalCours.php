

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evaluer un cours</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Ajouter evaluation</h1>
    <form method="POST" action="verif.php" id="ajouterEvalForm">
        
        <label for="emailEleve">Email de l'élève:</label>
        <input type="text" id="emailEleve" name="emailEleve" required><br><br>
        
        <label for="idC">ID cours:</label>
        <input type="text" id="idC" name="idC" value="<?= isset($idC) ? $idC : ''; ?>" readonly>
        
        <label for="avis">Opinion:</label>
        <input type="text" id="avis" name="avis" required><br><br>

        <label for="comment">Commentaire:</label>
        <input type="text" id="comment" name="comment" required><br><br>
        
        
        <input type="submit" value="Soumettre">
        
        
    </form>
</body>
</html>
