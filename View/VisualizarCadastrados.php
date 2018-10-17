<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h2 align="center">EMAILS CADASTRADAS</h2><br><br>
        <table border="1px solid" align="center">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>DATA</th>
                
            </tr>
        <?php
            
            include_once '../Classes/Mensagem.class.php';
            $mostrar = new Mensagem;
            
           $sql = mysql_query("select * from usuario");
           while($linha = mysql_fetch_array($sql))
           {
               $id         = $linha['id'];
               $nome       = $linha['nome'];
               $email  	   = $linha['email'];
               $data       = $linha['datecadastro'];
                          
        ?>
            
            <tr>
                <th><?php echo $id; ?></th>
                <th><?php echo $nome;?></th>
                <th><?php echo $email;?></th>
                <th><?php echo $datecadastro; ?></th>
                <th><a href="AlterarPessoa.php?id=<?php echo $id;?>">ALTERAR</a></th>
                <th><a href="../Controle/ControleMensagem.php?acao=deletar&id=<?php echo $id;?>">DELETAR</a></th>
            </tr>
            
        <?php
           }
        ?>
        </table>
    </body>
</html>
