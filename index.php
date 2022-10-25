<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
// Estrutura create
// $produto->setNome('Notebook DELL Latitude');
// $produto->setDescricao('21, 512gb SSD');


// Estrutura Update
// $produto->setId(1);
// $produto->setNome('Notebook DELL Latitude');
// $produto->setDescricao('21, 512gb SSD');

$produtoDao = new \App\Model\ProdutoDao();

// // Cadastrando produto
// $produtoDao->create($produto);

// // Atualizar dados do produto
// $produtoDao->update($produto);

// Deletar registro
$produtoDao->delete(2); // Passar id direto

// Mostrar produtos
$produtoDao->read($produto);
foreach ($produtoDao->read() as $produto) :
    echo $produto['nome'] . "<br/>";
    echo $produto['descricao'] . "<hr>";
endforeach;
// var_dump($produto);
