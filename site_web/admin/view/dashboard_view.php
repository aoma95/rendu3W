<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require('../../model/connect.php');


if (!isset($_SESSION['admin'])) {
    header('location:../../index.php');
    exit();
    if ($_SESSION['admin'] != $user_session) {
        header("location:../../index.php");
        exit();
    }
}
if (isset($_POST['changer_couleur'])) {
    $change_color = change_color($_POST['color'], $_POST['skill']);
}
if (isset($_POST['changer_valeur'])) {
    $change_valeur = skill_value($_POST['valeur'], $_POST['skill']);
}
if (isset($_POST['Ajouter_skill'])) {
    $saisie = htmlspecialchars($_POST['name_skill']);
    $add_skill = add_skill($saisie, $_POST['valeur'], $_POST['color']);
}
if (isset($_POST['Supprimer'])) {
    $delete= delete_skill($_POST['skill']);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../boostrap/css/bootstrap.min.css">
    <link href="/admin/css/dashboard.css" rel="stylesheet">
    <title>ESPOSITO Dan</title>
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../boostrap/js/bootstrap.min.js"></script>
</head>
<header>
</header>

<body>
    <div class="container">
        <?php echo ("<h1>Bienvenu " . $_SESSION['admin'] . " dans votre sessions</h1>"); ?>
    </div>
    <div>
        <p>Changer couleur des barres coméptences</p>
        <form method='POST' action="" name='couleur'>
            <label><b>Choisir skill</b></label>
            <select name='skill'>
                <?php
                $stmt = skill();
                while ($ligne = $stmt->fetch()) {
                    echo "<option value=" . $ligne['id'] . ">" . $ligne['name_skill'] . "</option>";
                }
                ?>
            </select>
            <label><b>Choisir la couleur</b></label>
            <select name='color'>
                <?php
                $stmt = name_color();
                while ($ligne = $stmt->fetch()) {
                    echo "<option value=" . $ligne['id'] . ">" . $ligne['couleur'] . "</option>";
                }
                ?>
            </select>
            <input type='submit' name='changer_couleur' value='changer couleur'>
        </form>
    </div>
    <div>
        <p>Changer la valeur des barres coméptences</p>
        <form method='POST' action="" name='valeur'>
            <label><b>Choisir skill</b></label>
            <select name='skill'>
                <?php
                $stmt = skill();
                while ($ligne = $stmt->fetch()) {
                    echo "<option value=" . $ligne['id'] . ">" . $ligne['name_skill'] . "</option>";
                }
                ?>
            </select>
            <label><b>Choisir la valeur</b></label>
            <select name='valeur'>
                <?php
                for ($i = 0; $i <= 100; $i++) {
                    echo "<option value=" . $i . ">" . $i . "</option>";
                }
                ?>
            </select>
            <input type="submit" name='changer_valeur' value='changer valeur'>
        </form>
    </div>
    <div>
        <p>Ajouter Skill</p>
        <form method='POST' action="" name='ajout_skill'>
            <label><b>nom du skill</b></label>
            <input type="text" name="name_skill" placeholder="Saisir skill">
            <label><b>Choisir la valeur</b></label>
            <select name='valeur'>
                <?php
                for ($i = 0; $i <= 100; $i++) {
                    echo "<option value=" . $i . ">" . $i . "</option>";
                }
                ?>
            </select>
            <label><b>Choisir la couleur</b></label>
            <select name='color'>
                <?php
                $stmt = name_color();
                while ($ligne = $stmt->fetch()) {
                    echo "<option value=" . $ligne['id'] . ">" . $ligne['couleur'] . "</option>";
                }
                ?>
            </select>

            <input type="submit" name='Ajouter_skill' value='Ajouterskill'>
        </form>
    </div>
    </div>
    <div>
        <p>Supprimer compétence</p>
        <form method='POST' action="" name='supprimer_color'>
            <label><b>Choisir skill</b></label>
            <select name='skill'>
                <?php
                $stmt = skill();
                while ($ligne = $stmt->fetch()) {
                    echo "<option value=" . $ligne['id'] . ">" . $ligne['name_skill'] . "</option>";
                }
                ?>
            </select>
            <input type='submit' name='Supprimer' value='supprimer compétence'>
        </form>
    </div>
</body>

</html>