<?php

if(isset($_POST['email'])) {

    $email_to = "Seu E-mail ID";
 
    $email_subject = "Contato Website";

 
    function died($error) {
 
        // código de erros
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }

    // validação
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('Lamento, mas parece haver um problema com o formulário que você enviou.');       
 
    }
 
     
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];
 
 
    $email_mensagem = "Detalhes do formulário abaixo.\n\n";
 
     
 
	  function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_mensagem .= "Nome: ".clean_string($nome)."\n";
 
    $email_mensagem .= "Email: ".clean_string($email)."\n";
 
    $email_mensagem .= "Mensagem: ".clean_string($mensagem)."\n";

 
	// create email headers
	 
	$headers = 'From: '.$email."\r\n".
	 
	'Reply-To: '.$email."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	@mail($email_to, $email_subject, $email_mensagem, $headers);  


	?>

 <?php
 
}
 
?>
