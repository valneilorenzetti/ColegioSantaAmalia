<?php /* Template Name: Form login */
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
            <h1 class="tit-int"><?php the_title(); ?></h1>
            <form name="formulario" id="formulario" method="post" action="http://santaamalia.portaldominus.com.br/login.php" >
                <input type="hidden" name="config_path" value="_clientes/sipeb">
                <table cellpadding="0" cellspacing="0" border="0" width="100%"  align="center">
                    <tr>
                        <td>
                         Login:
                         <input type="text" name="login_usuario"  id="login_usuario" >
                        </td>
                     </tr>
                     <tr>
                        <td>
                         Senha:
                         <input type="password" name="senha_usuario"  id="senha_usuario" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" value="S" id="responsavel" name="responsavel">
                                Respons. Acadêmico
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" value="S" id="responsavelFinanceiro" name="responsavelFinanceiro">
                                Respons. Financeiro
                            </label>
                        </td>
                    </tr>
                     <tr>
                        <td>
                            <input type="submit" name="ok" id="confirma" value="Acessar" />
                        </td>
                    </tr>
                </table>
            </form>
            <?php the_content(); ?>
        </section>
        <?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>
