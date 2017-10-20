//include the scripts (jQuery, ScrollTo and LocalScroll) before you call this of course

$(document).ready(function(){

    $('#pub').localScroll({
        offset: { top: -513 } //offset by the height of your header (give or take a few px, see what works for you)
    });    

});
