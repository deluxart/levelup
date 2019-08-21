<script>

    function hasClass(el, className)
    {
        if (el.classList)
            return el.classList.contains(className);
        return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
    };

    function addClass(el, className)
    {
        if (el.classList)
            el.classList.add(className)
        else if (!hasClass(el, className))
            el.className += " " + className;
                $('.force-checked').length-1;
    };

    function removeClass(el, className)
    {
        if (el.classList)
            el.classList.remove(className)
        else if (hasClass(el, className))
        {
            var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
            el.className = el.className.replace(reg, ' ');
        }
    };

    function toggleClass(el, className) {
        if (hasClass(el, className))
            removeClass(el, className);
        else
            addClass(el, className);
    };

    var SoldMinuserDone = { value: false };
    window.SoldMinuserDone = SoldMinuserDone;
   function SoldMinuser() {
        if (SoldMinuserDone.value)return;
      SoldMinuserDone.value = true ;
      var count_ctn = document.getElementsByClassName('SoldNumber')[0];
      var count_txt = count_ctn.innerText;
      var count_num = parseInt( count_txt ) - 1;
      count_ctn.innerText = count_num;
   }

    function checkAvatar (a) {

        if ( hasClass(a,'force-checked') ) return;

        SoldMinuser ();

        var checked = document.getElementsByClassName('checked');
        if ( !!checked.length )
            removeClass(checked[0], 'checked');

        toggleClass(a,'checked');
    };
</script>


<div class="SliderMainbox">
    <?

    $avatars_count = 12;
    global $wpdb;
    $result =  $wpdb->get_results('SELECT * FROM smrkv_courses WHERE url like "'.$key1.'%"');
    $dat_res =  get_object_vars($result[0]);
    $sold = $dat_res['Sold'];
    $alreadySaled =
        intval($sold);

    for ($i=0; $i < $avatars_count; $i++) {
        $saledClass = ( $i < $alreadySaled ) ? "force-checked" : "";
    ?>
        <div class="SliderTarget <?=$saledClass;?>" onclick="checkAvatar(this);">
            <div><img src="https://levelup.ua/wp-content/uploads/2018/emojie/emojie-<?=$i;?>.jpg" alt=""></div>
        </div>
    <? } ?>
</div>
