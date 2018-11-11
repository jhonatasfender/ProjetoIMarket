<?php

require_once('Conexao.class.php');

class Produto{

	public $codProduto;
	public $nomeProduto;
	public $codBarra;
	public $precoVenda;

	
	public function incluirProduto($codProduto, $nomeProduto, $codBarra, $precoVenda){
		 $insert = 'insert into produto(codProduto, nomeProduto, codBarra, precoVenda)values("' . $codProduto . '","' . $nomeProduto. '","' . $codBarra . '","' . $precoVenda . '")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);

        $insert = 'insert into estoque(codProduto, quantidade)values("' . $codProduto . '", 0)';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
	}

}




?>