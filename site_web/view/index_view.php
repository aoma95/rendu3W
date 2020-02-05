<?php ob_start(); ?>
<section>
    <article class="flex">
        <h1>Bienvenue dans mon Portfolio</h1>
        <p>Je m'appelle Dan ESPOSITO, j'ai 24 ans et je suis actuellement étudiant à Ynov sur le campus d'Aix-en-Provence dans le domaine de l'informatique. En parcourant mon portfolio vous trouverez ici mes compétences acquises pendant ma formation et mes différents projets.</p>
        <img  src="picture/ouroboros.gif" alt="ImageOuroboros">
    </article>
        <div class="cloud1">
            <img src="../picture/cloud_one.png" alt="image de nuage">
        </div>
</section>
<?php $index_content = ob_get_clean();?>
<?php require('template/index_template.php'); ?>
