$(document).ready(function(){
    var tableft = 0;
    var tabwidth = $("#TABS").width();
    $(".pager a").click(function(){
        if ($(this).parent('li').hasClass('next')) {
            tableft += tabwidth;
        }
        if ($(this).parent('li').hasClass('previous')) {
            tableft -= tabwidth;
        }
        $("#TABS").animate( { scrollLeft: tableft }, 500, 'swing' );
        return false;
    })
})