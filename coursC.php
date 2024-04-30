<?php
include "../../config.php";
require_once '../../model/cours.php'; 
require_once '../../view/pages/tables.php'; 
//require_once '../view/material-dashboard-master (1)/pages/tables.php'; 
class coursC
{
public function showCours($cours)
{
    echo' <table border=1 width="100%">
        <tr align="center" >
        <td> idC<td>
        <td> titre</td>
        <td> descriptionn </td>
        <td> date </td>
        <td> duree</td>
        <td> prix</td>
    
        </tr>
        <tr>
        
        <td>'.$cours->getIdC().'</td>
        <td>'.$cours->getTitre().'</td>
        <td>'.$cours->getDescription().'</td>
        <td>'.$cours->getDate().'</td>
        <td>'.$cours->getDuree().'</td>
        <td>'.$cours->getPrix().'</td>
        </tr>
        </table>';


}
public function ajouterCours($idC, $titre, $description, $date, $duree, $prix) {
    $db = Config::getConnexion();
    try {
        // Vérifier si l'ID existe déjà
        $query = $db->prepare("SELECT idC FROM cours WHERE idC = :idC");
        $query->bindParam(':idC', $idC);
        $query->execute();
        $existingID = $query->fetch();

        if ($existingID) {
            // L'ID existe déjà, afficher une erreur
            die('Erreur: ID déjà utilisé.');
        }

        // L'ID est unique, ajouter le cours
        $requete = $db->prepare("INSERT INTO cours (idC, titre, description, date, duree, prix) VALUES (:idC, :titre, :description, :date, :duree, :prix)");
        $requete->bindParam(':idC', $idC);
        $requete->bindParam(':titre', $titre);
        $requete->bindParam(':description', $description);
        $requete->bindParam(':date', $date);
        $requete->bindParam(':duree', $duree);
        $requete->bindParam(':prix', $prix);

        $requete->execute();
    } catch (PDOException $e) {
        // Log or handle the error appropriately
        die('Erreur lors de l\'ajout du cours: ' . $e->getMessage());
    }
}


public function updateCours($idC, $titre, $description, $date, $duree, $prix) {
    $db = Config::getConnexion();
    try {
        $requete = $db->prepare("UPDATE cours SET titre = :titre, description = :description, date = :date, duree = :duree, prix = :prix WHERE idC = :idC");
        $requete->bindParam(':idC', $idC);
        $requete->bindParam(':titre', $titre);
        $requete->bindParam(':description', $description);
        $requete->bindParam(':date', $date);
        $requete->bindParam(':duree', $duree);
        $requete->bindParam(':prix', $prix);
        
        $requete->execute();
    } catch (PDOException $e) {
        // Log or handle the error appropriately
        die('Error updating cours: ' . $e->getMessage());
    }
}
function deleteCours($idC){
    $sql="DELETE FROM cours WHERE idC= :idC";
    $db = config::getConnexion();
    $requete=$db->prepare($sql);
    $requete->bindValue(':idC',$idC);
    try{
        $requete->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}



    







public function listCours()
    {
        $sql = "SELECT * FROM cours";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

public function afficheEvaluation ($idC) {
    try {
    $db = config::getConnexion();
    $query = $db->prepare("SELECT FROM evalcours WHERE idC = :id");
    $query->execute(['id' => $idC]);
    return $query->fetchAll();
    } catch (PDOException $e) {
    echo $e->getMessage();
    }
    }

}
?>