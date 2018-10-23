<?php

session_start();
require_once('Conexao.class.php');
 
Class Login{
 
   Private $email;
   Private $senha;

   function verificarLogado($cod){

      if(!isset($cod)){
         echo $cod;
          echo '<script>alert("Usuário não logado !");</script>'; 
         //header("Location: ./login.php");
         exit();
      }
   }
 
   function logar($email,$senha){

      $Acesso = new Acesso();

      $Acesso->Conexao();

      $query = $Acesso->Query("select * from cliente where emailCliente ='".$email."'");
   
         
      // Usuário não forneceu a senha ou o login 
      if(!$email || !$senha) 
      { 
      echo "Você deve digitar sua senha e login!"; 
      exit; 
      }  

       
      $sql = "SELECT * FROM cliente WHERE emailCliente = '" .$email."'";
      $result = mysqli_query($Acesso->cnx, $sql);
      $total = mysqli_num_rows($result) or die (mysqli_error($Acesso->cnx));

      // Caso o usuário tenha digitado um login válido o número de linhas será 1
      if($total){ 
         // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 
         $dados = mysqli_fetch_array($result); 
          
         // Agora verifica a senha 

         if(!strcmp($senha, $dados["senhaCliente"])) { 
            
            $_SESSION["codCliente"]= $dados["codCliente"]; 
            $_SESSION["nomeCliente"] = stripslashes($dados["nomeCliente"]); 
            
            header("Location: MercadoriaEmpresa.php"); 

            exit; 
         }else{
         // Senha inválida
          
         header("Location: Login.php"); 
         
         exit; 
         } 
      }else{
      // Login inválido  
     
     
     echo "echo '<script>alert('Emai Inválido!');</script>'; "; 
     header("Location: Login.php"); 
          
      exit; 
      } 

      

      
 }


   function getCliente(){
      if (isset($_SESSION["codCliente"])){
         return $_SESSION["codCliente"];
      }
   }
 
   function deslogar(){
      session_destroy();
      header("Location: ./index.php");
   }
 
}

?>