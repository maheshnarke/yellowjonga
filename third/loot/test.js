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

$('#select').click(function(){
   $('#page').css('height','74px') ;

});

    $('*').click(function(){
        var height_4 = $('#page').height();
        if (height_4 == 74) {
            $('#page').css('height', '30px');
        }
    });





$(document).ready(function(){

    $('#f1').css('height', '25px');
    
    $('body').on('blur','#select',function()
    {
        $('#page').css('height','40px') ;
    });

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

