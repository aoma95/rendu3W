<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio présentant mes projets et mon cursus" />
    <link rel="stylesheet" href="<?= site_url(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?= site_url(); ?>/css/index.css">
    <link rel="stylesheet" href="<?= site_url(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?= site_url(); ?>/css/navi.css">
    <link href="https://fonts.googleapis.com/css?family=Cantarell&display=swap" rel="stylesheet">
    <title>ESPOSITO Dan</title>
    <link rel="icon" href="<?= site_url(); ?>/picture/iconsite.png">
    <script src="<?= site_url(); ?>/js/jquery.js"></script>
    <script src="<?= site_url(); ?>/js/jq_1_12.js"></script>
</head>

<body class="flex">
<header>
    <?= $header_content ?>
</header>
<main class="flex">
    <?= $index_content ?>
</main>
<footer class="flex">
    <?= $footer_content ?>
</footer>
<script src="js/main.js"></script>
<script src="js/burger.js"></script>
</body>

</html>