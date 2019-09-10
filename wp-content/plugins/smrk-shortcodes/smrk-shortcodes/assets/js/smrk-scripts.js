jQuery( function(){
    jQuery('.link_copy').click( function(){
        jQuery(this).select()
    })
});



function codeAddress() {
    var shortName = jQuery('input[name=title]').val();
     jQuery(document).ready(function(){
            if (window.location.href.indexOf("&id") > -1) {
                jQuery('.url_link').hide();
                jQuery('.new_course').hide();
                jQuery('button.table-show').show();
                document.title = 'Изменить ' + shortName;
            } else {
                jQuery('button.table-show').hide();
                jQuery('.new_course').show();
                jQuery('.url_link').show();
            }
    });
}
window.onload = codeAddress;

 jQuery( function() {
      jQuery("#sortOrder").datepicker({
            inline: true,
            changeYear: true,
            dateFormat: 'yy/mm/dd',
            closeText: 'Закрыть',
            prevText: '&#x3c;Пред',
            nextText: 'След&#x3e;',
            currentText: 'Сегодня',
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            weekHeader: 'Нед',
            firstDay: 1,
    });
} );



jQuery(function () {
    jQuery('#place').on('click', function () {
        var text = jQuery('#units');
        var texttt = jQuery(this).text();
        text.val(texttt);
    });




    jQuery('#price_b').on('click', function () {
        var text = jQuery('#price_before');
        var texttt = jQuery(this).text();
        text.val(texttt);
    });



jQuery(document).ready(function() {
  jQuery('#price_before').focus(function() {
        if (jQuery('#price_before').val().length >= 1) {
            jQuery('#units').val('грн');
        };
    });


 jQuery('#price_before').blur(function(){
        if (jQuery('#price_before').val().length >= 1) {
            jQuery('#units').val('грн');
        };
});
 });

    jQuery('#place_two').on('click', function () {
        var text = jQuery('#units');
        var texttt = jQuery(this).text();
        text.val(texttt);
    });
    jQuery('#place_three').on('click', function () {
        var text = jQuery('#units');
        var texttt = jQuery(this).text();
        text.val(texttt);
    });
    jQuery('#place_style').on('click', function () {
        var text = jQuery('#disp');
        var texttt = jQuery(this).text();
        text.val(texttt);
    });
     jQuery('#place_timer').on('click', function () {
        var text = jQuery('#Timer');
        var texttt = jQuery(this).text();
        text.val(texttt);
    });
    jQuery('#clear').on('click', function () {
        var text = jQuery('#disp');
        text.val('');
    });
    jQuery('#clear_two').on('click', function () {
        var text = jQuery('#Timer');
        text.val('');
    });
});











jQuery( function(){
    jQuery('button.table-show').toggle( function(){
        jQuery('.table-out').fadeIn( "fast", "linear" )
         jQuery('button.table-show').text('Скрыть шорткоды')
     .stop();
    }, function(){
        jQuery('.table-out').fadeOut( "fast", "linear" )
      jQuery('button.table-show').text('Показать шорткоды')
     .stop();
    });
});

jQuery( function(){
    jQuery('.link_copy').click( function(){
        jQuery(this).select()
    })
});
