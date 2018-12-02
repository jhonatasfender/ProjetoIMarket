<?php 

include_once "../Classes/Mensagem.class.php";
include_once "../Classes/Conexao.class.php";

$acao       = $_GET['acao'];
//$id         = $_GET['id'];

$obj = new Mensagem();

    if($acao == "cadastrar")
    {
        $assunto    = $_POST['txtassunto'];
        $mensagem   = $_POST['txtmensagem'];
       // echo "$assunto  e $mensagem";
		
        $obj->Cadastrar($assunto, $mensagem);
    }

    if($acao=="alterar")
    {
        $assunto    = $_POST['txtassunto'];
        $mensagem   = $_POST['txtmensagem'];
        
        $obj->Alterar($id, $assunto, $mensagem);
    }
    
    if($acao=="deletar")
    {
        $obj->Deletar($id);
    }
    
      header("location:../View/VisualizarCadastrados.php");
 
?>
