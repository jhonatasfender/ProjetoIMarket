<?php

require_once('Conexao.class.php');

class Cliente {

    
    private $codCliente
    Private $nome;
    Private $cpf;
    Private $dtaNascimento;
    Private $email;
    Private $senha;

    // ----- FUNÇÃO DE INCLUSÃO DE DADOS ----- //
    
    public function incluir($nome, $cpf, $dataNascimento, $email, $senha) { 
        $senha = md5($senha);
        $insert = 'insert into cliente(nomeCliente, cpf, dataNascimento, emailCliente, senhaCliente)values("' . $nome . '","' . $cpf. '","' . $dataNascimento . '","' . $email . '","' . $senha . '")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
    }
    
    // ----- FUNÇÃO DE CONSULTA DE DADOS ----- //

    public function consultar($sql) {

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($sql);

        $this->Linha = @mysqli_affected_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }

    // ----- FUNÇÃO DE EXCLUSÃO DE DADOS ----- //
    
    public function excluir($id) {

        $delete = 'delete from cliente where id="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($delete);
    }

    // ----- FUNÇÃO DE EDIÇÃO DE DADOS ----- //
    
    public function alterar($nome, $cpf, $dataNascimento, $email, $senha, $id) {

        $update = 'update cliente set nomeCliente="' . $nome . '", cpf="' . $cpf .'", dataNascimento = "'. $dataNascimento .'" emailCliente="' . $email . '" , senhaCliente="' . $senha . '" where id="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }

}
