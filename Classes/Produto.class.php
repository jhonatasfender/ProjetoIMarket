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

        //$Acesso->Query($insert);

       if ($Acesso->linhasAfetadas($insert) > 0){
        	echo '<script>alert("Produto Cadastrado com sucesso !");</script>'; 
            echo '<script>window.location="../view/MercadoriaEmpresa.php";</script>';
        }else{
        	echo "Falha ao Cadastrar o produto";
        	echo '<script>window.location="../view/MercadoriaEmpresa.php";</script>';
        }



        
	}

}




?>