<?php

require_once('Conexao.class.php');
require_once('Cliente.class.php');

class EnderecoCliente {

	private $codEnderecoCliente;
	private $cep;
	private $estado;
	private $cidade;
	private $logradouro;
	private $numero;
	private $complemento;
	private $codCliente;

	protected function incluir($codEnderecoCliente, $cep, $estado, $cidade, $logradouro, $numero, $complemento, $codCliente){


	 $insert = 'insert into enderecoCliente(cep, estado, cidade, logradouro, numero, complemento, codCliente)values("' . $enderecoCliente . '","' . $cep. '","' . $estado . '","' . $cidade . '","' . $logradouro . '","' . $numero . '","' . $complemento . '","' . $codCliente . '")';

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