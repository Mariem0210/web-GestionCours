<?php
include '../../controller/evalC.php';

$evalc = new evalc();
$evalc->deleteEvalCours($_GET["idEval"]);
header('Location: dashEval.php');
?>
