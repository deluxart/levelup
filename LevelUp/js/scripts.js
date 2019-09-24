// Поиск
    jQuery('.lux_search > .button').click(function () {
        jQuery('.search-open').toggleClass("open");
        // jQuery('.search-open input').focus();
        jQuery('.search-open-bg').toggleClass("open").css({display: 'block'});
    });
    jQuery('#search-modal .btnClose, #search-modal .modalClose, .search-open .icon--close').click(function () {
        jQuery('.search-open').toggleClass("open");
        jQuery('.search-open-bg').toggleClass("open");
        jQuery('.orig').val('');
        jQuery('.search-open-bg').css({display: 'none'});
    });

jQuery(document).ready(function() {
  jQuery('.orig').focus(function() {
      jQuery('.search-open').addClass("open-full");
      //return false;
    });


 jQuery('.orig').blur(function(){
    if( !jQuery(this).val() ) {
     jQuery('.search-open').removeClass("open-full");
    }
});
 });
// Конец - Поиск
// }).delay(1000);
jQuery('.sg-show-popup').click(function() {
setTimeout(function(){
		jQuery('.sgpb-popup-close-button-6').appendTo( jQuery('div#sgpb-popup-dialog-main-div') );
	},100);

});

jQuery('.wpcf7-form-control').focus(function() {
      jQuery(this).closest('div').addClass('input-effect');
          }).
          blur(function() {
     	jQuery(this).closest('div').removeClass('input-effect');
});


// Открытие меню при наведении
// jQuery('.action--menu').hover(function () {
// 	window.initHandler = setTimeout( handler, 300 );
// 	function handler() {
// 				jQuery('.action--menu').click();
// 				jQuery( "body" ).removeClass( "fullscreen-nav" );
// 	}
// }, function () {
// 	clearTimeout( window.initHandler );
// });
// Конец - Открытие меню при наведении



jQuery('.tg-item-excerpt').each(function() {
  var e = jQuery(this);
	var fix = e.html().replace('�', "");
	e.html(fix);
});

// Закрытие попапа после успешной отправки формы
document.addEventListener( 'wpcf7mailsent', function( event ) {

    if ( '1073' == event.detail.contactFormId ) {
					function explode(){
					  jQuery(".sgpb-popup-close-button-6").click();
					}
					setTimeout(explode, 1500);
    }
}, false );

document.addEventListener( 'wpcf7mailsent', function( event ) {

    if ( '1050' == event.detail.contactFormId ) {
					function explode(){
					  jQuery(".sgpb-popup-close-button-6").click();
					}
					setTimeout(explode, 1500);
    }
}, false );

document.addEventListener( 'wpcf7mailsent', function( event ) {

    if ( '1172' == event.detail.contactFormId ) {
					function explode(){
					  jQuery(".sgpb-popup-close-button-6").click();
					}
					setTimeout(explode, 1500);
    }
}, false );
// Конец - Закрытие попапа после успешной отправки формы

// Меню для мобильных устройств
jQuery(function(){
		var trigger_show = jQuery('.snj_sandwitch_btn_show');
		var trigger_hide = jQuery('.snj_sandwitch_btn_hide');
		var sndwch = jQuery('#snj_sandwitch');

		if ( !sndwch.length ) return;
		jQuery(trigger_show).one('click',function(){
			_showMenu();
		});

		function _showMenu() {
			trigger_show.toggleClass('snj_sandwitch_shown');
			trigger_hide.toggleClass('snj_sandwitch_shown');
			sndwch.stop(1,1).fadeIn(function(){
				jQuery(trigger_hide).one('click',function(){
		            _hideMenu();
		        });
			});
			_resizeSndwch();
		};

		function _hideMenu() {
			trigger_show.toggleClass('snj_sandwitch_shown');
			trigger_hide.toggleClass('snj_sandwitch_shown');
			sndwch.stop(1,1).fadeOut(function(){
				jQuery(trigger_show).one('click',function(){
		            _showMenu();
		        });
			});
		};

		function _resizeSndwch() {
				sndwch.find('.snj_sandwitch-menu')
				.css(
					'margin-top',
					((sndwch.height() - sndwch.find('.snj_sandwitch-menu').height())/2) + "px"
				);
		};
		jQuery(window).resize(_resizeSndwch);
});

setTimeout(function(){
	jQuery(window).scrollTop(100);
	setTimeout(function(){
		jQuery(window).scrollTop(0);
	},10);
},100);

jQuery( "#listCourses" ).click(function() {
  jQuery(".buttonModalCourses").click();
	jQuery(".snj_sandwitch_shown").click();
});

jQuery(".navbar-toggler").click(function(){
        jQuery( "body" ).addClass( "snj_nav" );
});

