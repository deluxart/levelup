<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage LevelUp
 * @since LevelUp 1.0
 */
?>
<?php
    $options = get_option( 'levelup_theme_options' );
    $options_modal = get_option( 'event_modal_options' );
?>
	</div><!-- .site-content -->

<footer id="level_footer">
	<div class="container">
		<div class="content">
			<div class="block">
                <?php
                        if ( function_exists('dynamic_sidebar') )
                            dynamic_sidebar('footer-1');
                ?>
			</div>
			<div class="block">
                <?php
                        if ( function_exists('dynamic_sidebar') )
                            dynamic_sidebar('footer-2');
                ?>
			</div>
			<div class="block">
                <?php
                        if ( function_exists('dynamic_sidebar') )
                            dynamic_sidebar('footer-3');
                ?>
			</div>
			<div class="block">
                <?php
                        if ( function_exists('dynamic_sidebar') )
                            dynamic_sidebar('footer-4');
                ?>
			</div>
        </div>
        <div class="text-copyright">
            <strong><span class="blue">LEVELUP</span>™ 2019</strong> Учебный IT-центр
        </div>
	</div>
</footer>



</div><!-- .site -->

<div style="display: none;" itemscope itemtype="http://schema.org/Organization">
    <meta itemprop="name" content="Учебный IT-центр Level Up" />
    <link itemprop="url" href="https://levelup.ua" />
    <link itemprop="logo" href="https://levelup.ua/wp-content/uploads/2019/07/lvlup_logo_bez_fona.png" />
    <meta itemprop="description" content="Level UP - качественное и доступное IT-образование. Преподаватели-практики, актуальная программа обучения, регулярные мастер-классы. Практическое обучение и индивидуальный подход к студентам. Обучение на IT-курсах проходит на высоком уровне. Получите перспективную профессию и станьте на уровень выше! ☎ (096) 084-25-13" />
    <link itemprop="image" href="https://levelup.ua/wp-content/uploads/2019/07/Snymok-krana-2019-07-23-v-10.42.51.png" />
<div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
    <meta itemprop="addressLocality" content="Днепр, Украина" />
    <meta itemprop="postalCode" content="49101" />
    <meta itemprop="streetAddress" content="ул. Троицкая, 21Г." />
</div>

<meta itemprop="telephone" content="+38 (099) 731 83 85" />
<meta itemprop="telephone" content="+38 (096) 084 25 13" />
<meta itemprop="email" content="info@levelup.ua" />


<link itemprop="sameAs" href="https://www.instagram.com/levelup_ua/" />
<link itemprop="sameAs" href="https://www.youtube.com/channel/UCDV6GGLn2dZHOiF9Bs3YGRQ" />
<link itemprop="sameAs" href="https://www.facebook.com/levelupdpua/" />
<link itemprop="sameAs" href="https://t.me/levelupit" />

<form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
    <meta itemprop="target" content="https://levelup.ua/?s={search_term_string}"/>
    <input itemprop="query-input" type="text" required name="search_term_string"/>
</form>
</div>


<div class="search-open-bg"></div>
<div id="search-modal" class="search-open">
    <div class="btnClose"></div>
    <div class="close-search"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg></div>
    <div class="modalClose"></div>
    <div class="search-modal-inner">
        <p class="text-center">Введите слово, чтобы начать поиск</p>
    <div class="container search">
        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
    </div>
    </div>
</div>


<div class="subscribe-open-bg"></div>
<div id="subscribe-modal" class="subscribe-open">
    <div class="btnClose"></div>
    <div class="close-modal"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg></div>
    <div class="modalClose"></div>
    <div class="subscribe-modal-inner">
            <div class="subscribe-content">
                <div class="top">
                    <div class="widget first">
                        <h4>Ближайшие ивенты:</h4>
                        <?php echo do_shortcode('[recent_posts num="3" cat="2874"]'); ?>
                        <div class="read_btn"><a href="https://levelup.ua/novosti">Смотреть все <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                    </div>
                    <div class="form">
                        <h2>Будь вкурсе!</h2>
                        <p>Актуальные новости и мероприятия в еженедельной рассылке от Level Up</p>
                        <div class="form-cont">
                        <?php echo do_shortcode('[contact-form-7 id="294" title="Футер (Форма подписки)"]'); ?>
                        </div>
                    </div>
                    <div class="widget last">
                        <h4>Последние новости:</h4>
                        <?php echo do_shortcode('[recent_posts num="3" cat="2205"]'); ?>
                        <div class="read_btn"><a href="https://levelup.ua/novosti">Смотреть все <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="bottom">* Вы так-же в любой момент с легкостью сможете отписаться от нашей рассылки</div>
            </div>
    </div>
</div>




<?php if ( $options_modal[ativate_event_modal] == 1) { ?>
<!-- Модальное окно мероприятия -->
<div class="event_modal <?php echo $options_modal[ativate_event_modal];?>">
	<div class="cont">
		<div><img src="<?php echo $options_modal[image_url];?>" alt=""></div>
		<div class="content">
			<h4><?php echo $options_modal['event_modal_title']; ?></h4>
			<div class="date-block">
				<div><strong>2 листопада 10:00</strong>вул. Троїцька, 21Г, IT-центр Level Up</div>
				<div class="date-icon"><img src="https://levelup.ua/wp-content/uploads/2019/07/event-date-and-time-symbol.svg" alt=""></div>
			</div>
			<div class="feed-form">
				<?php echo do_shortcode('[contact-form-7 id="6071" title="Open Day - Level Up"]'); ?>
			</div>
		</div>
	</div>

	<div id="setCookie" class="close-icon">
		<img src="https://levelup.ua/wp-content/uploads/2019/07/cancel-1.svg" alt="">
	</div>
</div>
<div class="event_modal-bg"></div>
<!-- Модальное окно мероприятия -->
<?php } ?>














        <?php wp_footer(); ?>
        <?php echo $options[jivosite_code];?>
        <?php echo $options[binotel_code];?>
        <script> jQuery('#share-bar').share();</script>
        <div class="event_img-input" style="display:none">[text text-744 id:event_img]</div>
        <div class="link_liqpay-input" style="display:none">[text text-745 id:link_liqpay]</div>
        <div class="price-input" style="display:none">[text text-746 id:event_price]</div>
        <div class="date-input" style="display:none">[text text-747 id:event_date]</div>
        <div class="tc" style="background: #25262b;color: #595959;font-size: 11px; padding: 7px 0;">Запросы: <?php echo get_num_queries(); ?></div>

<script src="https://e-timer.ru/js/etimer.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".eTimer").eTimer({
			etType: 0, etDate: "02.11.2019.10.0", etTitleText: "<a href='https://levelup.ua/it-conference-2019'>До початку:</a>", etTitleSize: 16, etShowSign: 3, etSep: ":", etFontFamily: "Trebuchet MS", etTextColor: "#a3a3a3", etPaddingTB: 15, etPaddingLR: 15, etBackground: "#333333", etBorderSize: 0, etBorderRadius: 2, etBorderColor: "white", etShadow: " 0px 0px 0px 0px #333333", etLastUnit: 4, etNumberFontFamily: "Impact", etNumberSize: 24, etNumberColor: "black", etNumberPaddingTB: 0, etNumberPaddingLR: 8, etNumberBackground: "#eaff00", etNumberBorderSize: 0, etNumberBorderRadius: 5, etNumberBorderColor: "white", etNumberShadow: "inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
		});
	});
</script>
<p class="d-none">

<?php echo do_shortcode( wp_unslash($options_modal['contact_form']) ); ?>
</p>
</body>
</html>
