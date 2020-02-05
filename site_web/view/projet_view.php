<?php ob_start(); ?>
<h1>Projets</h1>
<section class="flex">
<article>
    <a href="/projet/planning.html"><img src="./picture/projet_planing.jpg" alt="Image pour représenter le projet de planing">
    <h2>Quelle tâche !</h2>
    </a>
</article>
</section>
<?php $projet_content = ob_get_clean(); ?>
<?php require('template/projet_template.php'); ?>










<?php //$projets=post_proje() ;
//    foreach ($projets as $projet){?>
<!--        <article>-->
<!--            <img src="--><?//= $projet['picture'] ?><!--" alt="--><?//= $projet['title_projet'] ?><!--">-->
<!--            <a href="">--><?//= $projet['title_projet'] ?><!--</a>-->
<!--        </article>-->
<!--        --><?php //} ?>




<!--while($ligne = $stmt->fetch()) {-->
<!--$image_get=$ligne['picture'];-->
<!--$insert_image_projet="<img src='$image_get'";-->
<!--$alt_get=$ligne['title_projet'];-->
<!--<div>-->
<!--    echo"$insert_image_projet alt='$alt_get' class='img-fluid' alt='$alt_get'>";-->
<!--    echo"<div class='affichage'>";-->
<!--        echo"<div class='texte'><a href='/html/wait.html'>". $ligne['title_projet'] ."</a></div>";-->
<!--        echo"</div>";-->
<!--    echo"</div>";-->
<!--}-->
