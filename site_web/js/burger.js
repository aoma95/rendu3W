function afficheNav(){
    $('header nav').toggleClass('nav-tel');
}
$('.btn-nav').on('click',afficheNav);