
    <!-- instagram-section -->
    <section class="instagram-section centred">
        <div class="container">
            <div class="instagram-title">FOLLOW @ INSTAGRAM</div>
            <ul class="instagram-img-list clearfix">
                <li><a href="#"><figure><img src="<?php echo esc_url(get_template_directory_uri())?>/assest/images/home/f1.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="<?php echo esc_url(get_template_directory_uri())?>/assest/images/home/f2.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="<?php echo esc_url(get_template_directory_uri())?>/assest/images/home/f3.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="<?php echo esc_url(get_template_directory_uri())?>/assest/images/home/f4.jpg" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="<?php echo esc_url(get_template_directory_uri())?>/assest/images/home/f5.jpg" alt=""></figure></a></li>

               
            </ul>
        </div>
    </section>
    <!-- instagram-section -->

    
    <footer class="footer-style-six sp-one">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <?php if($copyright=get_field('copyright_text_', 'options')){?>
                    <div class="copyright"><?php echo $copyright; ?></div>
                    <?php } ?>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="footer-logo">
                    <?php if($footer_logo=get_field('footer_logo', 'options')){ ?>
                        <a href="<?php echo esc_url( home_url( ))?>"><figure><img src="<?php echo $footer_logo['url']?>"></figure></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <ul class="social-style-seven pull-right in-block">
                        <?php if($footer_socials=get_field('footer_social_icons', 'options')){
                            foreach($footer_socials as $socials){?>
                        <li><a href="<?php echo $socials['icon_link']?>"><i class="fa <?php echo $socials['icon']?>"></i></a></li>
                        <?php }} ?>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>
<?php wp_footer(  ); ?>

</body>
</html>
