<?php

abstract class Conexao
{
	protected $server = "localhost";//SERVIDOR
	protected $user   = "root";//USUARIO
	protected $senha  = "";//SENHA
	protected $banco  = "crud";//NOME DO BANCO DE DADOS
	protected $con;//GUARDA CONEXÃO COM O BANCO DE DADOS
	protected $selBD;//SELECIONAR O BANCO DE DADOS

	function __construct()
	{

		$this->con=mysql_connect($this->server,$this->user,$this->senha,TRUE)
		or die("Erro na Conexão");


		$this->selBD=mysql_select_db($this->banco,$this->con)
		or die("erro no banco");
	}


	function __destruct()
	{
		mysql_close($this->con);
	}
}

?>
