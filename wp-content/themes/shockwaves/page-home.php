<?php
/**
 * The template name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shockwaves
 */

get_header();
?>

    <div id="primary" class="site-main">

        <?php
        while ( have_posts() ) :the_post();
//            get_template_part( 'template-parts/content', 'page' ); ?>

            <main>
                <section class="intro anchor" data-anchor="1">
                    <div class="container">
                        <img src="<?php echo get_field('big_logo'); ?>" class="shockwaves"/>
                        <p class="subtitle"><?php echo get_field('subtitle'); ?></p>
                        <p class="title"><?php echo get_field('title'); ?></p>
                        <?php
                        $button_intro = get_field('button_intro');
                        if( $button_intro ):
                            $link_url_intro = $button_intro['url'];
                            $link_title_intro = $button_intro['title'];
                            $link_target_intro = $button_intro['target'] ? $button_intro['target'] : '_self';
                            ?>
                            <a class="button" href="<?php echo esc_url( $link_url_intro ); ?>" target="<?php echo esc_attr( $link_target_intro ); ?>"><?php echo esc_html( $link_title_intro ); ?></a>
                        <?php endif; ?>
                    </div>
                </section>
                <section class="products anchor" data-anchor="2">
                    <div class="container">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <?php $listIdWaves = get_field("listing_waves");
                                foreach ($listIdWaves as $listIdWave){ ?>
                                    <div class="swiper-slide">
                                        <div class="product <?php echo get_post_field( 'post_name', $listIdWave ); ?>">
                                            <div class="no"><?php echo get_field('number', $listIdWave); ?></div>
                                            <div class="name"><?php echo get_the_title($listIdWave); ?></div>
                                            <div class="poster">
                                                <video class="product-video" playsinline loop muted autoplay poster="<?= 'wp-content/themes/shockwaves/images/'.strtolower(get_the_title($listIdWave)).'Poster.jpg'; ?>">
                                                    <source src="<?php echo get_field('video', $listIdWave); ?>" type="video/mp4"/>
                                                </video>
                                            </div>
                                            <div class="attribute"><?php echo get_field('attributes', $listIdWave); ?></div>
                                            <div class="benefits">
                                                <div class="body">
                                                    <?php echo get_post_field('post_content', $listIdWave); ?>
                                                </div>
                                                <div class="moreBtn">
                                                    <span class="less">See more</span>
                                                    <span class="more">See less</span>
                                                </div>
                                            </div>
                                            <?php if(get_field('price', $listIdWave) != '') { ?>
                                                <div class="price">
                                                    Price: <span><?php echo get_field('price', $listIdWave); ?></span>
                                                </div>
                                            <?php } ?>
                                            <a class="button" <?php if(get_field('link_button', $listIdWave) != ''){ ?> href="<?php echo get_field('link_button', $listIdWave); ?>"<?php } ?>>
                                                Apply Now
                                            </a>
                                            <?php if(get_field('disclaimer', $listIdWave) != '') { ?>
                                                    <div class="note">
                                                        <?php echo get_field('disclaimer', $listIdWave); ?>
                                                    </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="rogue anchor" data-anchor="3">
                    <div class="wave top">
                        <div class="scaler"></div>
                        <svg width="1920" height="400" viewBox="0 100 1200 250">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0,150.6c0,0,45.4,6.8,75.9,17.1c94.1,31.7,172.4,58,224.1,68.4c134.6,27.3,234.3,10.7,300-5.5c98.7-24.3,198.4-62.1,300-78c72.3-11.2,180.9-1.7,250,13.8c12.5,2.8,50,10.4,50,10.4V0h-50c-50,0-150,0-250,0S700,0,600,0S400,0,300,0S100,0,50,0H0V150.6z"
                                  fill="#201C26"/>
                        </svg>
                    </div>
                    <div class="container">
                        <div class="tabs">
                            <?php $idBig = get_field('big_wave_section'); ?>
                            <div class="tab">
                                <div class="poster">
                                    <video loop muted autoplay playsinline poster="wp-content/themes/shockwaves/images/roguePoster.jpg">
                                        <source src="<?php echo get_field('video', $idBig); ?>" type="video/mp4"/>
                                    </video>
                                </div>
                            </div>
                            <div class="tab">
                                <div class="no"><?php echo get_field('number', $idBig); ?></div>
                                <div class="name"><?php echo get_the_title($idBig); ?></div>
                                <div class="attribute"><?php echo get_field('attributes', $idBig); ?></div>
                                <div class="benefits">
                                    <?php echo get_post_field('post_content', $idBig); ?>
                                </div>
                                <a class="button" <?php if(get_field('link_button', $idBig) != ''){ ?> href="<?php echo get_field('link_button', $idBig); ?>"<?php } ?>>
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="wave bottom">
                        <div class="scaler"></div>
                        <svg width="1920" height="400" viewBox="0 0 1200 250">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0,150.6c0,0,45.4,6.8,75.9,17.1c94.1,31.7,172.4,58,224.1,68.4c134.6,27.3,234.3,10.7,300-5.5c98.7-24.3,198.4-62.1,300-78c72.3-11.2,180.9-1.7,250,13.8c12.5,2.8,50,10.4,50,10.4V0h-50c-50,0-150,0-250,0S700,0,600,0S400,0,300,0S100,0,50,0H0V150.6z"
                                  fill="#201C26"/>
                        </svg>
                    </div>
                </section>
                <section class="services anchor" data-anchor="8">
                    <div class="container">
                        <h1><?php echo get_field('title_services'); ?></h1>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php
                            $argsServices = array(
                                'post_type' => 'services',
                                'order' => 'DESC',
                                'posts_per_page' => -1
                            );
                            query_posts($argsServices);
                            while (have_posts()) : the_post();
                                $imageService = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                                <div class="swiper-slide">
                                    <div class="service">
                                        <div class="content">
                                            <div class="title"><?php the_title(); ?></div>
                                            <img src="<?php echo $imageService[0]; ?>"/>
                                            <div class="body">
                                                <?php the_content(); ?>
                                            </div>
                                            <div class="moreBtn">
                                                <span class="less">See more</span>
                                                <span class="more">See less</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                </section>
                <section class="brief anchor" data-anchor="6">
                    <div class="wave top">
                        <div class="scaler"></div>
                        <svg width="1920" height="400" viewBox="0 100 1200 250">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0,150.6c0,0,45.4,6.8,75.9,17.1c94.1,31.7,172.4,58,224.1,68.4c134.6,27.3,234.3,10.7,300-5.5c98.7-24.3,198.4-62.1,300-78c72.3-11.2,180.9-1.7,250,13.8c12.5,2.8,50,10.4,50,10.4V0h-50c-50,0-150,0-250,0S700,0,600,0S400,0,300,0S100,0,50,0H0V150.6z"
                                  fill="#201C26"/>
                        </svg>
                    </div>
                    <div class="container">
                        <div class="content">
                            <h1><?php echo get_field('title_projects'); ?></h1>
                            <p><?php echo get_field('description_projects'); ?></p>
                        </div>
                        <?php
                        $button_projects = get_field('button_projects');
                        if( $button_projects ):
                            $link_url_projects = $button_projects['url'];
                            $link_title_projects = $button_projects['title'];
                            $link_target_projects = $button_projects['target'] ? $button_projects['target'] : '_self';
                            ?>
                            <a class="button" href="<?php echo esc_url( $link_url_projects ); ?>" target="<?php echo esc_attr( $link_target_projects ); ?>"><?php echo esc_html( $link_title_projects ); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="wave bottom">
                        <div class="scaler"></div>
                        <svg width="1920" height="400" viewBox="0 0 1200 250">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0,150.6c0,0,45.4,6.8,75.9,17.1c94.1,31.7,172.4,58,224.1,68.4c134.6,27.3,234.3,10.7,300-5.5c98.7-24.3,198.4-62.1,300-78c72.3-11.2,180.9-1.7,250,13.8c12.5,2.8,50,10.4,50,10.4V0h-50c-50,0-150,0-250,0S700,0,600,0S400,0,300,0S100,0,50,0H0V150.6z"
                                  fill="#201C26"/>
                        </svg>
                    </div>
                </section>
                <section class="partners anchor" data-anchor="4">
                    <div class="container">
                        <h1><?php echo get_field('title_partners'); ?></h1>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php
                                $argsPartners = array(
                                    'post_type' => 'partners',
                                    'order' => 'DESC',
                                    'posts_per_page' => -1
                                );
                                query_posts($argsPartners);
                                while (have_posts()) : the_post();
                                $imagePartner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $imagePartner[0]; ?>"/>
                                </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                </section>
                <section class="howto">
                    <div class="wave top">
                        <div class="scaler"></div>
                        <svg width="1920" height="400" viewBox="0 100 1200 250">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0,150.6c0,0,45.4,6.8,75.9,17.1c94.1,31.7,172.4,58,224.1,68.4c134.6,27.3,234.3,10.7,300-5.5c98.7-24.3,198.4-62.1,300-78c72.3-11.2,180.9-1.7,250,13.8c12.5,2.8,50,10.4,50,10.4V0h-50c-50,0-150,0-250,0S700,0,600,0S400,0,300,0S100,0,50,0H0V150.6z"
                                  fill="#201C26"/>
                        </svg>
                    </div>
                    <div class="faq anchor" data-anchor="7">
                        <div class="plain">
                            <div class="hole">
                                <div class="container">
                                    <h1><?php echo get_field('title_faqs'); ?></h1>
                                    <div class="accordeon">
                                        <?php
                                        $argsFaq = array(
                                            'post_type' => 'faqs',
                                            'order' => 'DESC',
                                            'posts_per_page' => -1
                                        );
                                        query_posts($argsFaq);
                                        while (have_posts()) : the_post(); ?>
                                            <div class="key">
                                                <div class="head">
                                                    <?php the_title(); ?>
                                                </div>
                                                <div class="expandBtn"></div>
                                                <div class="extension">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        <?php endwhile; wp_reset_query(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="anchor" data-anchor="5">
                        <div class="container">
                            <h1><?php echo get_field('title_program'); ?></h1>
                            <div class="content">
                                <?php echo get_field('content_program'); ?>
                            </div>
                            <?php
                            $button_program = get_field('button_program');
                            if( $button_program ):
                                $link_url_program = $button_program['url'];
                                $link_title_program = $button_program['title'];
                                $link_target_program = $button_program['target'] ? $button_program['target'] : '_self';
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url_program ); ?>" target="<?php echo esc_attr( $link_target_program ); ?>"><?php echo esc_html( $link_title_program ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="wave bottom">
                        <div class="scaler"></div>
                        <svg width="1920" height="400" viewBox="0 0 1200 250">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0,150.6c0,0,45.4,6.8,75.9,17.1c94.1,31.7,172.4,58,224.1,68.4c134.6,27.3,234.3,10.7,300-5.5c98.7-24.3,198.4-62.1,300-78c72.3-11.2,180.9-1.7,250,13.8c12.5,2.8,50,10.4,50,10.4V0h-50c-50,0-150,0-250,0S700,0,600,0S400,0,300,0S100,0,50,0H0V150.6z"
                                  fill="#201C26"/>
                        </svg>
                    </div>
                </section>
                <section class="meet anchor" data-anchor="9">
                    <img class="bobba aimless" src="<?php echo bloginfo('stylesheet_directory'); ?>/images/blurryCircle.png" />
                    <div class="container">
                        <h1><?php echo get_field('title_section_contact_details'); ?></h1>
                        <div class="contacts">

                            <?php if(get_theme_mod('phone') != ''){ ?>
                                <div class="contact">
                                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/phone.svg"/>
                                    <?php echo get_theme_mod('phone'); ?>
                                </div>
                            <?php } if(get_theme_mod('email') != ''){ ?>
                                <div class="contact">
                                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/email.svg"/>
                                    <?php echo get_theme_mod('email'); ?>
                                </div>
                            <?php } ?>
                            <!--<div class="contact">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/calendly.svg"/>
                                calendly
                            </div>-->
                        </div>
                    </div>
                </section>

            </main>
            <!-- Google Tag Manager (noscript) -->
            <noscript >
                <iframe src="ns"
                        height="0" width="0" style="display:none;visibility:hidden">
                </iframe>
            </noscript>
            <!-- End Google Tag Manager (noscript) -->

        <?php endwhile; // End of the loop. ?>

    </div><!-- #main -->

<?php
//get_sidebar();

get_footer();
