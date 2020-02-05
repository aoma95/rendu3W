<?php
require ($_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php"); // If you're using Composer (recommended)

use \SendGrid\Mail\Mail;

if(isset($_POST["EnvoiMail"])) {
    $name = $_POST["nom"];
    $email_id = $_POST["email"];
    $objet = $_POST["objet"];
    $msg = $_POST["message"];
    var_dump($_POST);
//// Comment out the above line if not using Composer
//// require("<PATH TO>/sendgrid-php.php");
//// If not using Composer, uncomment the above line and
//// download sendgrid-php.zip from the latest release here,
//// replacing <PATH TO> with the path to the sendgrid-php.php file,
//// which is included in the download:
//// https://github.com/sendgrid/sendgrid-php/releases
//
    $email = new Mail();
    $email->setFrom("dan.esposito@ynov.com", "Dan ESPOSITO");
    $email->setSubject($objet);
    $email->addTo($email_id, $name);
    $email->addContent("text/plain", $msg);
//    $email->addContent(
//        "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
//    );
    $sendgrid = new \SendGrid('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');
    //$sendgrid->send($email);
    /*if($sendgrid->send($email));
    {
        echo"le mail est envoyé !";
    }*/
    try {
        $response = $sendgrid->send($email);
        var_dump($response);
    } catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage() . "\n";
    }
}