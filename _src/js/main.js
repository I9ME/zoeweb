/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */

jQuery(function($) {
	$(document).ready(function() {


// ==========================
// Menu Toggle
// ==========================

     $(".e-Toglle").click(function(event){
         event.preventDefault();
         varId = $(this).attr('id');
         varWidthWindow = $(window).width();
         
          if ($(this).hasClass('a-hzt')){
                varSide = 'a-hztResize';
             } else {
                varSide = '';
             }

            



         if ($(this).hasClass('u-isExpanded')){

            $(this).removeClass('u-isExpanded');
            $(this).addClass('u-isCollapsed');
                 $('#'+varId+'-container').stop().removeClass('u-isExpanded '+varSide);
                 $('#'+varId+'-container').stop().addClass('u-isCollapsed '+varSide);
                 //if( varId == 'MainNavigation' || varWidthWindow <= 480 ) { $('body').removeClass('u-isScrollOff'); }
                 $('#'+varId+'.SwitchIcon.u-isCollapsed .u-icon').show();
                 $('#'+varId+'.SwitchIcon .iconClose').hide();
                 $('.NavigationLink.Item-level1.is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded');
                 $('.NavigationLink.Item-level1.is-hasSubMenu, .Navigation--subMenu').addClass('u-isCollapsed');
                 
         }else{

           
             $('.u-contentHide, .u-contentHide--button, .Navigation .is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded').addClass('u-isCollapsed');
             $(this).removeClass('u-isCollapsed');
             $(this).addClass('u-isExpanded');
                 $('#'+varId+'-container').stop().removeClass('u-isCollapsed '+varSide);
                 $('#'+varId+'-container').stop().addClass('u-isExpanded '+varSide);
                 //if( varId == 'MainNavigation' || varWidthWindow <= 480 ) { $('body').addClass('u-isScrollOff'); }
                 $('#'+varId+'.SwitchIcon.u-isExpanded .u-icon').hide();
                 $('#'+varId+'.SwitchIcon .iconClose').show();
             }
     });
    
    //==========================    
    // SUBMENU Toggle
    //==========================

      $(".Navigation .is-hasSubMenu, .NavigationLink--backNav").click(function(event){
         event.preventDefault();
         varId = $(this).attr('id');
         varWidthWindow = $(window).width();
         
         if ( varId == 'BackNav' ) {

             $('.Navigation .is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded').addClass('u-isCollapsed');

         } else {


         if ($(this).hasClass('u-isExpanded')){
            
             $(this).removeClass('u-isExpanded');
             $(this).addClass('u-isCollapsed');
                 $('#'+varId+'--container').stop().removeClass('u-isExpanded');
                 $('#'+varId+'--container').stop().addClass('u-isCollapsed');

                 
         }else{
             $('.Navigation--menu .NavigationLink, .Navigation--menu .Navigation--subMenu').removeClass('u-isExpanded').addClass('u-isCollapsed');
             $(this).removeClass('u-isCollapsed');
             $(this).addClass('u-isExpanded');
                 $('#'+varId+'--container').stop().removeClass('u-isCollapsed');
                 $('#'+varId+'--container').stop().addClass('u-isExpanded');

             }
         }
     });



// =====================================
// .ScrollOn
// Detecta o Movimento da Barra de Rolagem e aplica a classe no body
// =====================================

$(window).scroll(function(){


     var scroll = jQuery(window).scrollTop();

     //Class ScrollOn
     if ( scroll > 0 ) {
      jQuery('body').addClass('u-isScrollOn');

     } else {
      jQuery('body').removeClass('u-isScrollOn');
     }

     //Class Fixed
    /* if ( scroll > 135 ) {
      jQuery('.Intro--blog-headerBar').addClass('u-isFixed');

     } else {
      jQuery('.Intro--blog-headerBar').removeClass('u-isFixed');
     }*/

});

// =====================================
// .ScrollFade
// Mostra os objetos conforme aparecem no scroll
// =====================================
 
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.u-isScrollFade').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height() + 100;
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                $(this).addClass('u-isScrollFade--on'); 
                    
            }
            
        }); 
    
    });


