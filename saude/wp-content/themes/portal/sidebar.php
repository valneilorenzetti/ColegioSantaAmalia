<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<aside class="hide-for-small-only medium-4 large-4 columns">		
	<?php if(get_post_type( $post ) == "cursos"){ ?>	
		<a class="agende-visitas" href="<?php echo get_bloginfo('url')."/matriculas-abertas/"; ?>">Agende sua visita</a>
	<?php } ?>	
	<?php if(get_post_type( $post ) != "post"){ ?>	
	<h2><i class="fa fa-laptop"></i>NOTÍCIAS</h2>
	<ul>
	    <?php
		    wp_reset_query();
		    query_posts('post_type=post&showposts=2&orderby=date&order=desc'); 
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
	<?php } ?>
	<div class="fb-like-box" data-href="https://www.facebook.com/ColegioSantaAmalia?fref=ts&amp;rf=152528158211626" data-height="320" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>        
</aside>
