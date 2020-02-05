<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta  http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cantarell&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navi.css">
    <title>Conctat</title>
    <link rel="icon" href="picture/iconsite.png">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="boostrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://j11y.io/demos/plugins/jQuery/autoresize.jquery.js"></script>
    
</head>

<body class="flex">
<header>
    <?= $header_content ?>
</header>
<main>
    <?= $contact_content ?>
</main>
<footer class="flex">
    <?= $footer_content ?>
</footer>
<?php
if(isset($_SESSION["mail"])) {
?>
<script>alert('le mail est envoyé !');</script>
<?php
unset($_SESSION['mail']);
}
?>
<script src="js/burger.js"></script>
<script>
$('textarea').autoResize();
</script>
</body>
</html>