<?php
require_once '../../model/eval.php';
require_once '../../controller/evalC.php';

// Vérifie si des données ont été soumises via POST

    // Récupère les données du formulaire
    $idEval = $_POST['idEval'];
    $emailEleve = $_POST['emailEleve'];
    $idC = $_POST['idC'];
    $rate =$_POST['rate'];
    $comment = $_POST['comment'];

    // Crée une instance de la classe evalCours avec les données récupérées
    $evalcours = new evalCours($idEval, $emailEleve, $idC, $rate, $comment);

    // Crée une instance de la classe evalC
    $evalController = new evalc();
    $evalController->ajouterEvalCours($idEval, $emailEleve, $idC, $rate, $comment);
    $evalc->showEvalCours($evalCours);
    





  


//$error = "";

// Check if form is submitted
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si tous les champs sont remplis
    if (!empty($_POST['idEval']) && !empty($_POST['emailEleve']) && !empty($_POST['idC']) && !empty($_POST['rate']) && !empty($_POST['comment'])) {
        // Récupérer les données du formulaire
    // Get form data
    $idEval = intval($_POST['idEval']);
    
	$emailEleve = $_POST['emailEleve'];
    $idC = $_POST['idC'];
    $rate = $_POST['rate '];
    $comment = $_POST['comment'];
    
    $evalc = new Evalc();

    // Update course
    $evalc->ajouterEvalCours($idEval ,$emailEleve, $idC, $rate, $comment) ;
    $evalc->showEvalCours($evalc);
    
    }

}*/






?>


