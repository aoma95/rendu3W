<!DOCTYPE html>
<html lang="fr">

<head>
    <meta  http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cantarell&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/navi.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="./blog/css/blog.css">
    <title>Blog</title>
    <link rel="icon" href="picture/iconsite.png">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body class="flex">
<header>
    <?= $header_content ?>
</header>
<main>
    <section class="flex">
        <h1>L'histoire d'une passion à travers le web</h1>
        <p>la thailande à bord d'un blog</p>
        <article>
        <a href="blog/views/3w.php"><h2>Une formation rapide avec la 3W Academy</h2>
            <p>Je vous partage mon voyage dans le monde du dévelopement web où vous decouvrirais mon vécu dans le monde du code</p></a>
        </article>
    </section>
</main>
<footer class="flex">
    <?= $footer_content ?>
</footer>
<script src="../js/burger.js"></script>
<script>
    function flip(){
        $("h1").toggleClass("flipInX").toggleClass("animated");
    }
    setInterval(flip,2000);
</script>
</body>

</html>