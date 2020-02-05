<?php
require($_SERVER['DOCUMENT_ROOT']."/projet/planning/model/model.php");
foreach ($_POST["tache"] as $element){
    delete_tache($element);
}
header('location:../index.php');