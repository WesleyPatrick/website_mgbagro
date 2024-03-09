<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $finalidade = $_POST["finalidade"];
    $horario = $_POST["horario"];
    $mensagem = $_POST["mensagem"];

    $destinatario = "daniel@gmbagro.com.br"; 

    $assunto = "Solicitação de Ligação - $finalidade";

    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Finalidade: $finalidade\n";
    $corpo .= "Horário: $horario\n\n";
    $corpo .= "Mensagem:\n$mensagem";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";


    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "Solicitação de ligação enviada com sucesso!";
    } else {
        echo "Erro ao enviar a solicitação de ligação. Por favor, tente novamente.";
    }
} else {
    echo "Erro: método de requisição inválido.";
}
?>