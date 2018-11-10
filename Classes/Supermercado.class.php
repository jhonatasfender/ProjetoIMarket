<?php

require_once('Conexao.class.php');



class Supermercado {

	private $codSupermercado;
	private $nomeFantasia;
	private $emailSupermercado;
	private $razaoSocial;
	private $cnpj;
	private $inscricao;
	private $senhaSupermercado;

}

public function incluir($nomeFantasia, $emailSupermercado, $razaoSocial, $cnpj, $inscricao, $senhaSupermercado) { 
        $senha = md5($senhaSupermercado);
        $insert = 'insert into supermercado(nomeFantasia, emailSupermercado, razaoSocial, cnpj, inscricao, senhaSupermercado)values("' . $nomeFantasia . '","' . $emailSupermercado. '","' . $razaoSocial . '","' . $cnpj . '","' . $inscricao . '","' . $senhaSupermercado . '")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
    }



?>