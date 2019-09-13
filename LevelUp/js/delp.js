
function explode(){


jQuery('p br').each(function(){
    if( jQuery(this).length >= 0 ) {
        jQuery(this).remove();
}
})


}
setTimeout(explode, 4000);
