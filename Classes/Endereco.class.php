<?php

require_once('Conexao.class.php');
require_once('Cliente.class.php');

class Endereco {

	private $codEndereco;
	private $cep;
	private $estado;
	private $cidade;
	private $logradouro;
	private $numero;
	private $complemento;
	private $codCliente;

	public function incluir($cep, $estado, $cidade, $logradouro, $numero, $complemento){

		

	 	$insert = 'insert into enderecoCliente(cep, estado, cidade, logradouro, numero, complemento, codCliente)values("' . $cep. '","' . $estado . '","' . $cidade . '","' . $logradouro . '","' . $numero . '","' . $complemento . '","' . $codCliente . '")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
    }

    public function alterar($codEnderecoCliente, $cep, $estado, $cidade, $logradouro, $numero, $complemento) {

        $update = 'update enderecoCliente set cep="' . $cep . '", cidade="' . $cidade .'", estado = "'. $estado .'", logradouro="' . $logradouro . '", numero="' . $numero . '", complemento ="' . $complemento. '" where codEndereco ="' . $codEnderecoCliente. '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        
    }




}	

?>