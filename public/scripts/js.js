
$(document).ready(function(){
    $(window).bind('resize',flex);
    flex();
});

function flex(){
    $('#body').css('margin-top',$('#header').height());
    $('.left-bracket').css('margin-top',-($('.welcome-message').height()*1.12));
    $('.right-bracket').css('margin-top',-($('.welcome-message').height()*1.12));
    $('.service-bubble p').each(function(){
        if($(this).hasClass('message')){
            var pt = ($(this).parent().height()*.5)-25;
            $(this).css('padding-top',pt);
        }//if
        else {
            $(this).css('padding-top',$(this).parent().height()*.45);
        }//el
    });

    if($('.starting-step').length){
        var max=0;
        $('.starting-step').each(function(){
            if($(this).height()>max)
                max=$(this).height();
        });
        $('.starting-step').height(max);
    }//if

    menu.flex();

}//flex

var messageSlide = {

    listen:function(){
        if(!$('.message-slide').length){
            return;
        }//if

        $('.service-bubble').hover(function(){
            if($(this).children('.title').hasClass('hide')){
                $(this).children('.message').addClass('hide');
                $(this).children('.title').removeClass('hide');
            }//if
            else {
                $(this).children('.title').addClass('hide');
                $(this).children('.message').removeClass('hide');
            }
        });


        setInterval(function(){
           var active = $('.message-slide p.active'); 
           if($(active).next().length){
                $(active).next().addClass('active');
           }//if
           else {
                $('.message-slide p:first-child').addClass('active');
           }//el

            $(active).removeClass('active');
        },3000);

    }()

}//messsageSlide


var menu = {
    listen:function(){
        if(!$('.top-bar').length){
            return;
        }//if

        var url = window.location.pathname;

        var slashIndex = url.indexOf('/',1);
        if(slashIndex!=-1)
            url = url.substring(0,slashIndex);

        var match=false;
        if(url==''){ url='/';}
        $('.main-nav li').each(function(){
            if(match){return;}

            var lurl = $(this).children('a').eq(0).attr('href');
            lurl = lurl.substring(0,url.length);

            if(url==lurl){
                $(this).addClass('active');
                match=true;
                return;
            }//if
        });

        if(!$('div.docs-menu').length){
            return;
        }//if

        url = window.location.pathname;
        match = false;
        $('div.docs-menu li a').each(function(){
            if(match){return;}
            if($(this).attr('href')==url){
                $(this).addClass('active');
                match=true;
            }//if
            
        });


        $('.docs-menu').on('click','.divide',function(){
            $(this).next().toggleClass('hide');
        });

    }(),//listen
    flex:function(){
        if(!$('.menu-wrap').length){
            return;
        }//if

        var wwidth = $(window).width() / parseFloat($("body").css("font-size"));

        if(wwidth<40.063){
            $('.menu-wrap').addClass('hide');
        }//if
        else {
            $('.menu-wrap').removeClass('hide');
        }//el

    }//flex
}//menu





function shake(div){
    var interval = 100;
    var distance = 10;
    var times = 4;

    $(div).css('position','relative');

    for(var iter=0;iter<(times+1);iter++){
        $(div).animate({ left: ((iter%2==0 ? distance : distance*-1))},interval);
    }//for

    $(div).animate({ left: 0},interval);

}//shake 


if (!String.prototype.format) {
    String.prototype.format = function() {
        var args = arguments;
        return this.replace(/{(\d+)}/g, function(match, number) { 
            return typeof args[number] != 'undefined' ? args[number] : match ;
        });
                                };
}





var setupSubNav = function(){
    if(!$('.magellan-container').length || $('body.docs-intro').length)
        return;

    var container = '.magellan-container';
    var entry = '<dd data-magellan-arrival="mlink-{0}"><a class="nav-link" href="#mlink-{0}">{1}</a></dd>'; 
    var content='';
    var types=['h1','h2','h3','h4','h5','h6'];
    var iter=0;
    for(var i=0;i<types.length;i++){
        $('.docs-content '+types[i]).each(function(){
            $(this).before('<a name="'+iter+'" id="mlink-'+iter+'"></a>');
            $(this).attr('data-magellan-destination','mlink-'+iter);
            content+=entry.format(iter,$(this).text());
            iter++;
        });
    }//for

    $(container+' .sub-nav').html(content);
}();



