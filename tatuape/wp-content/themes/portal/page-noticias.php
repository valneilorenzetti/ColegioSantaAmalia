<?php get_header(); ?>
<section class="banner-int">
	<?php
		wp_reset_query();
		$args = array(
		'flex-width'    => true,
		'width'         => 980,
		'flex-height'    => true,
		'height'        => 200,
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
		);
		add_theme_support( 'custom-header', $args );
	?>
	<img src="<?php header_image(); ?>"  width="100%" alt="Banner interno" />
	<section class="cursos-menu-int">
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
				wp_reset_query();				
			?>                     
		    </ul>
		</nav>
	</section>
</section>
 <section class="main-int">
	<?php the_post(); ?>
	<section class="row center-int">
		<section class="large-8 medium-8 columns">			
                        <h1 class="tit-int"><?php the_title(); ?></h1>
			<ul class="loop-not">
                            <?php
                                    wp_reset_query();
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    query_posts('post_type=post&showposts=10&orderby=date&order=desc&paged='.$paged); 
                                    if(have_posts()) : while(have_posts()) : the_post();						
                            ?>
                                        <li>                                            
                                            <h2><a href="<?php the_permalink(); ?>"><i class="fa fa-angle-right"></i><?php the_title(); ?></a></h2>                          
                                        </li>                       
                            <?php
                                    endwhile;
                                    endif;                
                            ?>
                        </ul>
                        <?php
				if (function_exists('page_navi')) { 
					page_navi(); 
				}
			?>
		</section>
		<?php get_sidebar(); ?>
	</section>
<?php get_footer(); ?>