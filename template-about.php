<?php 

/* Template Name: About-Page */

get_header( ); ?>
<!-- about section -->
<section class="about-section sp-seven">
    <div class="container">
        <div class="about-content">
            <div class="about-content-one">
        
           <?php the_content() ?>


            </div>
            <div class="about-content-three">
                <?php if($abb=get_field('signature_image', 'options')){?>
                <div class="signature"><figure><img src="<?php echo $abb['url']; ?>" alt=""></figure></div>
                 <?php } ?>
                <ul class="social-style-one">
                    <?php 
                   if($abbout_icons=get_field('social_icon_list', 'options')){
                    foreach($abbout_icons as $icon){?>
                    <li><a href="<?php echo $icon['icon_link'] ?>"><i class="fa <?php echo $icon['icon']?>"></i></a></li>
                    <?php }} ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->
<?php get_footer( ); ?>