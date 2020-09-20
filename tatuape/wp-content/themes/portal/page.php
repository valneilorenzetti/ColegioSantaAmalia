<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section class="banner-int">
	<img src="<?php bloginfo('template_url'); ?>/images/banner-int.jpg" alt="Banner interno" />
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
		<?php if(get_post_type( $post ) == "post"){ ?>
				<h1 class="tit-int">Notícia</h1>
				<h2><?php the_title(); ?></h2>
			<?php }else{ ?>
				<h1 class="tit-int"><?php the_title(); ?></h1>
			<?php } ?>
		<section class="large-8 medium-8 columns text-int">
			
			<?php the_content(); ?>
		</section>
		<?php get_sidebar(); ?>
	</section>
<?php
get_footer();
?>
