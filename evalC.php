<?php
include "../../config.php";
require_once '../../model/eval.php'; 

class evalc
{
public function showEvalCours($evalCours)
{
    echo' <table border=1 width="100%">
        <tr align="center" >
        <td> idEval<td>
        <td> emailEleve<td>
        <td> idC</td>
        <td> rate</td>
        <td> comment</td>
        
    
        </tr>
        <tr>
        
        <td>'.$evalCours->getIdEval().'</td>
        <td>'.$evalCours->getEmailEleve().'</td>
        <td>'.$evalCours->getIdC().'</td>
        <td>'.$evalCours->getrate().'</td>
        <td>'.$evalCours->getComment().'</td>

        </tr>
        </table>';


}

public function ajouterEvalCours($idEval,$emailEleve, $idC, $rate, $comment) {
    $db = Config::getConnexion();
    try {
        // Ajouter le cours directement sans vérifier l'existence de l'ID
        $requete = $db->prepare("INSERT INTO evalcours (idEval, emailEleve, idC, rate, comment) VALUES (:idEval ,:emailEleve, :idC, :rate, :comment)");
        $requete->bindParam(':idEval', $idEval);
        $requete->bindParam(':emailEleve', $emailEleve);
        $requete->bindParam(':idC', $idC);
        $requete->bindParam(':rate', $rate);
        $requete->bindParam(':comment', $comment);
        
        $requete->execute();
    } catch (PDOException $e) {
        // Log or handle the error appropriately
        die('Erreur lors de l\'ajout d\'évaluation: ' . $e->getMessage());
    }
}

function deleteEvalCours( $idEval){
    $sql="DELETE FROM evalcours WHERE idEval= :idEval";
    $db = config::getConnexion();
    $requete=$db->prepare($sql);
    $requete->bindValue(':idEval',$idEval);
    try{
        $requete->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function updateEvalCours($idEval, $emailEleve, $idC, $rate, $comment) {
    $db = Config::getConnexion();
    try {
        $requete = $db->prepare("UPDATE evalcours SET emailEleve = :emailEleve, idC = :idC, rate = :rate, comment = :comment WHERE idEval = :idEval");
        $requete->bindParam(':idEval', $idEval, PDO::PARAM_INT); // Assurez-vous que l'ID de l'évaluation est un entier
        $requete->bindParam(':emailEleve', $emailEleve);
        $requete->bindParam(':idC', $idC);
        $requete->bindParam(':rate', $rate);
        $requete->bindParam(':comment', $comment);
        
        $requete->execute();
    } catch (PDOException $e) {
        // Gérez l'erreur de manière appropriée, par exemple, en journalisant l'erreur ou en affichant un message convivial à l'utilisateur
        die('Error updating evalcours: ' . $e->getMessage());
    }
}


public function listEvalCours()
    {
        $sql = "SELECT * FROM evalcours";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }





    // Méthode pour récupérer les évaluations d'un étudiant par son adresse e-mail
public function getEvalCoursByEmail($emailEleve) {
        // Connexion à la base de données (à adapter selon votre configuration)
        $pdo = new PDO('mysql:host=hostname;dbname=dbname', 'username', 'password');
        
        // Requête SQL pour récupérer les évaluations de l'étudiant
        $sql = "SELECT * FROM evalcours WHERE emailEleve = :emailEleve";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['emailEleve' => $emailEleve]);
        $evalcours = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $evalcours;
    }
}

   ?>