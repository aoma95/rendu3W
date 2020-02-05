<?php

function get_admin($user,$password){
    $bdd=connect_db();
    $req_admin="SELECT * FROM user WHERE username = :user AND password = :password;";
    $stmt=$bdd->prepare($req_admin);
    $stmt->execute(["user"=>$user,"password"=>$password]);
    $r=$stmt->fetchObject();
    return $r;
}
function change_color($id_color,$id_skill){
    $bdd=connect_db();
    $req_update_color="UPDATE skill SET id_color = :id_color where id_skill = :id_skill;";
    $stmt=$bdd->prepare($req_update_color);
    $stmt->execute(["id_color"=>$id_color,"id_skill"=>$id_skill]);
}

function skill(){
    $bdd=connect_db();
    $req_skills="SELECT id,name_skill FROM skill;";
    $stmt=$bdd->prepare($req_skills);
    $stmt->execute();
    print_r($stmt);
    return $stmt;
}
function name_color(){
    $bdd=connect_db();
    $req_color="SELECT id,couleur  FROM skill";
    $stmt=$bdd->prepare($req_color);
    $stmt->execute();
    return $stmt;
}
