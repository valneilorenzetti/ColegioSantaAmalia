<?php
/**
 * The main template file
 */
get_header();

wp_reset_query();
query_posts('post_type=popup&showposts=1&orderby=date&order=desc');
if ( have_posts())  {
    echo '<div class="vm50_popup_fundo">';
    echo '</div>'; //.vm50_popup_fundo
    while(have_posts()) {
        the_post();
        echo '<div class="vm50_popup">';
        echo get_the_content();
        echo '<img src="'.get_stylesheet_directory_uri().'/images/bt_fechar.png"  class="vm50_popup_fechar" onclick="vm50_fechar_popup();"/>';
        echo '</div>'; //.vm50_popup
    }
    echo '<script>';
    echo '$(document).ready(function(){';
    echo '  $("html").removeClass("vm50_popup_fundo_fixa");';
    echo '  $("html").addClass("vm50_popup_fundo_fixa");';
    echo '});';
    echo 'function vm50_fechar_popup(){';
    echo '  $("html").removeClass("vm50_popup_fundo_fixa");';
    echo '  $(".vm50_popup_fundo").hide();';
    echo '  $(".vm50_popup").hide();';
    echo '}';
    echo '</script>';
}
?>
    <ul class="rslides">
        <?php
                wp_reset_query();
                query_posts('post_type=banners&showposts=-1&orderby=date&order=asc');
                if(have_posts()) : while(have_posts()) : the_post();
        ?>
                <li>
                    <?php
                        if ( function_exists( 'the_post_thumbnail' ) ){
                              //  if( $mobile == "sim" ){
                                    $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                    ?>
                                    <div style="background: url('<?php echo $large_image_url[0]; ?>') top center no-repeat;" class="banner-mobile"></div>
                    <?php
                                //}else{
                                //    the_post_thumbnail("full", array('title' => ''));
                                //}
                               $url = explode(get_bloginfo('url'), get_field('link'));
                               if(get_bloginfo('language') == "en-US"){
                                    $lang_url = get_bloginfo('url')."/en".$url[1];
                               }
                               else{
                                    $lang_url =  get_bloginfo('url').$url[1];
                               }
                        }
                    ?>
                    <section class="banner-tit">
                        <div class="row">
                            <div class="bl-tit-banner">
                                <h2><?php the_title(); ?></h2>
                                <a href="<?php echo $lang_url; ?>">
                                    <?php echo get_the_excerpt(); ?>
                                </a>
                            </div>
                        </div>
                    </section>
                </li>
        <?php
                endwhile;
                endif;
        ?>
    </ul>
    <section class="cursos-menu">
        <nav role="navigation">
            <ul>
                <?php
                        wp_reset_query();
                        query_posts('post_type=cursos&showposts=-1&orderby=date&order=asc');
                        if(have_posts()) : while(have_posts()) : the_post();
                ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php
                        endwhile;
                        endif;
                ?>
            </ul>
        </nav>
    </section>
    <section class="main">
    <section class="endereco">
        <section class="row bl-end">
            <?php
                    wp_reset_query();
                    query_posts('post_type=endereco&showposts=1&orderby=date&order=desc');
                    if(have_posts()) : while(have_posts()) : the_post();
            ?>
                        <h2><?php the_title(); ?> • <a href="tel:112322-4050">(11) 2322-4050</a></h2>
                        <div class="overlay" onClick="style.pointerEvents='none'"></div>
                        <?php echo html_entity_decode(get_the_content()); ?>
            <?php
                    endwhile;
                    endif;
            ?>
        </section>
    </section>
    <section id="cursos" class="row hide-for-small-only  cursos">
        <?php
                wp_reset_query();
                query_posts('post_type=cursos&showposts=-1&orderby=date&order=asc');
                if(have_posts()) : while(have_posts()) : the_post();
        ?>
                    <section class="large-4 medium-4 columns">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink(); ?>">
                        <?php
                            if ( function_exists( 'the_post_thumbnail' ) ){
                                the_post_thumbnail("full", array('title' => ''));
                            }
                        ?>
                        </a>
                        <?php the_excerpt(); ?>
                    </section>
        <?php
                endwhile;
                endif;
        ?>
    </section>
    <section class="diferenciais">
        <section class="row">
            <?php $obj = get_post_type_object( "diferenciais" ); ?>
            <h2><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]NOSSOS DIFERENCIAIS[:en]OUR DIFFERENCE'); ?></h2>
            <?php
                    wp_reset_query();
                    query_posts('post_type=diferenciais&showposts=-1&orderby=date&order=asc&cat=3');
                    if(have_posts()) : while(have_posts()) : the_post();
            ?>
                        <section class="large-4 columns medium-4 left bl-dif">
                            <h3><a href="<?php the_permalink(); ?>"><i class="fa fa-<?php the_field("icone"); ?>"></i><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                        </section>
            <?php
                    endwhile;
                    endif;
            ?>
        </section>
    </section>
    <section class="transparencia">
            <?php
                    wp_reset_query();
                    query_posts('post_type=transparencia&showposts=-1&orderby=date&order=desc');
                    if(have_posts()) : while(have_posts()) : the_post();
            ?>
                    <section class="row">
                        <section class="large-7 medium-7 columns txt-trans">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </section>
                        <section class="large-5 medium-5 columns img-trans">
                            <?php
                                if ( function_exists( 'the_post_thumbnail' ) ){
                                    the_post_thumbnail("full", array('title' => ''));
                                }
                            ?>
                        </section>
                    </section>
            <?php
                    endwhile;
                    endif;
            ?>
    </section>
    <section class="row noticias">
        <?php
            if(get_bloginfo('language') == "en-US"){
                $not_url = get_bloginfo('url')."/en/noticias/";
            }
            else{
                $not_url =  get_bloginfo('url')."/noticias/";
            }
        ?>
        <h2><a href="<?php echo $not_url; ?>"><i class="hide-for-small-only fa fa-laptop"></i><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]NOTÍCIAS[:en]NEWS'); ?></a></h2>
        <section class="large-7 columns">
            <ul class="hide-for-small-only">
                <?php
                        wp_reset_query();
                        query_posts('post_type=post&showposts=4&orderby=date&order=desc');
                        if(have_posts()) : while(have_posts()) : the_post();
                ?>
                            <li>
                                <h3><a href="<?php the_permalink(); ?>"><i class="fa fa-angle-right"></i><?php the_title(); ?></a></h3>
                            </li>
                <?php
                        endwhile;
                        endif;
                ?>
            </ul>
            <a href="<?php bloginfo('url'); ?>/noticias" id="ver-not" class="hide-for-small-only link"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]VER TODAS[:en]SEE ALL'); ?></a>
        </section>
        <section class="large-5 columns shared">
            <div class="hide-for-small-only hide-for-medium-only fb-like-box" data-href="https://www.facebook.com/colegiosantaamaliatatuape?fref=ts&amp;rf=ARQIM3GhxlFvi3b0vvA66iTEinwxDyRzgiJZl1TpSjgqNHqe" data-width="400" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
            <div class="share">
                <a class="hide-for-large-only fa" target="_blank" href="https://www.facebook.com/colegiosantaamaliatatuape"><i class="fa fa-facebook"></i></a>
                <a class="tw" target="_blank" href="https://www.youtube.com/user/ColegioSantaAmalia"><i class="fa fa-youtube"></i></a>
                <a class="in" target="_blank" href="http://instagram.com/colegiosantaamalia"><i class="fa fa-instagram"></i></a>
                <a class="gg" target="_blank" href="https://plus.google.com/103214215367728901877/posts"><i class="fa fa-google-plus"></i></a>
               <!-- <a class="ou" href="#">OUTRAS REDES</a>-->
            </div>
        </section>
    </section>
    <section class="historia">
            <?php
                    wp_reset_query();
                    query_posts('post_type=institucional&showposts=-1&orderby=date&order=asc&cat=3');
                    if(have_posts()) : while(have_posts()) : the_post();
            ?>
                    <section class="row cont-hist">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <section class="large-8 columns">
                            <section class="hide-for-small-only"><?php the_content(); ?></section>
                        </section>
                        <section class="hide-for-small-only hide-for-medium-only large-4 columns img-hist">
                            <?php
                                if ( function_exists( 'the_post_thumbnail' ) ){
                                    the_post_thumbnail("full", array('title' => ''));
                                }
                            ?>
                        </section>
                    </section>
            <?php
                    endwhile;
                    endif;
            ?>
    </section>

<?php get_footer(); ?>
