/* Dynamic top menu positioning
 *
 */

var num = 40; //number of pixels before modifying styles


//alert(window.location.href);
if( window.location.href == "http://localhost/e-com-site/" || window.location.href == "http://localhost/e-com-site/index.php"){

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.navbar').addClass('fixed');
        $('.logo, .login-button, .navigation-links, .cart-logo').addClass('color');
        $('.logo').addClass('font-size');

    } else {
        $('.navbar').removeClass('fixed');
        $('.logo, .login-button, .navigation-links, .cart-logo').removeClass('color');
        $('.logo').removeClass('font-size');

    }
});

}

else{
    $('.navbar').addClass('fixed'); 
    $('.logo, .login-button, .navigation-links, .cart-logo').addClass('color');
    $('.logo').addClass('font-size');
}
//USE SCROLL WHEEL FOR THIS FIDDLE DEMO