//=======================================================
//Aplica a animação no scroll mediante clique no menu
//=======================================================

    $(".u-isScrollDown").click(function(event){        
        event.preventDefault();
        
       

        $('html,body').animate({scrollTop:$(this.hash).offset().top - 0}, 1000);

          if ($(".Navigation--main").hasClass('u-isExpanded')){
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").removeClass("u-isExpanded")
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").addClass("u-isCollapsed");  
         }
        
        varHash = $(this).attr('href');

        
        /*if (location.hash == varHash) {
            $(this).addClass('u-isActive');
        } else {
            $(this).removeClass('u-isActive');
        }*/
        
        if(history.pushState) {
        
            history.pushState(null, null, varHash);
        
        }
        else {
        location.hash = '#myhash';
        window.location.hash = varHash;
        }

        
   });


//===================================
// RESIZE
//===================================

var headerSize = $('.Site-header').height();
var headerSize = 70;

//$( window ).resize(function() {
  $('.Intro--home').css({'padding-top' : headerSize});
//});


//====================================
// OWL CAROUSEL
//====================================

var break_sm = 768;
var break_md = 960;
var break_lg = 1200;

$('#cases-carousel--control').owlCarousel({
    loop:false,
    margin:50,
    dots: false,
    nav: true,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash',
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            margin:15,
            //nav:true
        },
         480:{
            items:4,
            margin:0,
            //nav:true
        },
        768:{
            items:4,
            margin:75,
            //nav:true
        },
        960:{
            items:4,
            loop:false,
            margin:100,
            //nav: true
        }
    } // Responsive

})

$('#cases-carousel').owlCarousel({
    loop:false,
    margin:50,
    dots: false,
    nav: false,
    navigation : false,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash',
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            //nav:false
        },
        768:{
            items:1,
            //nav:false
        },
        960:{
            items:1,
            loop:false,
            //nav:true,
        }
    }
})





$('#aplicacoes-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots: false,
    nav: true,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            //nav:true
        },
        768:{
            items:2,
            //nav:true
        },
        960:{
            items:3,
            //nav: true
        }
    } // Responsive

})

$('#clientes-carousel--control').owlCarousel({
    loop:false,
    margin:50,
    dots: false,
    nav: true,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            //nav:rue
        },
        479:{
            items:4,
            //nav:true
        },
        768:{
            items:5,
            //nav:true
        },
        960:{
            items:7,
            //nav: true
        }
    } // Responsive

})

$('#sinais-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots: true,
    nav: false,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            //nav:true
        },
        768:{
            items:3,
            //nav:true
        },
        960:{
            items:4,
            //nav: true
        }
    } // Responsive

})
$('#cases-videos-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots: true,
    nav: false,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            //nav:true
        },
        768:{
            items:3,
            //nav:true
        },
        960:{
            items:4,
            //nav: true
        }
    } // Responsive

})


$('#parcerias-carousel--control').owlCarousel({
    loop:false,
    margin:20,
    dots: false,
    nav: true,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash',
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            margin:0,
            //autoWidth: true,
            //nav:true
        },
         480:{
            items:2,
            //nav:true
        },
        768:{
            items:2,
        },
        960:{
            items:4,
        }
    } // Responsive

})

$('#parcerias-carousel').owlCarousel({
    loop:false,
    margin:50,
    dots: false,
    nav: false,
    navigation : false,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash',
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            //nav:false
        },
        768:{
            items:1,
            //nav:false
        },
        960:{
            items:1,
            loop:false,
            //nav:true,
        }
    }
})

$('#aplicativo-carousel').owlCarousel({
    loop:false,
    margin:0,
    dots: true,
    nav: false,
    navigation : false,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash',
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            //nav:false
        },
        768:{
            items:2,
            //nav:false
            loop:false,
        },
        960:{
            items:4,
            loop:false,
            //nav:true,
        }
    }
})

/*
$('#cases-cases-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots: true,
    nav: false,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            //nav:true
        },
        768:{
            items:3,
            //nav:true
        },
        960:{
            items:4,
            //nav: true
        }
    } // Responsive

})*/



// Persnonalizando os Botões de Navegação
$('#cases-carousel--control .owl-prev').html('<svg class="Pagination-items-item-icon u-icon iconArrowLeft"><use xlink:href="#iconArrowLeft"></use></svg>').addClass('navController navController--left navController--prev navController--button navController--border u-borderRadius50 navController--button--uniSize u-positionAbsolute is-animating u-isActionable ');
$('#cases-carousel--control .owl-next').html('<svg class="Pagination-items-item-icon u-icon iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg>').addClass('navController navController--right navController--next navController--button navController--border u-borderRadius50 navController--button--uniSize u-positionAbsolute is-animating u-isActionable ');

