<?php

require_once 'lead.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_real_escape_string($connect, $_POST['nome']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $telefone = mysqli_real_escape_string($connect, $_POST['telefone']);

    $sql = "INSERT INTO lead (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    if(mysqli_query($connect, $sql)):
        header('Location:../lead-obrigado.php?sucesso');
    else:
        header('Location:index.php:erro!');
    endif;
endif;