jQuery(".snj_sandwitch_btn_hide").click(function(){
        jQuery( "body" ).removeClass( "snj_nav" );
});
// Конец - меню для мобильных устройств



// Маска для инпута номера телефона
jQuery(window).load(function() {
    jQuery(document).each(function(){
      jQuery('#tel22, #tel23, #tel24').mask('+380999999999');
      jQuery('#tel-event').mask('+38 (099) 999-99-99');
    });
});

// Конец - Маска для инпута номера телефона


setInterval(function(){jQuery('.saleRow').toggleClass('animate')}, 3000);

jQuery(".SliderTarget").click(function(){
	var fc = jQuery(this).hasClass('checked');
		if (fc == true) {
			jQuery("#tel22").focus();
		}
});

jQuery(".SliderTarget.force-checked").click(function(){
jQuery(".SliderTarget").removeClass('checked');
});

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}




if (jQuery("div").is("#deadlinetext")) {
		function func() {
			var a = document.getElementById('deadlinetext').innerText;
			initializeClock('clockdiv', a);
		}

}

setTimeout(func, 10);

var myFuncSold = 12 -  jQuery('.force-checked').length;
 jQuery('.SoldNumber').text(myFuncSold);



    /* Light YouTube Embeds by @labnol */
    /* Web: http://labnol.org/?p=27941 */

    document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = labnolThumb(v[n].dataset.id);
                div.onclick = labnolIframe;
                v[n].appendChild(div);
            }
        });

    function labnolThumb(id) {
        // var thumb = '<img src="https://levelup.ua/wp-content/themes/LevelUp/img/hqdefault.jpg">',
        var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }

    function labnolIframe() {
        var iframe = document.createElement("iframe");
        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }

jQuery(document).ready(function($){
	var contentSections = jQuery('.cd-section'),
		navigationItems = jQuery('#cd-vertical-nav a');

	updateNavigation();
	jQuery(window).on('scroll', function(){
		updateNavigation();
	});

	//smooth scroll to the section
	navigationItems.on('click', function(event){
        event.preventDefault();
        smoothScroll(jQuery(this.hash));
    });
    //smooth scroll to second section
    jQuery('.cd-scroll-down').on('click', function(event){
        event.preventDefault();
        smoothScroll(jQuery(this.hash));
    });

	function updateNavigation() {
		contentSections.each(function(){
			$this = jQuery(this);
			var activeSection = jQuery('#cd-vertical-nav a[href="#'+$this.attr('id')+'"]').data('number') - 1;
			if ( ( $this.offset().top - jQuery(window).height()/2 < jQuery(window).scrollTop() ) && ( $this.offset().top + $this.height() - jQuery(window).height()/2 > jQuery(window).scrollTop() ) ) {
				navigationItems.eq(activeSection).addClass('is-selected');
			}else {
				navigationItems.eq(activeSection).removeClass('is-selected');
			}
		});
	}

	function smoothScroll(target) {
        jQuery('body,html').animate(
        	{'scrollTop':target.offset().top - 86},
        	600
        );
	}
});


// Для секции "Учеба в Level Up — это:" - клонирование текста
jQuery(document).ready(function() {
    jQuery('#advantages #outputText > div').text(jQuery('.slick-active #inputText').text());

    jQuery('.odinochnyy-slider-prepodovatel').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    jQuery('#advantages #outputText > div').hide();
        setTimeout(function(){
            jQuery('#advantages #outputText > div').fadeIn().text(jQuery('.slick-active #inputText').text());
        },100);
    });
});
// Для секции "Учеба в Level Up — это:" - клонирование текста


// Клонирование заголовков для секций

jQuery('#loyality').each(function() {
    jQuery(this).prepend('<div id="outputText"><div></div></div>');
    jQuery('#loyality #outputText > div').text(jQuery('#loyality h2').text());
});

jQuery('#course-result').each(function() {
    jQuery(this).prepend('<div id="outputText"><div></div></div>');
    jQuery('#course-result #outputText > div').text(jQuery('#course-result h2').text());
});
// Конец - Клонирование заголовков для секций





jQuery('.one-course').each(function() {

    jQuery(this).find(".opened").each(function() {
        var e = jQuery(this);
        var fix = e.html().replace('style="display: none"', "closed");
        e.html(fix);
    });


        if (jQuery(this).find(".opened").text().length > 1){
            //
        } else {
             jQuery(this).addClass('open');
        }

});


// Для новых новостей
jQuery(document).ready(function($) {
    var tagSearch = jQuery('.entry-content').find('.meet-reg').text().length;
    if (tagSearch >=1) {
        jQuery('.entry-content').addClass('new-style');
    }

});




