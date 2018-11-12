<?php
include "Conexao.class.php";

class Mensagem extends Conexao
{
	private $ID;
	private $ASSUNTO;
	private $MENSAGEM; 	
	private $DATACADASTRO;
	
	function __construct() //MÉTODO CONSTRUTOR CHAMA O MÉTODO CONSTRUTOR DA CLASSE CONEXÃO
	{
		parent:: __construct();
			
	}	
	

	function Cadastrar($assuntoob,$mensagemob) //MÉTODO CADASTRAR RECEBE PARAMETROS VIA POST DO CONTROLE
	{
		$this->ASSUNTO  = $assuntoob;
		$this->MENSAGEM = $mensagemob;
		$this->DATACADASTRO = date('Y-m-d H:i:s');
		$sql = mysql_query("INSERT INTO tbmensagem(assunto,mensagem,datacadastro)
		 VALUES('$this->ASSUNTO','$this->MENSAGEM','$this->DATACADASTRO')");
	}
	
	
}
?>