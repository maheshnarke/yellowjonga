/*$(document).ready(function(){
    $("select").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("select").blur(function(){
        $(this).css("background-color", "red");
    });
});*/

$('#xx').mouseenter(function(){
    $('#xxx li').css('display','block');
});
$('#xx').mouseleave(function(){
    $('#xxx li').css('display','none');
});

$('#xxx li').click(function(){
    $('#xxx li').css('display','none');

});

$('#f2').click(function(){
   $('#f1').css('height','96px') ;



});



    $('*').click(function(){
        var height_4 = $('#f1').height();
        if (height_4 == 96) {
            $('#f1').css('height', '25px');
        }
    });





$(document).ready(function(){

    $('#f1').css('height', '25px');


    /*
    var height_1 =  $('body').height();
    if (height_1 > 500)(
        alert("body hiight is greater tha 500 px . Is " + (height_1)+' px')
    );
    else{
        alert('pradip')
    }
*/


});

