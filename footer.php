<div class="container">
    <footer class="row">
        <div class="three columns">
            <?php dynamic_sidebar('footer-widget-one'); ?>
        </div>

        <div class="two columns">
            <?php wp_nav_menu(array(
                'sort_column' => 'menu_order',
                'container_class' => 'blank-menu-header'
                ));?>
        </div>

        <div class="four columns why-us">
            <?php dynamic_sidebar('footer-widget-three'); ?>
        </div>

        <div class="three columns">
            <div class="container contact-info">
                <div class="row contact-info-item">
                    <div class="three columns">
                        <img src="http://gator-rowe.com/wp-content/uploads/2017/04/Phone.png"/>
                    </div>
                    <div class="nine columns">
                        <a href="tel:+15555551212">(254) 555-1212</a>
                    </div>
                </div>

                <div class="row contact-info-item">
                    <div class="three columns">
                        <img src="http://gator-rowe.com/wp-content/uploads/2017/04/Mail.png"/>
                    </div>
                    <div class="nine columns">
                        <a href="mailto: info@slicks.com">info@slicks.com</a>
                    </div>
                </div>

                <div class="row contact-info-item">
                    <div class="three columns">
                        <img src="http://gator-rowe.com/wp-content/uploads/2017/04/map-pin.png"/>
                    </div>
                    <div class="nine columns">
                        <a href="https://goo.gl/maps/EUne1ZQ3eBN2">123 AnyStreet, Anywhere, ST 12345</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>

</html>
