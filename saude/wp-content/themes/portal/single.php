<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
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
	<section class="hide-for-small-only cursos-menu-int">
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
		<section class="large-8 medium-8 columns text-int">
			<?php if(get_post_type( $post ) == "post"){ ?>
				<h1 class="tit-int">Notícia</h1>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<a href="<?php bloginfo('url'); ?>/noticias">Ver todas as notícias</a>
			<?php }else{ ?>
				<h1 class="tit-int"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php } ?>					
		</section>
		<?php get_sidebar(); ?>
	</section>
<?php get_footer(); ?>
