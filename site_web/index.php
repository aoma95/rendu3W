<?php
ini_set('display_errors',1);
function site_url(){
    return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME']
    );
}
require($_SERVER['DOCUMENT_ROOT']."/controllers/controller.php");
//echo $SERVER;
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case "cv":
            $image_profil = post_image('image  Dan ESPOSITO miniature');
            require('view/header_view.php');
            require('view/footer_view.php');
            require('view/cv_view.php');
            break;
        case "contact":
            require('view/header_view.php');
            require('view/footer_view.php');
            require('view/contact_view.php');
            break;

        case "projet":
           require('view/header_view.php');
           require('view/footer_view.php');
           require('view/projet_view.php');
            break;

        case "admin":
            require('admin/view/log_view.php');
            break;

        case "dashboard":
            require('admin/view/dashboard_view.php');
            break;
        case "blog":
            require('blog/blog.php');
            break;
        default:
            require('view/header_view.php');
            require('view/footer_view.php');
            require('view/index_view.php');
    }
} else {

    require('view/header_view.php');
    require('view/footer_view.php');
    require('view/index_view.php');
}