$('#parcerias-carousel--control .owl-prev').html('<svg class="Pagination-items-item-icon u-icon iconArrowLeft"><use xlink:href="#iconArrowLeft"></use></svg>').addClass('navController navController--left navController--prev navController--button navController--border u-borderRadius50 u-positionAbsolute is-animating u-isActionable ');
$('#parcerias-carousel--control .owl-next').html('<svg class="Pagination-items-item-icon u-icon iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg>').addClass('navController navController--right navController--next navController--button navController--border u-borderRadius50 u-positionAbsolute is-animating u-isActionable ');


$('#aplicacoes-carousel .owl-prev').html('<svg class="NavigationButton--controllCarousel u-icon iconArrowLeft"><use xlink:href="#iconArrowLeft"></use></svg>').addClass('navController navController--left navController--prev navController--button navController--border navController--above u-borderRadius50 navController--button--uniSize u-positionAbsolute is-animating u-isActionable ');
$('#aplicacoes-carousel .owl-next').html('<svg class="NavigationButton--controllCarousel u-icon iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg>').addClass('navController navController--right navController--next navController--button navController--border navController--above u-borderRadius50 navController--button--uniSize u-positionAbsolute is-animating u-isActionable ');

$('#clientes-carousel--control .owl-nav').addClass('Pagination Pagination--appendJs u-marginTop--inter u-marginBottom--inter u-flex u-justifyContentCenter');
$('#clientes-carousel--control .owl-prev').html('<svg class="Pagination-items-item-icon u-icon iconArrowLeft"><use xlink:href="#iconArrowLeft"></use></svg>').addClass('navController navController--left navController--prev navController--button navController--button--largeSize navController--border u-borderRadius50 is-animating u-marginRight--inter');
$('#clientes-carousel--control .owl-next').html('<svg class="Pagination-items-item-icon u-icon iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg>').addClass('navController navController--right navController--next navController--button navController--button--largeSize navController--border u-borderRadius50 is-animating u-marginRight--inter');
$('#clientes-carousel--control .owl-nav').append('<a class="navController navController--center  navController--all  navController--button  navController--border ReadMore ReadMore--background  Button ButtonLink u-lineHeight0 hover is-animating u-marginRight--inter" href="/cases/"><span class="ShowText">VER TODOS</span></a>');

// Switch de Ativo / Inativo
var hashUrl = window.location.hash;
$(hashUrl+'--ControllLink').addClass('active');
var owl = $('.owl-carousel');
owl.owlCarousel();
owl.on('changed.owl.carousel', function(event) {
    //location.hash = event.property.value;
  var hashUrl = window.location.hash;
  $('.Section-navigation-items-item, .Pagination .navController').removeClass('active');
  $(hashUrl+'--ControllLink').addClass('active');
})



// END


//======================================
// VIDEO
//======================================

var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})


//=======================================
// LIGHTBOX
//=======================================


                
             /*   $(this).animate({'opacity':'1'},250);
                $('.clearDiv').hide();
                $(this).addClass('show');*/
                    


// /*=========================================================================================
// // CLOSE FUNCTION
// =========================================================================================*/

	});
});


// Abre o Lightbox
function LightboxCall(iFrame) {
  //alert( "clicked" );
  $('#Lightbox--container').removeClass('Lightbox--inactive');
  $('#Lightbox--container').addClass('Lightbox--active');
  $('.Lightbox-window-content').html( iFrame );
}
//$( ".LightboxCall" ).on( "click", LightboxCall );


// Fecha o lightbox quando a tecla ESC é pressionada
function KeyUpEsc(evt) {
 
 if (evt.keyCode == 27) {
       $('#Lightbox--container').removeClass('Lightbox--active');
       $('#Lightbox--container').addClass('Lightbox--inactive');
       $('.Lightbox-window-content').html( '' );
    }
}

$(document).on( "keyup", KeyUpEsc );

// Mais formas de Fechar o LightBox

function LightboxClose() {
  //alert( "clicked" );
  $('#Lightbox--container').removeClass('Lightbox--active');
   $('#Lightbox--container').addClass('Lightbox--inactive');
   $('.Lightbox-window-content').html( '' );
}

$( ".LightboxClose" ).on( "click", LightboxClose );

/* 
 $(document).on('keyup',function(evt) {
    if (evt.keyCode == 27) {
       $('#Lightbox--container').removeClass('Lightbox--active');
       $('#Lightbox--container').addClass('Lightbox--inactive')
    }
});*/