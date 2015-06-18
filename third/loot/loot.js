var review1 = "";

$(document).ready(function()
{
    $('body').on('click','.shop_list',function(){
        var shopid = $(this).attr('id');
        $("#shop").val(shopid);
        $("#form4").submit();

        //alert("hi");

    });

    $('body').on('click','#btnsearchShop',function(){
        //var shopsearch = $('#textsearchShop').val();
        //$("#hisearchShop").val(shopsearch);
        //$("#myForm1").submit();

        //alert("hi");
        setSearch();
        //window.location.href = '../page5.php';
    });


    $('.simagebox').on('click',function(){

        var divtext = $(this).attr('id');
        var divcode = $( "div#"+divtext ).html();
        var test99 = ('main_image_box');
        var big_imgbox = $( "div#"+test99 ).html();
        var swap = divcode;
        //$( "div#"+divtext ).html(big_imgbox);
        $( "div#"+test99 ).html(divcode);

        //alert(big_imgbox);
        //alert(("#"+divtext).html());
        //this.textContent=("kjascjbajksbca");
    });

    var allcookies= document.cookie;
    cookiearray1  = allcookies.split(';');
    for(i=0;i<cookiearray1.length;i++)
    {
        var n = cookiearray1[i].search("myCity");
        if(n>=0)
        {
            cookiearray  = cookiearray1[i].split('=');
        }
    }

    $( ".newtop" ).click(function() {

        var shopid = $(this).attr('id');
        $("#shop").val(shopid);
        $( "#form4" ).submit();
       //alert( );
    });


    $.ajax({
            url:'ajax/getCity.php',
            type:'POST',
            dataType: 'html',
            success : function(data)
            {                
                $("#divCity").html(data);
                selectCityList1(cookiearray[1]);
                
            }
        });
    //index page functionality
    $('body').on('click','.category',function()
    {        
        var city = $("#searchCityId").val();
        $("#myForm").submit();
    }); 
    
    if($('#hidShopId').length>0)
    {
        setReview();
                }
    //$( "#searchCity" ).click(function() {
    //    $( "#divCity" ).css( "display", "visible" );
    //});
    
    $('body').on('keyup','#searchCity',function()
    {        
        $("#searchCityId").val("");
    });       
    
    $('html').on('click', function(event)
    {
        var target      = $(event.target);
        
        if(target.attr('id') === 'searchCity')
        {
                    $('#divCity').show();
        }
        else 
        {
            if(target.hasClass('liCity'))
            {
                $(".liCity").removeClass("selected_li");
                $("#"+target.attr('id')).addClass("selected_li");
                selectCityList();
            }
            else
            {
                $('#divCity').hide();
            }
        }
    });
    
    //common page functionality
    
    $('body').on('click','#linkLogin',function()
    {
        if($("#spanLoginText").text()!=="Logout")
        {   
            $("#clickEventNameLogin").val('linkLogin');           
            openLoginDialog();
        }
        else
        {
            openLogoutDialog();
        }
    });
    
    $('body').on('click','#linkSignup',function()
    {   
        $("#clickEventNameSignup").val('linkSignup');
        openSignupDialog();
    });                    
            
    $('body').on('click','.getCode',function()
    {                
       var shop_id =$(this).attr('id');
       $("#shopId").val(shop_id);
       openGetCodeDialog();
    });
            
    $('body').on('click','.getOnlyCode',function()
    {                
       var shop_id =$(this).attr('id');
       $("#shopId").val(shop_id);   
       var email = 'noemail';
       $.ajax({
            url:'ajax/sendCode.php',
            type:'POST',
            data: {email:email,shopId:shop_id},
            dataType: 'html',
            success : function(data)
            {
                if(data=='success')
                {
                    $("#dialogGetCodeMessage").html('<div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="exampleModalLabel">LootOnSale</h4></div><div class="modal-body"><p style="color: #000000">Code has been sent to your Email Id</p></div></div></div> ');
                    $("#dialogGetCodeMessage").modal();
                }
            }
        });       
    });

    $('body').on('click','#btnLogin1',function()
    {
        $('#dialogGetCode').modal('hide');
        $("#clickEventNameLogin").val('btnLogin1');
        openLoginDialog();
    });

    $('body').on('click','#btnSignup1',function()
    {         
        $('#dialogGetCode').modal('hide');
        $("#clickEventNameSignup").val('btnSignup1');
        openSignupDialog();
    });
    
    $('body').on('change','.sbox',function()
    {
        $("#selCity").val($(this).val());
    });

    $('body').on('change','#selCity',function()
    {
        $('#selectedCity').val($(this).val());
    }); 

    $('body').on('click','#btnLogin2',function()
    {
        var email = $("#txtEmail1").val();
        var password = $("#txtPassword").val();
        var shopId = $("#shopId").val();
        if($("#chkRemember").is(':checked'))
            var remember = $("#chkRemember").val();
        
        if(email!="" && password!="")
        {
            $.ajax({
                url:'ajax/checkValidUser.php',
                type:'POST',
                data: {email:email,password:password},
                dataType: 'html',
                success : function(data)
                {
                    data = data.split('|');
                    if(data[0]=='success')
                    {      
                        $('#img_loader').remove();
                        $('#dialogGetLogin').modal('hide');
                        if(remember=="1")
                        {
                            document.cookie="username="+data[2]+"; expires=Thu, 31 Dec 2015 12:00:00 UTC";
                            document.cookie="password="+data[3]+"; expires=Thu, 31 Dec 2015 12:00:00 UTC";
                            document.cookie="remember=isRemember; expires=Thu, 31 Dec 2015 12:00:00 UTC";
                        }
                        else
                        {
                            document.cookie="username=''; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
                            document.cookie="password=''; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
                            document.cookie="remember=''; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
                        }
                        if(('#hidShopId').length>0)
                        {                            
                            location.reload();                            
                        }
                        if($("#clickEventNameLogin").val()==='btnLogin1' )
                        {
                            $.ajax({
                                url:'ajax/sendCode.php',
                                type:'POST',
                                data: {email:data[1],shopId:shopId},
                                dataType: 'html',
                                success : function(data)
                                {
                                    if(data=='success')
                                    {
                                        $('#img_loader').remove();
                                        $("#dialogGetCodeMessage").html('<div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="exampleModalLabel">LootOnSale</h4></div><div class="modal-body"><p style="color: #000000">Code has been sent to your Email Id</p></div></div></div> ');
                                        $("#dialogGetCodeMessage").modal();
                                        location.reload();
                                    }
                                },
                                beforeSend:function()
                                {
//                                    $('#myBody').after('<span style="padding-left:20px;"><img src="http://localhost/loot1/img/loader.gif"></span>');
                                }
                            });
                        }
                        else
                        {
                            location.reload();
                        }
                    }
                    else
                    {
                        $(".alert").show();
                        $("#errorText").text('Email or Password is Wrong!');
                    }                    
                },
                beforeSend:function()
                {
//                    $('#btnLogin2').after('<span style="padding-left:20px;"><img src="http://localhost/loot1/img/loader.gif"></span>');
                }               
            });
        }
        else
        {
            $(".alert").show();
            $("#errorText").text('Email and Password are Mandatory!');
        }
    });

    $('body').on('click','#btnSignup2',function()
    {                                        
        var shopId          = $("#shopId").val();
        var username        = $("#txtName").val();
        var email           = $("#txtEmail2").val();
        var txtPassword     = $("#txtPasswordN").val();
        var txtConfPassword = $("#txtConfPassword").val();
        var txtMobile       = $("#txtMobile").val();                               

        if(txtPassword != txtConfPassword)
        {
            $(".alert").show();
            $("#errorText").text('Password and Confirm Password does not match.');            
        }

        if(email!="" && username!="" && txtPassword!=="" && txtConfPassword!="")
        {
            $.ajax({
                url:'ajax/userSignup.php',
                type:'POST',
                data: {email:email,password:txtPassword,confPassword:txtConfPassword,username:username,mobile:txtMobile},
                dataType: 'html',
                success : function(data)
                {
                    if(data=='success')
                    {
                        $("#dialogGetSingup").modal('hide');
                        if($("#clickEventNameSignup").val()=="btnSignup1")
                        {
                            $.ajax({
                                url:'ajax/sendCode.php',
                                type:'POST',
                                data: {email:email,shopId:shopId},
                                dataType: 'html',
                                success : function(data)
                                {
                                    if(data=='success')
                                    {
                                        alert('Code has been sent to your Email Id');
                                    }
                                }
                            });
                        }
                        else
                        {
                            $("#dialogGetCodeMessage").html('<div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="exampleModalLabel">LootOnSale</h4></div><div class="modal-body"><p style="color: #000000">Verification mail sent to your email id. <br> Thank you for signing up.</p></div></div></div> ');
                            $("#dialogGetCodeMessage").modal();
                        }
                    }
                    else
                    {                        
                        var error = data.split('|');
                        $(".alert").show();
                        $("#errorText").html(error[0]);                        
                    }
                }
            });
        }
        else
        {
            $("#errorText").html('All fields are mandatory.');
            $(".alert").show();            
        }
    });
    
    $('body').on('focus','.form-control',function(){
       
        $(".alert").hide();
    });
    
    $('body').on('click','#comment_button_login',function()
    {
        var review = $('#textComment').val();
        if(review.trim()=="")
        {
            alert("Please enter valid input for publish review");
            $('#textComment').focus();
            return false;
        }
        else
        {
            openGetCodeDialog();
                }        
            });
    
    $('body').on('click','#comment_button',function()
    {
       var review = $('#textComment').val();
        if(review.trim()=="")
        {
            alert("Please enter valid input for publish review");
            $('#textComment').focus();
            return false;

        }
        else
        {
            insertReview();
        }
        
    });
    $('body').on('click','#comment_update',function()
    {
        var review = $('#newComment').text();
        if(review == "")
        {
            alert("Please enter valid input for publish review");
            $('#newComment').focus();
            return false;

        }
        else
        {
            updateReview();
        }

    });


    $('body').on('click','#edit',function(){
        review1 = $('#newComment').text();
        $('#newComment').attr('contenteditable','true');
        $('#newComment').css('background','rgb(165, 222, 219)');
        $(this).attr('id','cancel');
        $('#delete').text('Done');
        $('#delete').attr('id','comment_update');
        $('#comment_update').text('Done');
        $('#comment_update').attr('id','comment_update');
        $(this).text('Cancel');
        $('#newComment').focus();

    });
    $('body').on('click','#cancel',function(){
        $('#newComment').text(review1);
        $('#newComment').attr('contenteditable','false');
        $('#newComment').css('background','rgba(96, 133, 113, 0.18)');
        $(this).attr('id','edit');
        $('#comment_update').attr('id','delete');
        $('#comment_update').text('Delete');
        $('#delete').attr('id','delete');
        $('#delete').text('Delete');
        $(this).text('Edit');

    });

    $('body').on('click','#delete',function(){

        deleteComment();

    });

    $('.slider1').bxSlider({
        slideWidth: 300,
        minSlides: 1,
        maxSlides: 4,
        slideMargin: 10
//        mode: 'fade',
//        captions: true,
//        pagerCustom: '#bx-pager',
//        adaptiveHeight: true
    });
//            $("ul.pagination1").quickPagination();
//            $("ul.pagination2").quickPagination({pagerLocation:"both"});
    $("ul.pagination3").quickPagination({pagerLocation:"",pageSize:"4"});
    
    $("body").on("click","#btnContact",function()
    {
        var name = $("#textName").val();
        var email = $("#textEmail").val();
        var phone = $("#textPhone").val();
        var message = $("#textMessage").val();
        
        if(name=="" || email=="" || phone=="")
        {
            alert("Please fill the mandatory fields.");
        }
        else
        {
            var data = {name:name,email:email,phone:phone,message:message};
            $.ajax({
                url:'ajax/insertContact.php',
                type:'POST',
                data: data,
                dataType: 'html',
                success : function(data)
                {                
                    alert(data);
                    window.location.href = window.location.href;
                }
            });            
        }
    });



//home page search  input propertychange


    $('body').on("input propertychange","#textsearchShop",function(){
       var searchVal = $("#textsearchShop").val();
        if(searchVal!= "") {
            searchShop();
            $("#dropSearchShop").show();
            //$('#dropSearchShop').text(searchVal);
            //$('#dropSearchShop').show();
            //alert(searchVal);
        }
        else{
            //$('#dropSearchShop').text(searchVal);
            $('#dropSearchShop').hide();
            searchShop();
        }

    });

//home page search
    $('body').on("click",".btnclear",function(){

        clearall();
        //window.location='page2.php'
        //window.location.reload(yes);
    });


});



