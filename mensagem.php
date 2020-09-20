<?php

//global $wpdb;
//$wpdb->insert(
//    'saude_tb_visitas',
//    array(
//        'pai'        => $_POST["nome_pai"],
//        'aluno'      => $_POST["nome_aluno"],
//        'email'      => $_POST["email_visita"],
//        'telefone'   => $_POST["telefone_visita"],
//        'nascimento' => $_POST["nascimento_visita"],
//        'serie'      => $_POST["serie_visita"],
//        'ano'        => $_POST["ano_visita"],
//        'conheceu'   => $_POST["conheceu_visita"],
//        'newsletter' => $_POST["news_visita"]
//    )
//);
//$lastid = $wpdb->insert_id;


if ($_POST["news_visita"] == 0){
    $new = "Não";
}else {
    $new = "Sim";
}

require( '/home/storage/9/0c/f8/colegiosantaamalia/public_html/saude/wp-content/themes/portal/phpmailer/PHPMailerAutoload.php' );
$mail = new PHPMailer;
$mail->isSMTP();                                         // Set mailer to use SMTP
$mail->Host       = 'smtp.office365.com';                // Specify main and backup SMTP servers
$mail->SMTPAuth   = true;                                // Enable SMTP authentication
$mail->Username   = 'contato@colegiosantaamalia.com.br'; // SMTP username
$mail->Password   = 'Liga@1923';                         // SMTP password
$mail->SMTPSecure = 'tls';                               // Enable TLS encryption, `ssl` also accepted
$mail->Port       = 587;                                 // TCP port to connect to
$mail->CharSet    = 'UTF-8';
$mail->Subject    = 'Agendar visita - '.$_POST['unidade'];
$mail->setFrom('contato@colegiosantaamalia.com.br', 'Formulário de contato');
$mail->addAddress('csa@colegiosantaamalia.com.br');     // Add a recipient
$mail->isHTML(true);                                    // Set email format to HTML
$corpo = "
<table><tr><td><img src='http://colegiosantaamalia.com.br/saude/wp-content/themes/portal/images/logo.svg' sttyle='width:25%;'/></td></tr></table>
<p>".$_POST["nome_pai"].", mandou uma mensagem pelo site do Colégio Santa Amália.</p>
<p><strong>Aluno:</strong> ".$_POST["nome_aluno"]."</p>
<p><strong>Email:</strong> ".$_POST["email_visita"]."</p>
<p><strong>Telefone:</strong> ".$_POST["telefone_visita"]."</p>
<p><strong>Data Nascimento:</strong> ".$_POST["nascimento_visita"]."</p>
<p><strong>Série:</strong> ".$_POST["serie_visita"]."</p>
<p><strong>Ano que pretende matricular:</strong> ".$_POST["ano_visita"]."</p>
<p><strong>Como conheceu o coláegio?<br /> ".$_POST["conheceu_visita"]."</p>
<p><strong>Deseja receber newsletters com novidades do Colégio Santa Amália:</strong> ".$new."</p>";
$mail->Body = $corpo;
$envio      = $mail->send();

echo 'Mensagem enviada com sucesso!';
exit;
