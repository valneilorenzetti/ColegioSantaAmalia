<?php

require_once("../../../wp-config.php");
require_once("../../../wp-includes/wp-db.php");

global $wpdb;

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
    //$headers = 'MIME-Version: 1.0' . "\r\n";
    //$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    //$headers .= "From: ".$_POST["nome_contato"]." <".$_POST["email_contato"].">" . "\r\n".
    //"Reply-To: ".$_POST["nome_contato"]." <".$_POST["email_contato"].">" . "\r\n";    
    //$corpo = "
    //<table>
    //        <tr>
    //            <td><img src='".get_bloginfo('template_url')."/images/logo.jpg' /></td>
    //        </tr>
    //</table>
    //<p>".$_POST["nome_contato"].", mandou uma mensagem pelo contao do site do Colégio Santa Amália.</p>
    //<p><strong>Email:</strong> ".$_POST["email_contato"]."</p>
    //<p><strong>Assunto:</strong> ".$_POST["assunto_contato"]."</p>
    //<p><strong>Telefone:</strong> ".$_POST["telefone_contato"]."</p>
    //<p><strong>Como conheceu o Colégio Santa Amália:</strong> ".$_POST["conheceu_contato"]."</p>";
    //if($_POST["qual_contato"]){    
    //    $corpo .= "<p><strong>Qual:</strong> ".$_POST["qual_contato"]."</p>";
    //}
    //$corpo =."<p><strong>Mensagem:</strong> ".$_POST["mensagem"]."</p>
    //<p><strong>Deseja receber newsletters com novidades do Colégio Santa Amália:</strong> ".$_POST["news_contato"]."</p>";
    //
    //$envio= wp_mail("sisillrodrigues@gmail.com", $_POST["assunto_contato"] , $corpo, $headers);
    echo "true";
}
else{
    echo "false";
}

?>
