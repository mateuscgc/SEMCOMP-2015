// Menu
$(document).ready(function(){
    var i = 0;
    var j = 0;
    $('#dropdown').click(function() {
        if (j == 0){
            $('.programming').slideDown("slow");
            j++;
        } else {
            $('.programming').slideUp("slow");
            j = 0;
        }
    });
    $('#toggle').click(function() {
        if (i == 0){
            $('nav>ul').addClass("show");
            i++;
        } else {
            $('nav>ul').removeClass("show");
            i = 0;
        }
    });
});

// Tooltip Activator
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Talk Description Expand
$('.talk-title').click(function() {
    var container = $(this).parent().parent();
    container.children('.talk-description').slideToggle('slow', function() {
        var icon = container.children('.talk-expand-icon');
        if (icon.hasClass('icon-flip-vertical')) {
            icon.removeClass('icon-flip-vertical');
        } else {
            icon.addClass('icon-flip-vertical');
        }
    });
});

// Days trigger
$('.day-trigger').click(function() {
    if(!$(this).hasClass('day-active')) {
        $('.day-active').removeClass('day-active');

        var day = $(this).attr('day');
        $('div[day="'+day+'"]').addClass('day-active');
    }
});
