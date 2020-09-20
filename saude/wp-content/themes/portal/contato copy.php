<?php
/* Template Name: Contato */
if($_POST["nome_contato"]){
    get_header();

    global $wpdb;

    if( !$_POST["test_contato"] ) {

        $wpdb->insert(
            'tb_contato',
            array(
                    'nome' => $_POST["nome_contato"],
                    'email' => $_POST["email_contato"],
                    'assunto' => $_POST["assunto_contato"],
                    'telefone' => $_POST["telefone_contato"],
                    'como_conheceu' => $_POST["conheceu_contato"],
                    'qual' => $_POST["qual_contato"],
                    'mensagem' => $_POST["mensagem_contato"],
                    'newsletter' => $_POST["news_contato"]
            )
        );

        $lastid = $wpdb->insert_id;

        if($lastid){

            require ( get_template_directory() .'/phpmailer/PHPMailerAutoload.php' );
            $mail = new PHPMailer;

            //$mail->SMTPDebug = 3;                               // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'contato@colegiosantaamalia.com.br';                 // SMTP username
            $mail->Password = 'Liga@1923';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('contato@colegiosantaamalia.com.br', 'Formulário de contato');
            $mail->addAddress('contato@colegiosantaamalia.com.br');     // Add a recipient

            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }



            if($_POST["news_contato"] == 0){$new = "Não";}else{$new = "Sim";}
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
//            $headers .= "From: ".$_POST["nome_contato"]." <".$_POST["email_contato"].">" . "\r\n".
//            "Reply-To: ".$_POST["nome_contato"]." <".$_POST["email_contato"].">" . "\r\n";
            $headers .= "From: Formulário de contato <contato@colegiosantaamalia.com.br>" . "\r\n".
            "Reply-To: ".$_POST["nome_contato"]." <".$_POST["email_contato"].">" . "\r\n";
            $corpo = "
            <table>
                    <tr>
                        <td><img src='".get_bloginfo('template_url')."/images/logo.svg' /></td>
                    </tr>
            </table>
            <p>".$_POST["nome_contato"].", mandou uma mensagem pelo contao do site do Colégio Santa Amália.</p>
            <p><strong>Email:</strong> ".$_POST["email_contato"]."</p>
            <p><strong>Assunto:</strong> ".$_POST["assunto_contato"]."</p>
            <p><strong>Telefone:</strong> ".$_POST["telefone_contato"]."</p>
            <p><strong>Como conheceu o Colégio Santa Amália:</strong> ".$_POST["conheceu_contato"]."</p>";
            if($_POST["qual_contato"]){
                $corpo .= "<p><strong>Qual:</strong> ".$_POST["qual_contato"]."</p>";
            }

            $corpo .="<p><strong>Mensagem:</strong> ".$_POST["mensagem_contato"]."</p>
            <p><strong>Deseja receber newsletters com novidades do Colégio Santa Amália:</strong> ".$new."</p>";

            $envio= wp_mail("csa@colegiosantaamalia.com.br", $_POST["assunto_contato"] , $corpo, $headers);
            $enviado = "true";
        }
        else{
            $enviado = "false";
    }
     } else {
    $enviado = "true";
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
                            if($enviado == true and $_POST["assunto_contato"] == "Agende sua visita"){
                                echo "Seu pedido de agendamento de visita foi enviado com sucesso. Nossa equipe entrará em contato com você para agendar o melhor dia e horário. Em caso de dúvida, ligue (11) 5070-3555.";
                            }
                            else if($enviado == true and $_POST["assunto_contato"] != "Agende sua visita"){
                                echo "Sua mensagem foi enviada com sucesso. Caso prefira, entre em contato por telefone no (11) 5070-3555.";
                            }
                            else{
                                echo "Ocorreu um erro, por favor tente novamente.";
                            }
                        ?>
        </section>
        <?php get_sidebar(); ?>
    </section>
<?php
    get_footer();
}
else{
    wp_redirect( home_url() );
    exit;
}
?>
