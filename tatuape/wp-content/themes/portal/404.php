<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section class="banner-int">
	<img src="<?php bloginfo('template_url'); ?>/images/banner-int.jpg" alt="Banner interno" />
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
		<section class="large-8 columns not-found">			
			<h1 class="tit-int">Página não encontrada</h1>			
			<img src="<?php bloginfo('template_url'); ?>/images/logo_liga.jpg" alt="Logo liga solidária" />
			<h2>Contribua para Liga Solidária</h2>
			<a href="http://www.ligasolidaria.org.br/colabore/doacao/" target="_blank">Clique aqui para doar</a>
		</section>
		<?php get_sidebar(); ?>
	</section>
<?php get_footer(); ?>
