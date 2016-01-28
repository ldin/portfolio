 
$( document ).ready(function() {

     // menu fix
    var menu = $("#menu");
    var header = $('.js-header-block');
    var doc_h = $(window).height();
    //console.log(header.length);
    $(window).scroll(function(){
        var height = header.height();
        if ( $(this).scrollTop() > height && menu.hasClass("relative") ){
            menu.removeClass("relative").addClass("fixed");
        } else if($(this).scrollTop() <= height && menu.hasClass("fixed")) {
            menu.removeClass("fixed").addClass("relative");
        }
    });

    //soft scrolling
    $('a.soft[href^="#"]').click(function () {
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top}, 2000);
        return false;
    });


    $('#price td i').addClass('glyphicon glyphicon-ok');

    //Parallax Scrolling animation

    $('.article[data-type="background"]').each(function(){
        var $bgobj = $(this);
        $(window).scroll(function() {
            var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
            var coords = 'center '+ yPos + 'px';
            $bgobj.css({ backgroundPosition: coords });
        });
    });



});