<!DOCTYPE html>
<html lang="fr">

<head>
    <meta  http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cantarell&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="./../css/3w.css">
    <title>Aventure 3w Academy</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body class="flex">
<main>
    <section>
        <h1 class="animated zoomInUp">L'immersion dans la 3w Academy</h1>
        <p>J'ai décidé pendant mes vacances de sortir de ma zone de confort et d'intégrer une formation de développement web pour renforcer mes compétences</p>
        <article class="animated slideInLeft">
            <h2>La 3w Academy ?</h2>
            <p>La 3W Academy est une école de formation au métier de développeur, intégrateur web et de développeur mobile,
                elle permet un apprentissage accéléré, sur les technologies du web : <strong>HTML, CSS, JAVASCRIPT, PHP et MySQL</strong>.
                Que l'on soit en reconversion avec un amour porté vers la technologie, un étudiant (avec un brin de folie),
                vous pourriez bien trouver votre bonheur avec cet institut.
            </p>
            <h3>Lieu et Durée de la formation</h3>
            <p>La formation se trouve à Paris, Lyon, Nantes, Marseille, Grenoble, Lille, Aix-En-Provence et Strasbourg. La durée est de 400h c'est-à-dire 3 mois qui est équivalant à 7h par jour devant l'écran.
            </p>
        </article>
        <article>
            <h4>Un vécu à travers des lignes de code</h4>
            <p>Un début de formation où on apprend le HTML, à comprendre la définition de <i>BALISE</i> afin de pouvoir les utiliser.
            Le CSS, une grande histoire d'amour avec les selecteurs, on comprend bien vite que c'est trés important de les savoir, grâce à cela j'ai pu enlever un de mes défauts : le Bombardage de classe !!!</p>
            <p>La partie la plus marrante de la formation, le coté developpeur avec JavaScript c'est ici qu'a commencé la difficultée. Quand on apprend à parcourir un tableau avec des boucles et la notion de DOM.
             Pendant la phase du SQL on apprend à faire des requêtes, pour utiliser une base de donnée, puis avec PHP on apprend a faire un site dynamique</p>
            <h5>Bilan pendant la formation</h5>
            <p>Le travail est dense, on apprend tous les jours de nouvelle chose, énormément d'information a retenir qui cause parfois un mélange entre deux languages de programmation. les formateurs sont a l'écoute et nous aident pour trouver les beugs dans nos lignes de code et aussi
            l'environnement du bâtiment est favorable pour se détendre lors des pauses. Ayant des bases en programmation, je n'ai pas eu beaucoup de difficulté à suivre la formation le secret et de suivre tranquillement à son rythme de poser des questions quand on ne comprend pas et le travail à la maison aide énormément.
                Voici un petit projet, codé en parallèle <a href="../../projet/planning.html">Quelle Tâche</a> </p>
        </article>
        <article>
            <h6>Bilan de fin de Formation</h6>
            <p>Étant toujours a la formation je ne peu pas encore donner mon avis final.</p>
        </article>
    </section>
    <a href="../../index.php?page=blog"><button>Retour</button></a>
</main>
<script>
    function fate(){
        $("article:nth-of-type(2)").fadeIn(2000);
        $("article:nth-of-type(3)").fadeIn(4000);
    }
    function jello(){
        $("h1").removeClass("zoomInUp");
        $("h1").toggleClass("jello")
    }
    setInterval(jello,2000);
    setTimeout(fate, 1000);
</script>
</body>
</html>