function setSearch(){

    $.ajax({
        url:'ajax/setSearch.php',
        type:'POST',
        data:{txtSearch:$('#textsearchShop').val().trim()},
        dataType: 'html',
        success : function(data)
        {
            window.location="page2.php";
            //window.location.reload(ok);



        }

    });

}



function clearall(){


    $.ajax({
        //url:'ajax/clearAll.php',
        url:'ajax/clearAll.php',
        type:'POST',
        //data:{txtSearch:$('#textsearchShop').val().trim(),pradip:"test".trim()}
        success : function(data)
        {
            window.location=window.location;
            //window.location.reload(ok);



        }

    });


}

function searchShop(){

    $.ajax({
        url:'ajax/getShop.php',
        type:'POST',
        data:{txtshop:$('#textsearchShop').val().trim()},
        dataType: 'html',
        success : function(data)
        {

            $("#dropSearchShop").html(data);



        }
    });

}


function selectCityList()
{    
    var city_id     = $("ul.dropul li.selected_li").val();
    var city_name   = $("#"+city_id).attr('text');    
    $("#"+city_id).addClass("selected_li");
    $("#searchCity").val(city_name);
    
    $.ajax({
        url:'ajax/setCity.php',
        type:'POST',
        data:{city_id:city_id},
        dataType: 'html',
        success : function(data)
        {
            $("#searchCityId").val(data);
            document.cookie="myCity="+data+"; expires=Thu, 31 Dec 2015 12:00:00 UTC";
            window.location = window.location.href;
        }        
    });
    
    $("#divCity").hide();
}

