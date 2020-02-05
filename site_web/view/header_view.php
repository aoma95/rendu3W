<?php ob_start(); ?>
<nav>
    <a href="index.php">Dan ESPOSITO</a>
    <a href="index.php?page=cv">Curriculum Vitae</a>
    <a href="index.php?page=projet">Projets</a>
    <a href="index.php?page=blog">Blog</a>
    <a href="index.php?page=contact">Contact</a>
<!--<nav id="menu" class="navbar navbar-dark bg-dark navbar-expand-lg navbar-fixed-top">-->
<!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
<!--    <div class="container">-->
<!--        <div class="navbar-header">-->
<!--            <a class="nav-brand" href="index.php">Dan ESPOSITO</a>-->
<!--        </div>-->
<!--        <div>-->
<!--            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">-->
<!--                <ul class="navbar-nav mr-auto">-->
<!--                    <li class="nav-item active">-->
<!--                        <a class="nav-link" href="index.php?page=cv">Curriculum Vitae</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item active">-->
<!--                        <a class="nav-link" href="index.php?page=projet">Projets</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item active">-->
<!--                        <a class="nav-link" href="index.php?page=contact">Contact</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item active">-->
<!--                        <a class="nav-link" href="index.php?page=blog">Blog</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</nav>
    <button class="btn-nav"><img src="../picture/button_burger.png" alt=""></button>
<?php $header_content = ob_get_clean(); ?>