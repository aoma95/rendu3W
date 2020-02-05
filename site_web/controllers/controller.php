<?php
require($_SERVER['DOCUMENT_ROOT']."/model/connect.php");

function post_image($image)
{
    $images = get_image($image);
    return $images;
}

function post_skill(){
    $skill = get_skill();
    return $skill;
}

function post_parcours(){
    $parcour=get_parcourt();
    return $parcour;
}

function post_proje(){
    $stmt=get_projet();
    return $stmt;
}



