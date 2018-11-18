<?php

require_once("../Classes/Cliente.class.php");  //  CARREGA A CLASSE CLIENTE  //



function Processo($Processo) {

    switch ($Processo) { // Seleciona o Processo //

       case 'incluir': // Processo de inclusão de cliente//

            global $linha; //  VARIAVEL GLOBAL LINHA  //
            global $rs; //VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO  //

            $cliente = new Cliente(); //  CRIA O OBJETO DE CLIENTE //

            $cliente->consultar("select * from cliente"); 
            $linha = $cliente->Linha;
            $rs = $cliente->Result;
            if(isset($_POST['ok'])){
                if ($_POST['ok'] == 'true') {
                    $cliente->incluir($_POST['nome'], $_POST['cpf'], $_POST['dataNascimento'], $_POST['email'],$_POST['senha'],$_POST['cep'], $_POST['estado'], $_POST['cidade'], $_POST['logradouro'],$_POST['numero'],$_POST['complemento']);
                        echo '<script>alert("Cadastrado com sucesso !");</script>'; 
                        //echo '<script>window.location="index.php";</script>'; 
                }
            }
            break;


        case 'editar':

            global $linha; 
            global $rs; 

            $cliente = new Cliente(); // CRIA O OBJETO DE CLIENTE//

            $cliente->consultar("select * from cliente where id=" . $_GET['id']);
            $linha = $cliente->Linha;
            $rs = $cliente->Result;

            if(isset($_POST['ok'])){
                if ($_POST['ok'] == "true") {
                    $cliente->alterar($_POST['nome'], $_POST['cpf'], $_POST['dataNascimento'], $_POST['email'], $_POST['senha'], $_GET['id']);
                    echo '<script>alert("Alterado com sucesso !");</script>'; 
                    echo '<script>window.location="consultarcliente.php";</script>'; 
                }
            }
            break;

        

            
    }
}
