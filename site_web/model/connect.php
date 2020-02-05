<?php
setlocale(LC_ALL, 'fr_FR');
function connect_db(){
    $params=parse_ini_file($_SERVER['DOCUMENT_ROOT']."/db.ini");
    try
    {
        $bdd = new PDO($params['url'],$params['user'],$params['pass']);
        return $bdd;
    }
    catch(Exception $e)
    {
        die("Une érreur a été trouvé : " . $e->getMessage());
    }
}

function connect_db_admin(){
    $params=parse_ini_file($_SERVER['DOCUMENT_ROOT']."/db.ini");
    try
    {
        $bdd = new PDO($params['url'],$params['user'],$params['pass']);
        return $bdd;
    }
    catch(Exception $e)
    {
        die("Une érreur a été trouvé : " . $e->getMessage());
    }
}
function get_image($image){
    $bdd=connect_db();
    $req_image="SELECT picture FROM picture WHERE libelle = ?; ";
    $stmt=$bdd->prepare($req_image);
    $stmt->execute([$image]);
    if ($stmt->rowCount() > 0) {
        $img = $stmt->fetch(PDO::FETCH_ASSOC);
        return $img['picture'];
    } else {
        return "Pas d'image";
    }
}

function get_skill(){
    $bdd=connect_db();
    $req_skills="SELECT name_skill,value_skill,id_color,couleur,classe FROM skill JOIN color_progressbar as color on color.id = skill.id_color ORDER BY value_skill DESC;";
    $stmt=$bdd->prepare($req_skills);
    $stmt->execute();
    return $stmt;
}

 function get_parcourt(){
    $bdd=connect_db();
    $req_parcourts="SELECT name_pro_or_stu, description, DATE_FORMAT(date_begin, '%Y %M') as date_begin,DATE_FORMAT(date_end, '%Y %M') as date_end FROM professional_and_student ORDER BY date_begin DESC";
    $stmt=$bdd->prepare($req_parcourts);
    $stmt->execute();
    return $stmt;
}

function get_projet(){
    $bdd=connect_db();
    $req_projets="SELECT title_projet,libelle,picture FROM projet JOIN picture as p on p.id_picture = projet.id_picture;";
    $stmt=$bdd->prepare($req_projets);
    $stmt->execute();
    return $stmt;
}

//Admin
function get_admin($user,$password){
    $bdd=connect_db();
    $req_admin="SELECT * FROM user WHERE username = :user AND password = :password;";
    $stmt=$bdd->prepare($req_admin);
    $stmt->execute(["user"=>$user,"password"=>$password]);
    $r=$stmt->fetchObject();
    return $r;
}
function change_color($id_color,$id_skill){
    $bdd=connect_db_admin();
    $req_update_color="UPDATE skill SET id_color = :id_color WHERE id = :id_skill;";
    $stmt=$bdd->prepare($req_update_color);
    $stmt->execute(["id_color"=>$id_color,"id_skill"=>$id_skill]);
    return$stmt;
}

function get_id_skill($name_skill){
    $bdd=connect_db_admin();
    $req_id_skil="SELECT id from skill  where name_skill = :name_skill;";
    $stmt=$bdd->prepare($req_id_skil);
    $stmt->execute(["name_skill"=>$name_skill]);
    return $stmt;
}

function skill(){
    $bdd=connect_db_admin();
    $req_skills="SELECT id,name_skill FROM skill;";
    $stmt=$bdd->prepare($req_skills);
    $stmt->execute();
    return $stmt;
}
function skill_value($value_skill,$name_skill){
    $bdd=connect_db_admin();
    $req_skills_value="UPDATE skill SET value_skill = :value_skill WHERE id = :name_skill;";
    $stmt=$bdd->prepare($req_skills_value);
    $stmt->execute(["value_skill"=>$value_skill,"name_skill"=>$name_skill]);
    return $stmt;
}
function name_color(){
    $bdd=connect_db_admin();
    $req_color="SELECT id,couleur  FROM color_progressbar";
    $stmt=$bdd->prepare($req_color);
    $stmt->execute();
    return $stmt;
}

function add_skill($skill,$value,$color){
    $bdd=connect_db_admin();
    $req_add_skill="INSERT INTO skill (name_skill,value_skill,id_color) VALUES (:name_skill,:value_skill,:id_color);";
    $stmt=$bdd->prepare($req_add_skill);
    $stmt->execute(['name_skill'=>$skill,'value_skill'=>$value,'id_color'=>$color]);
}
function delete_skill($skill){
    $bdd=connect_db_admin();
    $req_delete_skill="DELETE FROM skill WHERE id = :skill";
    $stmt=$bdd->prepare($req_delete_skill);
    $stmt->execute(['skill'=>$skill]);
}
/*exemple
function get_image($image,$selection){
    $bdd=connect_db();
    $req_image="SELECT picture FROM picture WHERE libelle = :libelle and cookie = :selection;";
    $stmt=$bdd->prepare($req_image);
    $stmt->execute(["libelle"=>$image,"selection"=>$selection]);*/

    function add_tache($titre,$description,$level,$date){
        $bdd=connect_db();
        $req_add_tache="INSERT INTO tache (titre_tache,description_tache,priority_tache,date_fin_tache) VALUES (:titre,:description_task,:niveau,:date_fin);";
        $stmt=$bdd->prepare($req_add_tache);
        $stmt->execute(["titre"=>$titre,"description"=>$description,"niveau"=>$level,"date_fin"=>$date]);
    //    header('location:../index.php');
    }