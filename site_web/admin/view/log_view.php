<?php
session_start()
?>
<?php ob_start(); ?>
<?php

if (isset($_POST) and !empty($_POST)) {
  if (!empty(htmlspecialchars($_POST['username'])) and !empty(htmlspecialchars($_POST['password']))) {
    $password = sha1($_POST['password']);
    $user_session = ($_POST['username']);
    $admin = get_admin($_POST['username'], $password);
    if ($admin->id==="1") {
      $_SESSION['admin'] ="$user_session";
      header('location:/admin/view/dashboard_view.php');
    }
    if ($admin->id==="2"){
        $_SESSION['visiteur'] ="$user_session";
        header('location:/admin/maquette/index.php');
    }else {
      $error = 'Identifiant incorrect';
    }
  }
}
if (isset($error)) {
  echo ("<div class ='error'>" . $error . "</div>");
}
?>

<body class="text-center">
  <form class="form-signin" action="" method="POST">
    <h1 class="h3 mb-3 font-weight-normal">Compte</h1>
    <label for="inputUser" class="sr-only">Username</label>
    <input type="text" name="username" id="inputName" class="form-control" placeholder="Nom" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="mot de passe" required="">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
    <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
  </form>
</body>
<?php $log_content = ob_get_clean(); ?>
<?php require('admin/template/log_template.php'); ?>