function selectCityList1(city_id)
{
    var city_id     = $("#"+city_id).val();
    var city_name   = $("#"+city_id).attr('text');    
    $("#"+city_id).addClass("selected_li");
    $("#searchCity").val(city_name);    
    
    $.ajax({
        url:'ajax/setCity.php',
        type:'POST',
        data:{city_id:city_id},
        dataType: 'html',
        success : function(data)
        {
            $("#searchCityId").val(data);
            document.cookie="myCity="+data+"; expires=Thu, 31 Dec 2015 12:00:00 UTC";
        }        
    });
    
    $("#divCity").hide();
}

function openLoginDialog()
{
    $.ajax({
        url:'ajax/getLoginPage.php',
        type:'POST',
        dataType: 'html',
        success : function(data)
        {
            $("#dialogGetLogin").html(data);
            $("#dialogGetLogin").modal({
                    keyboard: false
            });
        }        
    });
}

function openSignupDialog()
{
    $.ajax({
        url:'ajax/getSignupPage.php',
        type:'POST',
        dataType: 'html',
        success : function(data)
        {
            $("#dialogGetSingup").html(data);
            $("#dialogGetSingup").modal({
                keyboard: false
            });
        }
    });
}

function openGetCodeDialog()
{
    $.ajax({
        url:'ajax/getCodePage.php',
        type:'POST',
        dataType: 'html',
        success : function(data)
        {
            $( "#dialogGetCode" ).html(data);
            $( "#dialogGetCode" ).modal({
                keyboard: false
            });
        }
    });
}

