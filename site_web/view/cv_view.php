<?php ob_start(); ?>
    <section>
        <img src="<?php echo $image_profil; ?>" id="Photo_Dan" alt="Dan ESPOSITO">
        <p>
            N'ayant toujours pas changé d'identité je me présente un peu, depuis petit je suis passionné par l'informatique,
            je suis de nature curieuse ainsi je n'hésite pas a poser des questions afin de parvenir à comprendre et réussir mes tâches.<br>
            J'ai eu des difficultés à rentrer dans le domaine de l'informatique comme vous pourriez le voir dans mon
            parcourt professionnel. Mais tout cela m'a apporté beaucoup d'expérience que cela sois en individuel ou en groupe.
        </p>
        <a href="dl/cv_dan.pdf" download="cv.pdf"><button>Télécharger mon cv</button></a>
    </section>
    <section>
        <article>
            <p><span>MON PARCOURS</span></p>
            <h1>Études &amp; expériences</h1>
            <?php $parcours=post_parcours();
            foreach ($parcours as $element){?>
                <section class='contenu-parcours'>
                    <h3><?=$element['name_pro_or_stu']?><br></h3>
                    <p><?=$element['description']?></p>
                    <span class='date'> <?=$element['date_begin'] ?>-<?=$element['date_end'] ?></span>
                </section>
            <?php } ?>
        </article>
        <article>
            <h2>Compétences :</h2>
            <?php $skills= post_skill();
            foreach ($skills as $skill){?>
                <div class='progress'>
                    <div class="<?=$skill['classe']?>" role="progressbar" style="width:<?=$skill['value_skill']?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="<?=$skill['value_skill'] ?>" data-preset="line">
                    <p><?=$skill['name_skill']?> : <?=$skill['value_skill']?>%</p>
                    </div>
                </div>
                <?php } ?>
        </article>
    </section>
<?php $cv_content = ob_get_clean(); ?>
<?php require('template/cv_template.php'); ?>