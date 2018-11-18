<?php

require_once('Conexao.class.php');

class Produto{

	public $codProduto;
	public $nomeProduto;
	public $codBarra;
	public $precoVenda;

	
	public function incluirProduto ($nomeProduto, $codBarra, $precoVenda){
		 $insert = 'insert into produto(nomeProduto, codBarra, precoVenda)values("' . $nomeProduto. '","' . $codBarra . '","' . $precoVenda . '")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);

        
	}

}




?>