function openLogoutDialog()
{
    $.ajax({
        url:'ajax/getLogoutPage.php',
        type:'POST',
        dataType: 'html',
        success : function(data)
        {
            location.reload();
        },
        beforeSend:function()
        {
//            $('#spanLoginText').after('<span style="padding-left:20px;"><img src="http://localhost/loot1/img/loader.gif"></span>');
        }
    });
}

function insertReview()
{
    $.ajax({
        url:'ajax/insertReview.php',
        type:'POST',
        data:{review:$('#textComment').val().trim(),shop_id:$('#hidShopId').val()},
        dataType: 'html',
        success : function(data)
        {
            $('#textComment').val('');
            $("#divReviews").html(data);
            $(".p3_comment").hide();


        }        
    });
}
function setReview()
{
    $.ajax({
        url:'ajax/insertReview.php',
        type:'POST',
        data:{review:$('#textComment').val().trim(),shop_id:$('#hidShopId').val()},
        dataType: 'html',
        success : function(data)
        {
            $('#textComment').val('');
            $("#divReviews").html(data);
            //$(".p3_comment").hide();


        }
    });
}
function updateReview()
{
    $.ajax({
        url:'ajax/updateReview.php',
        type:'POST',
        data:{review:$('#newComment').text(),shop_id:$('#hidShopId').val()},
        dataType: 'html',
        success : function(data)
        {
            //$('#textComment').val('');
            $("#divReviews").html(data);
            $(".p3_comment").hide();


        }
    });
}

function deleteComment()
{
    $.ajax({
        url:'ajax/deletComment.php',
        type:'POST',
        data:{shop_id:$('#hidShopId').val()},
        dataType: 'html',
        success : function(data)
        {
            $(".p3_comment").show();
            $("#divReviews").html(data);
        }
    });
}

function editComment()
{
    $.ajax({
        url:'ajax/editComment.php',
        type:'POST',
        data:{shop_id:$('#hidShopId').val()},
        dataType: 'html',
        success : function(data)
        {
            //$(".p3_comment").show();
            $("#divReviews").html(data);
        }
    });
}


