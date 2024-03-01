<?php
if(isset($_POST))
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$sql = "INSERT INTO portfolio(nome, email, mensagem)
        VALUES('$nome','$email','$mensagem')";
if($conn->query($sql) === true){
    echo "Olá ".$nome." recebi sua mensagem logo entrarei em contato.";
}else{
    echo "Olá ".$nome." parece que ocorreu um erro. Logo vou corrigir";
}

$conn->close();
?>
