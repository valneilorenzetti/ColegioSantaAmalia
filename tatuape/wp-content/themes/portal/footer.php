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
                <h2 class="large-offset-2"><i class="fa fa-comments"></i><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Entre em contato[:en]Contact us'); ?></h2>
                <input type="hidden" id="url_form" value="<?php bloginfo('url'); ?>" />
                <form action="<?php bloginfo('url'); ?>/contato" method="post" id="form_contato" class="forms form-contato large-offset-2 large-8">
                    <section class="large-6 medium-6 columns">
                        <label for="nome_contato"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Nome Completo[:en]Full name'); ?>*</label>
                        <input type="text" id="nome_contato" name="nome_contato" placeholder="<?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]como gostaria de ser chamado[:en]how would you like to be called'); ?>?" required />
                    </section>
                    <section class="large-6 medium-6 columns">
                        <label for="email_contato"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Email[:en]E-mail'); ?>*</label>
                        <input type="email" id="email_contato" name="email_contato" placeholder="<?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]seu email[:en]your e-mail'); ?>" required />
                    </section>
                    <section class="large-12 columns">
                        <label for="assunto_contato"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Assunto[:en]Subject'); ?>*</label>
                        <select id="assunto_contato" name="assunto_contato" required onchange="if(jQuery('#assunto_contato').val()=='Agende sua visita'){jQuery('.contato').html('<h3 style=\'color:#fff;text-align:center;\'>Aguarde...</h3>');window.location = 'http://colegiosantaamalia.com.br/tatuape/matriculas-abertas/'}"  >
                            <option value=""><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Selecione[:en]Select'); ?></option>
                            <option value="Agende sua visita"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Agende sua visita[:en]Schedule your visit'); ?></option>
                            <option value="Informações"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Informações[:en]Info'); ?></option>
                            <option value="Problemas com portal de alunos / Senha"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Problemas com portal de alunos / Senha[:en]Problems with students portal / Password'); ?></option>
                            <option value="Apresentação de serviços e produtos"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Apresentação de serviços e produtos[:en]Presenting services and products'); ?></option>
                            <option value="Outros"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Outros[:en]Others'); ?></option>
                        </select>
                    </section>
                    <section class="large-4 medium-4 columns">
                        <label for="telefone_contato"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Telefone[:en]Phone'); ?>*</label>
                        <input type="text" id="telefone_contato" name="telefone_contato" placeholder="(xx) xxxx-xxxx" required />
                    </section>
                    <section class="large-8 medium-8 columns">
                        <label for="conheceu_contato"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Como conheceu o Colégio Santa Amália[:en]How did you find Santa Amalia School'); ?>?</label>
                        <select id="conheceu_contato" name="conheceu_contato" >
                            <option value=""><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Selecione[:en]Select'); ?></option>
                            <option value="Guia das Escolas">Guia das Escolas</option>
                            <option value="Guia da Boa Escola">Guia da Boa Escola</option>
                            <option value="Revista"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Revista[:en]Magazine'); ?></option>
                            <option value="Passagem"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Passagem[:en]Passed by'); ?></option>
                            <option value="Indicação"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Indicação[:en]Indication'); ?></option>
                            <option value="Site"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Site[:en]Website'); ?></option>
                            <option value="Google">Google</option>
                            <option value="Clube"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Clube[:en]Club'); ?>Clube</option>
                            <option value="Mídia Metrô">Mídia Metrô</option>
                            <option value="Folheto Promocional"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Folheto Promocional[:en]Promotional Brochure'); ?></option>
                            <option value="Jornal do Colégio"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Jornal do Colégio[:en]Journal of school'); ?></option>
                        </select>
                    </section>
                    <section class="large-12 columns qual_contato">
                        <label for="qual_contato"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Qual[:en]Which one'); ?>?</label>
                        <input type="text" id="qual_contato" name="qual_contato" placeholder="" />
                    </section>
                    <section class="large-12 columns">
                        <label for="mensagem_contato"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Mensagem[:en]Message'); ?>*</label>
                        <textarea id="mensagem_contato" name="mensagem_contato" placeholder="<?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]O que gostaria de saber[:en]What would you like to know'); ?>?" maxlength="400" required ></textarea>
                        <small class="aviso"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Máximo 400 caracteres[:en]Maximum 400 characters'); ?>.</small>
                    </section>
                    <section class="large-6 medium-6 columns">
                        <label for="news_contato" class="label-check"><input type="checkbox" id="news_contato" name="news_contato" value="0" /><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Desejo receber newsletters com novidades do Colégio Santa Amália[:en]I wish to receive newsletters of the College Santa Amalia'); ?></label>
                    </section>
                    <section class="large-6 medium-6 columns">
                        <button tabindex="11" class="ladda-button" data-spinner-size="20" data-style="contract" ><span class="ladda-label"><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]ENVIAR[:en]SEND'); ?></span></button>
                    </section>
                    <section class="large-12 columns aviso-trabalhe">
                        <?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Trabalhe conosco: Envie seu currículo pelo site da <a href="http://www.ligasolidaria.org.br/trabalhe-conosco/">Liga Solidária</a>. Mensagens de emprego por este formulário serão ignoradas.[:en]Work with us: Send your resume through the <a href="http://www.ligasolidaria.org.br/trabalhe-conosco/"> Liga Solidária </a> site. Job message by this form will be ignored.'); ?>
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
                <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
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
                    <div>
                        <!--<h3>MapleBear - Tatuapé</h3>-->
                        <p>Rua Antonio de Barros, 2319</p>
                        <p>Rua Professor Pedreira de Freitas, 981</p>
                        <p>(55) 11 2322-4050</p>
                    </div>
                </section>
                <a class="link-soyuz" href="http://www.soyuz.com.br">Desenvolvido por Soyuz</a>
            </section>
        </section>
    </footer>
</section>

<!-- Facebook Pixel Code -->
<!--
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');


fbq('init', '1799964280235516');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1799964280235516&ev=PageView&noscript=1"
/></noscript>
-->
<!-- End Facebook Pixel Code -->
</body>
</html>
