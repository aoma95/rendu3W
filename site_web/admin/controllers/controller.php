<?php
require('admin/model/model.php');

function connect_admin(){
    if (isset($_POST) AND !empty($_POST)){
        if(!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))){
            $admin=get_admin($_POST['username'],$_POST['password']);
            if($admin){
                $_SESSION['admin'] = $_POST['username'];
                echo('bonjours admin');
            }
            else{
                $error ='Identifiant incorrect';
            }
        }
    }
}


