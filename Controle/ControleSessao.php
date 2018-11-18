<?php


require_once("../Classes/Login.class.php");
$acao = (isset($_REQUEST["acao"])) ? $_REQUEST["acao"] : "";

$login = new Login();



    switch ($acao) { // Seleciona o Processo //

        case 'login':


            $login = new Login();



            $login->logar($_POST["email"],$_POST['senha']);
            echo $_SESSION["nomeCliente"];
                    
                    
                


            break;

        case 'verificacaoLogin':

            $login = new Login();
            $codSessao = $login->getCliente();

           $login->verificarLogado($codSessao);

            

    }

