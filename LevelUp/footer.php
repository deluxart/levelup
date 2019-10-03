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
<?php $options = get_option( 'levelup_theme_options' ); ?>
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
                        <?php echo do_shortcode('[recent_posts num="3" cat="2874"]'); ?></div>
                    <div class="form">
                        <h2>Будь вкурсе!</h2>
                        <p>Актуальные новости и мероприятия в
        еженедельной рассылке от Level Up</p>

                        <div class="form-cont">
                        <?php echo do_shortcode('[contact-form-7 id="294" title="Футер (Форма подписки)"]'); ?>
                        </div>
                    </div>
                    <div class="widget last">
                        <h4>Последние новости:</h4>
                        <?php echo do_shortcode('[recent_posts num="3" cat="2205"]'); ?>
                    </div>
                </div>
                <div class="bottom">* Вы так-же в любой момент с легкостью сможете отписаться от нашей рассылки</div>
            </div>
    </div>
</div>

<!-- Модальное окно мероприятия -->
<div class="event_modal">
	<div class="cont">
		<div><img src="https://levelup.ua/wp-content/uploads/2019/08/modal_coffe.png" alt=""></div>
		<div class="content">
			<h4>Реєструйтеся на <strong>персональну зустріч</strong> <span>і приходь знайомитися!</span></h4>
			<div class="date-block" style="display: none;">
				<div><strong>10 серпня 10:00</strong>вул. Троїцька, 21Г</div>
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

        <?php wp_footer(); ?>
        <?php echo $options[jivosite_code];?>
        <?php echo $options[binotel_code];?>
        <script>
            jQuery('#share-bar').share();
        </script>
        <div class="event_img-input" style="display:none">[text text-744 id:event_img]</div>
        <div class="link_liqpay-input" style="display:none">[text text-745 id:link_liqpay]</div>
        <div class="price-input" style="display:none">[text text-746 id:event_price]</div>
        <div class="date-input" style="display:none">[text text-747 id:event_date]</div>

</body>
</html>