jQuery('.dev-studio').each(function() {
    function Line(){

    var wrap = $('.dev-studio .wrap-lines');

    var item1 = wrap.find('.item').eq(0),
        num1 = item1.find('.num'),
        num1X = num1.offset().left+num1.width()/2,
        num1Y = num1.offset().top+num1.height()/2;

    var item2 = wrap.find('.item').eq(1),
        num2 = item2.find('.num'),
        num2X = num2.offset().left+num2.width()/2,
        num2Y = num2.offset().top+num2.height()/2;

    var item3 = wrap.find('.item').eq(2),
        num3 = item3.find('.num'),
        num3X = num3.offset().left+num3.width()/2,
        num3Y = num3.offset().top+num3.height()/2;

    var item4 = wrap.find('.item').eq(3),
        num4 = item4.find('.strock-center'),
        num4X = num4.offset().left+num4.width()/2,
        num4Y = num4.offset().top+num4.height()/2;




    var svgLine = $('#svg-line');
            svgLine.offset({top: 0, left:0})

    var line12 = svgLine.find('.line-1-2'),
        line23 = svgLine.find('.line-2-3'),
        line34 = svgLine.find('.line-3-4');

    line12.attr({'x1': num1X, 'y1': num1Y, 'x2': num2X, 'y2': num2Y});
    line23.attr({'x1': num2X, 'y1': num2Y, 'x2': num3X, 'y2': num3Y});
    line34.attr({'x1': num3X, 'y1': num3Y, 'x2': num4X, 'y2': num4Y});

    }
    Line();
    $(window).on('load resize', function () {
        Line();
    });
});


// Tooltip bootstrap
jQuery(document).ready(function(){
    jQuery('[data-toggle="tooltip"]').tooltip();
});
// End Tooltip boostrap


// Цвет шапки на DEV-Studio
jQuery(function(){
 jQuery(window).scroll(function() {
  var topHead = jQuery(document).scrollTop();
  if (topHead > 70) {
  jQuery('.page-id-4713 #header').removeClass('header-color');
  jQuery('.page-id-6586 #header').removeClass('header-color');
    jQuery('.home #header').removeClass('header-color');
    jQuery('.page-template-page-event #header').removeClass('header-color');

  } else {
    jQuery('.page-id-4713 #header').addClass('header-color');
    jQuery('.page-id-6586 #header').addClass('header-color');
    jQuery('.home #header').addClass('header-color');
    jQuery('.page-template-page-event #header').addClass('header-color');
}
 });
});
// End - Цвет шапки на DEV-Studio


// Табы для IT-Английский
jQuery(document).ready(function(){

    jQuery('ul.en-tabs li').click(function(){
        var tab_id = jQuery(this).attr('data-tab');

        jQuery('ul.en-tabs li').removeClass('current');
        jQuery('.tab-content').removeClass('current');

        jQuery(this).addClass('current');
        jQuery("#"+tab_id).addClass('current');
    })

});
// Табы для IT-Английский

// Custom scrollbar
        (function($){
            $(window).on("load",function(){

                $.mCustomScrollbar.defaults.scrollButtons.enable=true; //enable scrolling buttons by default
                $.mCustomScrollbar.defaults.axis="yx"; //enable 2 axis scrollbars by default

                $(".about-text").mCustomScrollbar({theme:"dark-3"});

                $(".all-themes-switch a").click(function(e){
                    e.preventDefault();
                    var $this=$(this),
                        rel=$this.attr("rel"),
                        el=$(".content");
                    switch(rel){
                        case "toggle-content":
                            el.toggleClass("expanded-content");
                            break;
                    }
                });

            });
        })(jQuery);
// End Custom scrollbar


jQuery(document).keydown(function(e) {

    var open_jivo = jQuery('.globalClass_ET .label_39').hasClass('_chat_3K');
    if (e.keyCode == 27 && open_jivo == true) {
             jQuery('.closeIcon_1U').click();
    }
});

jQuery( function(){
    jQuery('.mail_copy').click( function(){
        jQuery(this).select()
    })
})

// Counters for event page
jQuery(document).ready(function () {
    var show = true;
 if (jQuery("#counters").length) {
    var countbox = "#counters";
    jQuery(window).on("scroll load resize", function () {
        if (!show) return false;
        var w_top = jQuery(window).scrollTop();
        var e_top = jQuery(countbox).offset().top;
        var w_height = jQuery(window).height();
        var d_height = jQuery(document).height();
        var e_height = jQuery(countbox).outerHeight();
        if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
            jQuery('.benefits__number').css('opacity', '1');
            jQuery('.benefits__number').spincrement({
                thousandSeparator: "",
                duration: 1200
            });
            show = false;
            jQuery('#counters .loading').addClass('active');
        }
    });
};
});
// Counters for event page


