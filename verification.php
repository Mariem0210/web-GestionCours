<?php
require_once '../../model/cours.php';
require_once '../../controller/coursC.php';




// Retrieve data from the form
$idC = $_POST['idC'];
$titre = $_POST['titre'];
$description = $_POST['description'];
$date= $_POST['date'];
$duree = $_POST['duree'];
$prix = $_POST['prix'];


// Create an instance of Orientation class with the retrieved data
$cours = new cours($idC, $titre, $description, $date, $duree, $prix);

// Create an instance of OrientationC class
$coursController = new coursC();

// Call the method to add the orientation
$coursController->ajouterCours($idC, $titre, $description, $date, $duree, $prix);
$coursC->updateCours($idC, $titre, $description, $date, $duree, $prix);
 header("Location: tables.php");

//$coursController->showCours($cours);
//$coursController->updateCours($idC, $titre, $description, $date, $duree, $prix);
//$evalController->ajouterEvalCours(int $idEval, string $emailEleve, int $satisfaction, string $remarqEval);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idC = $_POST["idC"];

    // Vérification de l'unicité de l'ID
    $db = Config::getConnexion();
    $query = $db->prepare("SELECT idC FROM cours WHERE idC = :idC");
    $query->bindParam(':idC', $idC);
    $query->execute();
    $existingID = $query->fetch();

    if ($existingID) {
        // L'ID existe déjà, afficher une erreur
        die('Erreur: ID déjà utilisé.');
    } else {
        // L'ID est unique, continuer le traitement du formulaire
        // Ajouter le cours dans la base de données, etc.
    }


}
?>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si tous les champs sont remplis
    if (!empty($_POST['idC']) && !empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['date']) && !empty($_POST['duree']) && !empty($_POST['prix'])) {
        // Récupérer les données du formulaire
        $idC = $_POST['idC'];
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $duree = $_POST['duree'];
        $prix = $_POST['prix'];

        // Instancier la classe coursC
        $coursC = new coursC();

        // Ajouter le cours en utilisant la méthode appropriée de la classe coursC
        $coursC->ajouterCours($idC, $titre, $description, $date, $duree, $prix);

        // Rediriger l'utilisateur vers une autre page ou actualiser la page actuelle après l'ajout du cours
        // header('Location: table.php');
        // exit();
    } else {
        // Gérer le cas où des champs sont manquants
        echo "Tous les champs sont obligatoires.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["idC"]) &&
        isset($_POST["titre"]) &&      
        isset($_POST["description"]) &&
        isset($_POST["date"]) && 
        isset($_POST["duree"]) &&
        isset($_POST["prix"])
    ) {
        if (
            !empty($_POST["idC"]) && 
            !empty($_POST['titre']) &&
            !empty($_POST["description"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["duree"]) &&
            !empty($_POST["prix"])
        ) {
            $idC = $_POST['idC'];
            $titre = $_POST['titre'];
            $description = $_POST['description']; 
            $date = $_POST['date'];
            $duree = $_POST['duree'];
            $prix = $_POST['prix'];

            $cours = new Cours();
            $coursC->updateCours($idC, $titre, $description, $date, $duree, $prix);
            header("Location: tables.php");
            
        }
        }
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['idC'])&& isset($_POST['searchEval'])){
        $idC = $_POST['idC'];
        $list=$coursC->afficheEvaluation($idC);
    }
}


?>
<?php
$idC = isset($_POST['idC']) ? $_POST['idC'] : '';
?>

