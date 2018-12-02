<?php

require_once('../Controle/ControleSessao.php');




?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html" charset="utf-8" />
  		<title>iMarket</title>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<meta name="description" content="" >
  		<link rel="StyleSheet" href="style/stylelogin.css" />
  		<script src="http://exportkit.com/cdn/js/ek-googlefont-autoloader-v2-min.js"></script>
  		<!-- Add your custom HEAD content here -->

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<script src="js/Validacaoform.js"></script>
  <div id="content-container" >
			<div id="_bg___1"  ></div>

			<div id="group_2298"  >
				<img src="Assets/juan_gomez_711699_unsplash.png" id="juan_gomez_711699_unsplash" />
				<div id="rectangle_1610"  ></div>

			</div>
			<img src="Assets/rectangle_1.png" id="rectangle_1" />

			<div id="group_1"  >
				<div id="supercado_delivery" >
					SUPERMERCADO<br/>DELIVERY
				</div>
				<div id="cadastre_se_e_fa_a_suas_compras__online_com_comodidade__em_qualquer_hora_e_lugar__evitando_longas_filas_e_tempo_de_espera_" >
					Cadastre-se e faça suas compras  online com comodidade, em qualquer hora e lugar, evitando longas filas e tempo de espera.
				</div>

			</div>
			<div id="acessar_sistema" >
				ACESSAR SISTEMA
			</div>

      <form action="../Controle/ControleSessao.php?acao=login"  method="post" id="form" name="form">
        <div class="form-group" id="focus_counter" >
          <label for="exampleInputEmail1" id="e_mail_ou_cpf_cnpj">E-mail ou CPF/CNPJ</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
          <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu e-mail com ninguém.</small>
        </div>
        <div class="form-group" id="focus_counter_1" >
          <label for="exampleInputPassword1" id="digite_sua_senha" >Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha" required>
        </div>



			<div id="btn_login"  >
        <div >		<input type="hidden" name="ok" id="ok"/>
				      <input type="submit"  id="rectangle_166" name="button" value="Entrar"/>
				      
        </div>

    	</form>
			</div>

			<img src="Assets/cart.png" id="cart" />
			<div id="imarket" >
				iMarket
			</div>

		</div>
		<script>var specialChars = document.querySelectorAll("span.char"); for(var c=0; c<specialChars.length; c++){ specialChars[c].innerHTML = decodeURIComponent(specialChars[c].innerHTML); }</script>

</body>
</html>
