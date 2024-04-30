<?php
    include '../../controller/coursC.php';
    $coursC = new coursC();
    $coursC->deletecours($_GET["idC"]);
    header('Location:tables.php');
?>