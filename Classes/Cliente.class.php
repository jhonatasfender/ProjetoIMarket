<?php

require_once('Conexao.class.php');
require_once('Endereco.class.php');

class Cliente {

    
    protected $codCliente;
    protected $nome;
    protected $cpf;
    protected $dtaNascimento;
    protected $email;
    protected $senha;

    
    public function incluir($nome, $cpf, $dataNascimento, $email, $senha) { 
        $senha = md5($senha);
        $insert = 'insert into cliente(nomeCliente, cpf, dataNascimento, emailCliente, senhaCliente, perfil)values("' . $nome . '","' . $cpf. '","' . $dataNascimento . '","' . $email . '","' . $senha . '", 0)';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);

       // $select = 'select codCliente from cliente where cpf = "'.$cpf.'"';

        //$Acesso->Query($select);

        //$endereco = new EnderecoCLiente();

        //$endereco->incluir($codEnderecoCliente, $cep, $estado, $cidade, $logradouro, $numero, $complemento, $codCliente);

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
    
    public function excluir($codCliente) {

        $delete = 'delete from cliente where id="' . $codCliente . '"';

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
