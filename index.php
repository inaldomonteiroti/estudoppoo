<?php
// SETS
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setNome('Microfone');
$produto->setDescricao('xuxaxxxxxxxxxxxxxxxxxxxxx');

//var_dump($produto);

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->create($produto);

$produtoDao->read();

foreach($produtoDao->read() as $produto):
	echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;








