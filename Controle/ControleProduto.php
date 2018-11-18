<?php

require_once("../Classes/Produto.class.php");  //  CARREGA A CLASSE CLIENTE  //

$acao = (isset($_REQUEST["acao"])) ? $_REQUEST["acao"] : "";
$nomeProduto = (isset($_REQUEST["nomeProduto"])) ? $_REQUEST["nomeProduto"] : "";
$codBarra = (isset($_REQUEST["codBarra"])) ? $_REQUEST["codBarra"] : "";
$precoVenda = (isset($_REQUEST["precoVenda"])) ? $_REQUEST["precoVenda"] : "";

switch ($acao) { // Seleciona o Processo //

       case 'incluirProduto': 
            $produto = new Produto();

            $produto->incluirProduto($nomeProduto, $codBarra, $precoVenda);
            
            break;

}
?>