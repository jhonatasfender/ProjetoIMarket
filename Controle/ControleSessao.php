<?php


require_once("../Classes/Login.class.php");

$login = new Login();

function ProcessoSessao($Processo) {

    switch ($Processo) { // Seleciona o Processo //

        case 'login':


            $login = new Login();



            if(isset($_POST["ok"])){ 
                if($_POST['ok'] == "ok"){
                    $login->logar($_POST["email"],$_POST['senha']);
                    
                    
                }else{
                    echo "erro";
           
                }
            }


            break;

        case 'verificacaoLogin':

            $login = new Login();
            $codSessao = $login->getCliente();

           $login->verificarLogado($codSessao);

            

    }
}
