<?php
require_once('../Controle/ControleUsuario.php');
Processo('incluir');
?>


<script src="js/Validacaoform.js"></script>



    <form class="form-signin" action="" id="form" name="form" method="post">
        

       
            <input type="text" id="nome" name="nome" placeholder="Nome" required autofocus>
            <input type="text" id="cpf" name="cpf" placeholder="cpf" required>
            <input type="date" id="dataNascimento" name="dataNascimento" placeholder="date" required >
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="senha" name="senha" placeholder="Senha" required>
        
             <input type="button" name="button" id="button" value="Cadastrar" class="btn btn-primary" onclick="validar(document.form);"/>
            <input type="hidden" name="ok" id="ok" />
           

    </form>

</div>
