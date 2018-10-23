<?php


require_once("../Classes/Login.class.php");

$login = new Login();

function ProcessoSessao($Processo) {

    switch ($Processo) { // Seleciona o Processo //

        case 'login':


            $login = new Login();



            if(isset($_POST["ok"])){ 
                if($_POST['ok'] == "true"){
                    $login->logar($_POST["email"],$_POST['senha']);
                    
                    
                }
            }


            break;

        case 'verificacaoLogin':

            $login = new Login();

            $login->verificarLogado();

    }
}
