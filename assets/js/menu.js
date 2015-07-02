
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
