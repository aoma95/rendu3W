<?php ob_start(); ?>
    <section>
        <form class="flex" method="post" action="../controllers/mail.php">
            <label>Votre nom :</label>
            <input type="text" placeholder="Nom" name="nom" required>
            <label>Votre adresse mail :</label>
            <input type="email" placeholder="Email" name="email" required>
            <label>Objet :</label>
            <input type="text" placeholder="Objet" name="objet" required>
            <label>Votre message :</label>
            <textarea placeholder="Votre message" name="message" required></textarea>
            <input type="submit" name="EnvoiMail"value="Envoyer mail">
        </form>
    </section>
    
<?php $contact_content = ob_get_clean();?>
<?php require('template/contact_template.php'); ?>