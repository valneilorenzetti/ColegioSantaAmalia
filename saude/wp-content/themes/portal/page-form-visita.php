<?php /* Template Name: Form visita */
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
            <form action="<?php bloginfo('url'); ?>/agende-sua-visita" method="post" id="form_visita" class="forms form-visita">
                <section class="large-12 medium-6 columns">
                    <label for="nome_pai">Nome do Responsável*</label>
                    <input type="text" id="nome_pai" name="nome_pai" required />
                </section>
                <section class="large-6 medium-6 columns">
                    <label for="email_visita">E-mail*</label>
                    <input type="email" id="email_visita" name="email_visita" required />
                </section>
                <section class="large-6 medium-6 columns">
                    <label for="telefone_visita">Telefone*</label>
                    <input type="text" id="telefone_visita" name="telefone_visita" required />
                </section>
                <section class="large-12 medium-6 columns">
                    <label for="nome_aluno">Nome do Aluno*</label>
                    <input type="text" id="nome_aluno" name="nome_aluno" required />
                </section>
                <section class="large-6 medium-6 columns">
                    <label for="nascimento_visita">Data Nascimento*</label>
                    <input type="date" id="nascimento_visita" name="nascimento_visita" required />
                </section>
                <section class="large-6 medium-6 columns">
                    <label for="serie_visita">Série atual*</label>
                    <input type="text" id="serie_visita" name="serie_visita" required />
                </section>
                <section class="large-6 medium-6 columns">
                    <label for="ano_visita">Ano que pretende matricular*</label>
                    <input type="text" id="ano_visita" name="ano_visita" required />
                </section>
                <section class="large-6 medium-6 columns">
                    <label for="conheceu_visita">Como conheceu o colégio?*</label>
                    <select id="conheceu_visita" name="conheceu_visita" style="height:36px;padding: 0 8px;" required>
                        <option value="">Selecione</option>
                        <option value="Guia das Escolas">Guia das Escolas</option>
                        <option value="Guia da Boa Escola">Guia da Boa Escola</option>
                        <option value="Revista">Revista</option>
                        <option value="Passagem">Passagem</option>
                        <option value="Indicação">Indicação</option>
                        <option value="Site">Site</option>
                        <option value="Google">Google</option>
                        <option value="Clube">Clube</option>
                        <option value="Mídia Metrô">Mídia Metrô</option>
                        <option value="Folheto Promocional">Folheto Promocional</option>
                        <option value="Jornal do Colégio">Jornal do Colégio</option>
                    </select>
                </section>
                <section class="large-6 medium-6 columns">
                    <label for="news_visita" class="label-check"><input type="checkbox" id="news_visita" name="news_visita" value="0" />Desejo receber newsletters com novidades do Colégio Santa Amália</label>
                </section>
                <section class="large-6 medium-6 columns">
                    <input type="submit" tabindex="11" value="Enviar" />
                </section>
            </form>
            <?php the_content(); ?>
        </section>
        <?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>
