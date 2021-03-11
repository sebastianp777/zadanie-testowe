<!-- footer -->
<footer class="footer" role="contentinfo">
    <div class="container__custom">
        <div class="row">
            <div class="col-lg-4 col-lg-4 footer__col footer__col-left"><span>© 2021 PixTricks Studio</span></div>
            <div class="col-lg-4 col-lg-4 footer__col footer__col-mid"><img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-pixtricks-revers.png" alt=""></div>
            <div class="col-lg-4 col-lg-4 footer__col footer__col-right"><?php html5blank_nav(); ?></div>
        </div>
    </div>
</footer><!-- #colophon -->


<?php wp_footer(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"/>

<script>
    window.addEventListener('load', (event) => {
        var fonts = [
            '<?= get_template_directory_uri() ?>/fonts/Montserrat-Bold.ttf',
            '<?= get_template_directory_uri() ?>/fonts/Montserrat-ExtraBold.ttf',
            '<?= get_template_directory_uri() ?>/fonts/Montserrat-ExtraLight.ttf',
            '<?= get_template_directory_uri() ?>/fonts/Montserrat-Light.ttf',
            '<?= get_template_directory_uri() ?>/fonts/Montserrat-Medium.ttf',
            '<?= get_template_directory_uri() ?>/fonts/Montserrat-Regular.ttf',
            '<?= get_template_directory_uri() ?>/fonts/Montserrat-SemiBold.ttf',

        ];
        var newStyle = document.createElement('style');
        newStyle.setAttribute('id', 'font-styles');
        newStyle.appendChild(document.createTextNode("\
        @font-face {\
            font-family: Montserrat-Bold;\
            src: url('" + fonts[0] + "');\
            font-display: swap;\
        }\
        @font-face {\
            font-family: Montserrat-ExtraBold;\
            src: url('" + fonts[1] + "');\
            font-display: swap;\
        }\
        @font-face {\
            font-family: Montserrat-ExtraLight;\
            src: url('" + fonts[2] + "');\
            font-display: swap;\
        }\
        @font-face {\
            font-family: Montserrat-Light;\
            src: url('" + fonts[3] + "');\
            font-display: swap;\
        }\
        @font-face {\
            font-family: Montserrat-Medium;\
            src: url('" + fonts[4] + "');\
            font-display: swap;\
        }\
        @font-face {\
            font-family: Montserrat-Regular;\
            src: url('" + fonts[5] + "');\
            font-display: swap;\
        }\
        @font-face {\
            font-family: Montserrat-SemiBold;\
            src: url('" + fonts[6] + "');\
            font-display: swap;\
        }\
    "));

        document.head.appendChild(newStyle);
    });
</script>

</body>
</html>
