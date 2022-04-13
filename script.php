<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'O campo nome não pode ser vazio.';
    return;
}
if(strlen($nome) < 3){
    echo 'O nome deve conter mais que 3 caracteres.';
    return;
}

if(strlen($nome) > 30) {
    echo 'O nome não pode conter mais que 30 caracteres.';
    return;
}

if(empty($idade)){
    echo 'O campo idade não pode ser vazio.';
    return;
}

if(!is_numeric($idade)) {
    echo 'Informe um número para a idade.';
    return;
}

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{  
    for($i = 0; $i <= count($categorias); $i++)
    {
if($categorias[$i] == 'infantil')
echo 'O nadador ' .$nome. ' compete na categoria infantil.';
    }

} else if($idade >= 13 && $idade <= 17 )
{
    {  
        for($i = 0; $i <= count($categorias); $i++)
        {
    if($categorias[$i] == 'adolecente')
    echo 'O nadador ' .$nome. ' compete na categoria adolecente.';
        }
}
}
else 
     
        for($i = 0; $i <= count($categorias); $i++)
        {
    if($categorias[$i] == 'adulto')
    echo 'O nadador ' .$nome. ' compete na categoria adulto.';
        }


