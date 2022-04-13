<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] = 'O campo nome não pode ser vazio, por favor preecha-o novamente.';
    header('location: index.php');
    return;
}
else if (strlen($nome) < 3) {
    $_SESSION['mensagem-de-erro'] = 'O campo nome não pode ter menos que 3 caracteres.';
    header('location: index.php');
    return;
}

else if (strlen($nome) > 30) {
    $_SESSION['mensagem-de-erro'] = 'O campo nome não pode ter mais que 30 caracteres.';
    header('location: index.php');
    return;
}

else if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = 'Informe um número para a idade.';
    header('location: index.php');
    return;
}

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome .  ' compete na categoria infantil.';
            header('location: index.php');
            return;
        }
    }
} elseif ($idade >= 13 && $idade <= 17) { {
        for ($i = 0; $i <= count($categorias); $i++) {
            if ($categorias[$i] == 'adolecente') {
                $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' compete na categoria adolecente.';
                header('location: index.php');
            return;
            }
        }
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' compete na categoria adulto.';
            header('location: index.php');
            return;
        }
    }
}