new WOW().init();
jQuery(document).ready(function () {
    var linkReg = window.location.href.indexOf("#open-reg") > -1;
    var linkGl = window.location.href.indexOf("#google") > -1;
    var linkFb = window.location.href.indexOf("#fb") > -1;
    var linkMail = window.location.href.indexOf("#mail") > -1;
    var event_img = jQuery('.has-post-thumbnail img').attr('src');
    var event_price = jQuery('.event_price').text();
    var event_date = jQuery('.event_date').text();
    var event_time = jQuery('.event_time').text();
    var link_liqpay = jQuery('.post-form-block > .liqpay').text();

    if (linkFb == true) {
        jQuery("#open-reg .sg-show-popup").click();
        jQuery('#hash').val('Facebook (fb)');
    } else if (linkGl == true) {
        jQuery("#google .sg-show-popup").click();
        jQuery('#hash').val('Google my business (google)');
    } else if (linkReg == true) {
        jQuery("#open-reg .sg-show-popup").click();
        jQuery('#hash').val('Внешние ресурсы (open-reg)');
    } else if (linkMail == true) {
       jQuery("#open-reg .sg-show-popup").click();
        jQuery('#hash').val('Почтовые рассылки (mail)');
    } else {
        jQuery('#hash').val('С новости');
    }

    jQuery('#event_img').val(event_img);
    jQuery('#link_liqpay').val(link_liqpay);
    jQuery('#event_price').val(event_price);
    jQuery('#event_date').val(event_date);
    jQuery('#event_time').val(event_time);
});


// Uneversal spoiler
jQuery('.spoiler > .head').on('click', function(e){
  jQuery('.spoiler > .cont').stop().slideUp('slow');
  jQuery('.spoiler > .head').not(this).removeClass('active');
  jQuery(this).parent('div.spoiler').children('.cont').stop().slideToggle('slow').toggleClass('active');
  jQuery(this).toggleClass('active');
  e.preventDefault();
});

// For tables
jQuery('#courses_schedulle_tbl .price-new-bottom').each(function(i) {
    if (jQuery(this).children('span.price-table-portfolios-new').text().length <= 3) {
        jQuery(this).addClass('d-none');
        jQuery(this).closest('.table-price').children('p.price-new-top').addClass('d-none');
    }
});
// For tables

// for blocks
jQuery('.course_card_block .price-new-bottom').each(function(i) {
    if (jQuery(this).children('span.nprice').text().length <= 3) {
        jQuery(this).addClass('d-none');
        jQuery(this).closest('.price').children('p.price-new-top').addClass('d-none');
    }
});
// for blocks


// for pages
jQuery('.saleRow .saleBottom').each(function(i) {
    if (jQuery(this).children('span.price').text().length <= 3) {
        jQuery(this).closest('.saleRow').addClass('d-none');
        // jQuery(this).closest('.price').children('p.price-new-top').addClass('d-none');
    }
});
// for pages






// Модалка для мероприятия
jQuery(document).ready(function(){
    jQuery(".event_modal .close-icon").click(function () {
    jQuery.cookie("popup", "", { expires:0, path: '/' });

            jQuery('.event_modal').removeClass("open");
            setTimeout(function(){
                 jQuery('.event_modal').hide();
            }, 200);
            jQuery('.event_modal-bg').removeClass("open");
            jQuery('.event_modal-bg').css({display: 'none'});

    });

    if ( jQuery.cookie("popup") == null )
    {
    setTimeout(function(){

            jQuery('.event_modal').show();
            setTimeout(function(){
                 jQuery('.event_modal').addClass("open");
            }, 200);
            jQuery('.event_modal-bg').fadeIn().addClass("open").css({display: 'block'});

    }, 12000)
    }
    else {
      jQuery(".event_modal").hide();
    }
    });
// Модалка для мероприятия


// Сокращение заголовков у новостей
var desc_short = function () {
    jQuery(".tg-item-title.tg-element-3 > a").text(function(i, text) {
      if (text.length >= 50) {
        text = text.substring(0, 50);
        var lastIndex = text.lastIndexOf(" ");       // позиция последнего пробела
        text = text.substring(0, lastIndex) + '...'; // обрезаем до последнего слова
      }
      jQuery(this).text(text);
    });
  };

  desc_short();
  // Сокращение заголовков у новостей





jQuery('#courses_schedulle_tbl tr').each(function() {
    var course_line_id = jQuery(this).attr('data-id');

    if (course_line_id == 1) {
        jQuery(this).addClass('d-none');
    } else if (course_line_id == 0){
        jQuery(this).removeClass('d-none');
    }
});



jQuery('.conf_tabs > div').click(function(event) {
    event.preventDefault();
    jQuery('.conf_tabs > div').removeClass('active');
    jQuery(this).addClass('active');
});
