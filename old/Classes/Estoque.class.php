<?php

require_once('Conexao.class.php');

class Estoque extends Produto{

	private $quantidade;

	public function inserirProduto($codProduto, $quantidade){
		$update = 'update estoqueSupermercado set '

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
	}

}




?>