$(document).ready(function (){
    $('#dropdownMenuLink')
        .mouseenter(function () {
            $('#firstcontent').show();
        })
        .mouseleave(function () {
            $('#firstcontent').hide();
        });
    $('#firstcontent')
        .mouseenter(function () {
            $('#firstcontent').show();
        })
        .mouseleave(function () {
            $('#firstcontent').hide();
        });
    $('#dropdownMenuLink1')
        .mouseenter(function () {
            $('#secondcontent').show();
        })
        .mouseleave(function () {
            $('#secondcontent').hide();
        });
    $('#secondcontent')
        .mouseenter(function () {
            $('#secondcontent').show();
        })
        .mouseleave(function () {
            $('#secondcontent').hide();
        });
})

