<?php get_header(); ?>

<section id="fp-hero" class="hero-wrapper">
    <div class="hero-img">
    <?php if (has_post_thumbnail()) {
         the_post_thumbnail('full');} ?>
    </div>
    <article class="hero-content">
    <h2><?php the_field('header_titel'); ?></h2>
    <?php the_field('header_content'); ?>
    </article>
</section>

<section  id="intro"  class="lg-wrapper">
    <div class="content-center">
        <article class="intro">
            <p>Wij zijn First Voip</p>
            <?php the_field('intro1'); ?>
        </article>
        <article class="intro">
            <p>Wij zijn First Voip</p>
            <?php the_field('intro2'); ?>
        </article>
        <article class="intro">
            <p>Wij zijn First Voip</p>
            <?php the_field('intro3'); ?>
        </article>
    </div>
</section>

<section class="testvoip-wrapper">
    <div class="testvoip-img">
        <img src="<?php the_field('test_zelf-img'); ?>" loading="lazy" alt="test first voip zelf">
    </div>
    <article class="testvoip-content">
    <?php the_field('test_zelf'); ?>
    </article>
</section>

<section class="review-wrapper">
    <div class="review-bgimg">
        <img src="<?php the_field('rev_img'); ?>" loading="lazy" alt="callcenter employees working">
    </div>
    <div class="review-title">
        <h2>First Voip Reviews</h2>
        <p>Klanten die u voor gingen .....</p>
        <hr>
    </div>
    <div class="review-slider">
        <!--start slider -->
        <div uk-slider="center: true; autoplay: true">

            <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">

                    <?php
                    $revPosts = new WP_Query('cat=9');
                    if ($revPosts->have_posts()) :
                        while ($revPosts->have_posts()) :
                            $revPosts->the_post(); ?>

                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail();} ?>
                                    </div>
                                    <div class="uk-card-body">
                                        <p>
                                            <a href="<?php echo get_permalink(); ?>" rel="noopener noreferrer">
                                                <?php the_content(); ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </li>

                        <?php
                    endwhile; // End of the loop.

                else : //fallback no content msg
                endif;
                wp_reset_postdata(); ?>

                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
        <!--end slider -->
    </div>

</section>

<section id="fp-main" class="main-section-wrapper">
    <main class ="main">

        <?php
        if(have_posts()):
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', 'page');
                endwhile;  // End of the loo

        else: //fallback no content msg
        endif;
        wp_reset_postdata(); ?>

    </main><!-- #main -->
</section><!-- #fp-main -->

<section  id="voicemail"  class="lg-wrapper">
    <div class="content-center">
        <div class="vm-content">
        <?php the_field('voicemail'); ?>
        </div>
        <div class="vm-audio"><?php the_field('vm-scloud'); ?></div>
    </div>
</section>

<section  id="news">
    <div class="or-wrapper">
        <div class="content-center">
            <div class="news-top_title">
            <?php the_field('nieuws'); ?> 
            </div>
         </div>
    </div>

    <div class="content-center">
    <?php
        $newsPosts = new WP_Query('cat=8&posts_per_page=3');
        if($newsPosts->have_posts()):
            while ($newsPosts->have_posts()) :
                $newsPosts->the_post(); ?>
                
                <article>
                    <div class="news-img">
                        <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php echo get_permalink(); ?>" rel="noopener noreferrer"><?php the_post_thumbnail();}  ?></a>

                        <div class="news-content">
                            <hr>
                            <h3> <a href="<?php echo get_permalink(); ?>" rel="noopener noreferrer"><?php the_title(); ?></a> </h3>
                            <p> <a href="<?php echo get_permalink(); ?>"  rel="noopener noreferrer"><?php the_excerpt(); ?></a> </p>
                        </div>
                    </div>
                   
                    </article>
            
            <?php endwhile;  // End of the loo

        else: //fallback no content msg
        endif;
        wp_reset_postdata(); 
    ?>
    </div>
</section>

<section  id="partners" class="wh-wrapper">
    <div class="content-center">
        <div class="partner-title">
            <h2>Partners</h2>
        </div>
        <div class="partner-logo_wrapper">
        <div class="partner">
           <img src="<?php the_field('partner1'); ?>" loading="lazy" alt="partners">  

         </div>

         <div class="partner">
         <img src="<?php the_field('partner2'); ?>" loading="lazy" alt="partners">    

         </div>

         <div class="partner">
         <img src="<?php the_field('partner3'); ?>" loading="lazy" alt="partners">    

         </div>

         <div class="partner">
         <img src="<?php the_field('partner4'); ?>" loading="lazy" alt="partners">    

         </div>

        </div>
    </div>
</section>

<?php
get_footer();
