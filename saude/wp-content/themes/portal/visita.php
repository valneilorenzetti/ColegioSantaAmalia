<?php
/* Template Name: Visita */
if($_POST["nome_pai"]){
    get_header();

    global $wpdb;

    $wpdb->insert(
            'saude_tb_visitas',
            array(
                'pai'        => $_POST["nome_pai"],
                'aluno'      => $_POST["nome_aluno"],
                'email'      => $_POST["email_visita"],
                'telefone'   => $_POST["telefone_visita"],
                'nascimento' => $_POST["nascimento_visita"],
                'serie'      => $_POST["serie_visita"],
                'ano'        => $_POST["ano_visita"],
                'conheceu'   => $_POST["conheceu_visita"],
                'newsletter' => $_POST["news_visita"]
            )
    );

    $lastid = $wpdb->insert_id;

//    if($lastid){
    if(true){

        if($_POST["news_visita"] == 0){$new = "Não";}else{$new = "Sim";}

        require ( get_template_directory() .'/phpmailer/PHPMailerAutoload.php' );
        $mail = new PHPMailer;

//            $mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'contato@colegiosantaamalia.com.br';                 // SMTP username
        $mail->Password = 'Liga@1923';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('contato@colegiosantaamalia.com.br', 'Formulário de contato');
        $mail->addAddress('csa@colegiosantaamalia.com.br');     // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Agendar visita - Saúde';
        $corpo = "
        <table>
                <tr>
                    <td><img src='".get_bloginfo('template_url')."/images/logo.svg' sttyle='width:25%;'/></td>
                </tr>
        </table>
        <p>".$_POST["nome_pai"].", mandou uma mensagem pelo site do Colégio Santa Amália.</p>
        <p><strong>Aluno:</strong> ".$_POST["nome_aluno"]."</p>
        <p><strong>Email:</strong> ".$_POST["email_visita"]."</p>
        <p><strong>Telefone:</strong> ".$_POST["telefone_visita"]."</p>
        <p><strong>Data Nascimento:</strong> ".$_POST["nascimento_visita"]."</p>
        <p><strong>Série:</strong> ".$_POST["serie_visita"]."</p>
        <p><strong>Ano que pretende matricular:</strong> ".$_POST["ano_visita"]."</p>
        <p><strong>Como conheceu o coláegio?<br /> ".$_POST["conheceu_visita"]."</p>
        <p><strong>Deseja receber newsletters com novidades do Colégio Santa Amália:</strong> ".$new."</p>";


        $mail->Body    = $corpo;

        $envio = $mail->send();

        $enviado = "true";
    }
    else{
        $enviado = "false";
    }
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
        <h1 class="tit-int"><?php the_title(); ?></h1>
        <section class="large-8 medium-8 columns text-int">
            <?php
                            if($enviado == true){
                                the_content();
                            }
                            else{
                                echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage('[:pt]Ocorreu um erro, por favor tente novamente.[:en]An error occurred, please try again.');
                            }
                        ?>
        </section>
        <?php get_sidebar(); ?>
    </section>
    <script async src='https://serverwup.com/tools/segment/tunnel/pixel_conv_santaamalia_tatuape/optout.js'></script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967357970;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "xI6uCM-J4FwQkuyizQM";
var google_remarketing_only = false;
 /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">;
</script>
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/967357970/?label=xI6uCM-J4FwQkuyizQM&amp;guid=ON&...;"</div></noscript>
<!-- Facebook Conversion Code for Agende Sua Visita - Tatuapé -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6026223303521', {'value':'0.00','currency':'BRL'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6026223303521&amp;cd[value]=0.00&amp;cd[currency]=BRL&amp...;" /></noscript>
<?php
    get_footer();
}
else{
    wp_redirect( home_url() );
    exit;
}
?>
