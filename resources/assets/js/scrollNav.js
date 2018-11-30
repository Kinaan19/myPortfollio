$(window).scroll(function(){
    $('.myNav').toggleClass('solid',$(this).scrollTop() > 400);
})