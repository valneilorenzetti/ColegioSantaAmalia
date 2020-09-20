<?php
/**
 * The template for displaying the footer
 *
 */
$cls = "int";
if (  !is_home() ) {
    $cls = "";
}
?>
    <footer id="colophon" class="<?php echo $cls; ?>" role="contentinfo">
        <section class="contato">
            <section class="row">
                <h2 class="large-offset-2"><i class="fa fa-comments"></i>Entre em contato</h2>
                <input type="hidden" id="url_form" value="<?php bloginfo('url'); ?>" />
                <form action="<?php bloginfo('url'); ?>/contato" method="post" id="form_contato" class="forms form-contato large-offset-2 large-8">
                    <section class="large-6 medium-6 columns">
                        <label for="nome_contato">Nome Completo*</label>
                        <input type="text" id="nome_contato" name="nome_contato" placeholder="como gostaria de ser chamado?" required />
                        <input type="text" id="test_contato" name="test_contato" />
                    </section>
                    <section class="large-6 medium-6 columns">
                        <label for="email_contato">Email*</label>
                        <input type="email" id="email_contato" name="email_contato" placeholder="seu email" required />
                    </section>
                    <section class="large-12 columns">
                        <label for="assunto_contato">Assunto*</label>
                        <select id="assunto_contato" name="assunto_contato" required onchange="if(jQuery('#assunto_contato').val()=='Agende sua visita'){jQuery('.contato').html('<h3 style=\'color:#fff;text-align:center;\'>Aguarde...</h3>');window.location = 'http://colegiosantaamalia.com.br/saude/matriculas-abertas/'}" >
                            <option value="">Selecione</option>
                            <option value="Agende sua visita">Agende sua visita</option>
                            <option value="Informações e Preço">Informações </option>
                            <option value="Problemas com portal de alunos / Senha">Problemas com portal de alunos / Senha</option>
                            <option value="Apresentação de serviços e produtos">Apresentação de serviços e produtos</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </section>
                    <section class="large-4 medium-4 columns">
                        <label for="telefone_contato">Telefone*</label>
                        <input type="text" id="telefone_contato" name="telefone_contato" placeholder="(xx) xxxx-xxxx" required />
                    </section>
                    <section class="large-8 medium-8 columns">
                        <label for="conheceu_contato">Como conheceu o Colégio Santa Amália?</label>
                        <select id="conheceu_contato" name="conheceu_contato" >
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
                    <section class="large-12 columns qual_contato">
                        <label for="qual_contato">Qual?</label>
                        <input type="text" id="qual_contato" name="qual_contato" placeholder="" />
                    </section>
                    <section class="large-12 columns">
                        <label for="mensagem_contato">Mensagem*</label>
                        <textarea id="mensagem_contato" name="mensagem_contato" placeholder="O que gostaria de saber?" maxlength="400" required ></textarea>
                        <small class="aviso">Máximo 400 caracteres.</small>
                    </section>
                    <section class="large-6 medium-6 columns">
                        <label for="news_contato" class="label-check"><input type="checkbox" id="news_contato" name="news_contato" value="0" /> Desejo receber newsletters com novidades do Colégio Santa Amália</label>
                    </section>
                    <section class="large-6 medium-6 columns">
                        <button tabindex="11" class="ladda-button" data-spinner-size="20" data-style="contract" ><span class="ladda-label">ENVIAR</span></button>
                    </section>
                    <section class="large-12 columns aviso-trabalhe">
                        Trabalhe conosco: Envie seu currículo pelo site da <a href="http://www.ligasolidaria.org.br/trabalhe-conosco/">Liga Solidária</a>. Mensagens de emprego por este formulário serão ignoradas.
                    </section>
                </form>
            </section>
        </section>
        <section class="parceiros">
            <section class="row">
                <?php
                    wp_reset_query();
                    query_posts('post_type=parceiros&showposts=-1&orderby=date&order=asc');
                    if(have_posts()) : while(have_posts()) : the_post();
                ?>
                    <section class="medium-3 large-3 columns bl-par">
                        <a target="_blank" href="<?php the_field('link'); ?>"><?php
                        if ( function_exists( 'the_post_thumbnail' ) ){
                            the_post_thumbnail("full", array('title' => ''));
                        }
                        ?></a>
                    </section>
                <?php
                    endwhile;
                    endif;
                ?>
            </section>
        </section>
        <section class="row rodape">
            <section class="medium-3 large-3 columns">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>" />
            </section>
            <section class="hide-for-small-only large-offset-1 medium-2 large-2 columns">
                <nav role="navigation">
                    <ul class="menu-foot-1">
                        <?php
                            wp_reset_query();
                            query_posts('post_type=institucional&showposts=-1&orderby=date&order=asc&cat=4');
                            if(have_posts()) : while(have_posts()) : the_post();
                        ?>
                                <li><a href="<?php the_permalink(); ?>" ><?php echo ucfirst(mb_strtolower(get_the_title(),"UTF-8")); ?></a></li>
                        <?php
                            endwhile;
                            endif;
                        ?>
                    </ul>
                </nav>
            </section>
            <section class="hide-for-small-only medium-3 large-3 columns">
                <nav role="navigation">
                    <ul class="menu-foot-2">
                        <?php
                            wp_reset_query();
                            query_posts('post_type=diferenciais&showposts=-1&orderby=date&order=asc&cat=2');
                            if(have_posts()) : while(have_posts()) : the_post();
                        ?>
                                <li><a href="<?php the_permalink(); ?>" ><?php echo ucfirst(mb_strtolower(get_the_title(),"UTF-8")); ?></a></li>
                        <?php
                            endwhile;
                            endif;
                        ?>
                    </ul>
                </nav>
            </section>
            <section class="large-3 medium-3 columns">
                <section class="hide-for-small-only address">
                    <h3>Colégio Santa Amália</h3>
                    <p>Avenida Jabaquara, 1673
                    (55) 11 5071-3555</p>
                </section>
                <a class="link-soyuz" href="http://www.soyuz.com.br">Desenvolvido por Soyuz</a>
            </section>
        </section>
    </footer>
</section>

</body>
</html>
