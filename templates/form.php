<form id="myForm" action="<? $PHP_SELF; ?>" method="POST">
    <input id="name" class="field nameField" type="text" placeholder="Nome" name="nome">
    <br>
    <input id="email" class="field mailField" type="email" placeholder="E-mail" name="email">
    <br>
    <input id="phone" class="field PhoneField" type="number" placeholder="Telefone" name="telefone">
    <br>
    <textarea id="body" class="field mesageField" placeholder="Digite sua mensagem aqui" name="mensagem"></textarea>
    <br>
    <input class="field submitField" type="submit" name="BTEnvia" value="Enviar">
</form>
<?php



if (isset($_POST['BTEnvia'])) {

    //Variaveis de POST, Alterar somente se necessário 
    //====================================================
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
    //====================================================

    //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
    //==================================================== 
    $email_remetente = "lucas@impactamidia.com.br"; // deve ser uma conta de email do seu dominio 
    //====================================================

    //Configurações do email, ajustar conforme necessidade
    //==================================================== 
    $email_destinatario = "lucas@impactamidia.com.br"; // pode ser qualquer email que receberá as mensagens
    $email_reply = "$email";
    $email_assunto = "Contato Formulário"; // Este será o assunto da mensagem
    //====================================================

    //Monta o Corpo da Mensagem
    //====================================================
    $email_conteudo = "Nome = $nome \n";
    $email_conteudo .= "Email = $email \n";
    $email_conteudo .= "Telefone = $telefone \n";
    $email_conteudo .= "Mensagem = $mensagem \n";
    //====================================================

    //Seta os Headers (Alterar somente caso necessario) 
    //==================================================== 
    $email_headers = implode("\n", array("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
    //====================================================

    //Enviando o email 
    //==================================================== 
    if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)) {
        echo "<h4 class='notification'>E-Mail enviado com sucesso!</h4>";
    } else {
        echo "</b>Falha no envio do E-Mail!</b>";
    }
    //====================================================
}
?>