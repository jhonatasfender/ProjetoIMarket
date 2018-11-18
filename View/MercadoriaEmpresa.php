<!--
/*
 *	This content is generated from the PSD File Info.
 *	(Alt+Shift+Ctrl+I).
 *
 *	@desc
 *	@file 		4
 *	@date 		0
 *	@title 		4
 *	@author
 *	@keywords
 *	@generator 	Export Kit v1.2.8.xd
 *
*/
 -->

 <?php

require_once('../Controle/ControleSessao.php');
require_once('../Classes/Conexao.class.php');
//ProcessoSessao('verificacaoLogin');



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
	<head>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<title>4</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" >
		<link rel="StyleSheet" href="style/mercadoriastyle.css"/>
    <link rel="StyleSheet" href="style/menulateral.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="http://exportkit.com/cdn/js/ek-googlefont-autoloader-v2-min.js"></script>
    <script src="js/ModaladdProduto.js"></script>
		<!-- Add your custom HEAD content here -->

	</head>
	<body>

    <!-- Menu lateral -->
		<div id="container_menu_side" >
				<img src="Assets/path_2743.png" id="path_2743" />

			<div id="symbol_2___1"  >
				<img src="Assets/path_606.png" id="path_606" />
					<div id="menu" >
						MENU
					</div>
          <ul>
            <li >
              <a href="./EntregasEmpresa.php">
                <div id="group_209">
                  <img src="Assets/history.png" id="history" />
                </div>
                <div id="text_3" >
                  Entregas
                </div>
              </a>
            </li>
          				<li>
                    <a href="http://localhost/ProjetoIMarket/View/ListProdutosCliente.php">
                      <img src="Assets/basket.png" id="basket" />
                      <div id="text_2" >
                        Mercadorias
                      </div>
                    </a>
          				</li>
          				<li>
          					<div id="mask_group_211"  >
          						<img src="Assets/settings__1_.png" id="settings__1_" />
          						<div id="text">
          							Configurações
          						</div>
                      </div>
          					</li>
          				<li>
          						<div id="mask_group_213"  >
          						<img src="Assets/logout_variant.png" id="logout_variant" />
          						</div>

          						<div id="text_1" >
          							Sair
          						</div>
          				</li>
          			</ul>

              <img src="Assets/cart.png" id="cart" />
              <div id="imarket" >
                iMarket
              </div>
            </div>

          <!-- Barra superior  -->




      			<div id="group_2296"  >
      				<div id="rectangle_872"  ></div>

      				<div id="_8_32_pm" >
      					8:32 PM
      				</div>
      				<div id="hoje__01_de_outubro_de_2018" >
      					Hoje, 01 de Outubro de 2018
      				</div>

      			</div>



      			<div id="rectangle_1618"  ></div>
      			<div id="rectangle_1625"  ></div>






  <div id="symbol_5___1"  >


    <div id="icon"  >
      <img src="Assets/icon_1.png" id="icon_1" />

    </div>

      <form action="../Controle/ControleProduto.php?acao=incluirProduto" method="post">
        <div class="form-group">
          
          <label for="exampleFormControlInput1">Nome do Produto</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="nomeProduto" placeholder="Nome do Produto">



          <label for="exampleFormControlInput1">Código de Barras</label>
          <input type="text" class="form-control" id="exampleFormControlInput2" name="codBarra" placeholder="1234567890101111213">



          <label for="exampleFormControlInput1">Preço para venda</label>
          <input type="text" class="form-control" id="exampleFormControlInput3" name="precoVenda" placeholder="1.99">
          
          <label for="exampleFormControlInput1">Quantidade</label>
          <input type="text" class="form-control" id="exampleFormControlInput3" name="quantidade" placeholder="1">

          <label for="exampleFormControlInput1">Unidade de Medida</label>
          <select id="rectangle_76" aria-describedby="emailHelp" placeholder="Selecione" name="unidadeMedida">
          <?php
                $acesso = new Acesso();



                $sql = "SELECT * FROM unidadeMedida";

              
               $result = mysqli_query($acesso->cnx, $sql);
                while ($tbl = mysqli_fetch_array($result)){
                        $codUnidadeMedida = $tbl['codUnidadeMedida'];
                        $nomeUnidadeMedida = $tbl['nomeUnidadeMedida'];


                    ?>





                <option value="<?= $codUnidadeMedida ?>"><?= $nomeUnidadeMedida ?></option><?php } ?>

          </select>
          
          <label for="exampleFormControlInput1">Departamento</label> 
          <select id="rectangle_76" aria-describedby="emailHelp" placeholder="Selecione" name="departamentoProduto" >
          <?php
                $acesso = new Acesso();



                $sql = "SELECT * FROM departamentoProduto";

                $result = $acesso->Query($sql);
               
                while ($tbl = mysqli_fetch_array($result)){
                        $codDepartamento = $tbl['codDepartamento'];
                        $nomeDepartamento = $tbl['nomeDepartamento'];


                    ?>





                        <option value="<?= $codDepartamento ?>"><?= $nomeDepartamento ?></option><?php } ?>

          </select>

          <button type="submit" >ADICIONAR PRODUTO</button>
        </div>
          
      </form>
      
    </div>

  </div>


  <div id="round_btn_default_dark"  >
    <img src="Assets/teal_circle.png" id="teal_circle" />

    <div id="ic_add_white"  >
      <img src="Assets/ic_add_white_1.png" id="ic_add_white_1" />

    </div>

    <div id="group_332"  >
      <img src="Assets/gradient_border_2.png" id="gradient_border_2" />
      <img src="Assets/gradient_border_1.png" id="gradient_border_1" />

    </div>

  </div>








		</div>
		<script>var specialChars = document.querySelectorAll("span.char"); for(var c=0; c<specialChars.length; c++){ specialChars[c].innerHTML = decodeURIComponent(specialChars[c].innerHTML); }</script>
	</body>
</html>
