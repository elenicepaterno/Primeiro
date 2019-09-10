<?php

require_once "classes/perfil.class.php";

$Mostrar_dados = new Perfil();
$Mostrar_dados->consulta();

// $Mostrar_dados->getMonth();

// var_dump($_SESSION['dados']['Nome_cidade']);
// var_dump($Mostrar_dados->resultado_cidade[2]['Nome_cidade']);


?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Perfil</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="media/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Nav Bar -->

  <?php //require_once "include/navbar.php"; ?>

  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
      aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <a class="navbar-brand text-brand" href="index.php">Llama<span class="color-b">Aqui</span></a>
    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfil.php">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.html">Contato</a>
        </li>
      </ul>
    </div>
    <button type="button" class="btn btn-b-n d-none d-md-block">Sair</button>
  </div>
</nav>

<!--/ Intro Single /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h5 class="title-single">Oi, <?php if (isset($Mostrar_dados->dados_usuario['Nome'])) {echo $Mostrar_dados->dados_usuario['Nome'];}?>!</h5>        
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single /-->


<!-- Formulário --> 
<section>
  <div class="container emp-profile">
    <form method="post">
      <div class="row">
        <div class="col-md-4">

          <?php include_once("include/upload_imagem.php"); ?>

        </div>

        <!-- Navegação - Dados pessoais, Filtros e Match -->


        <div class="col-md-6">
          <div class="profile-head">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Seus dados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Preferências</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Menu -->

      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-8">
          <div class="tab-content profile-tab" id="myTabContent">

            <!-- Dados pessoais -->

            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

              <div class="row mb-4">                
                <div class="col-md-12">
                  <label>Atualize seus dados para que as pessoas te encontrem</label>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Nome</label>
                </div>
                <div class="col-md-6">
                  <input class="form-control mb-3" id="colFormLabel" value="<?php if (isset($Mostrar_dados->dados_usuario['Nome'])) {echo $Mostrar_dados->dados_usuario['Nome'];}?>" placeholder="Seu nome">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                </div>
                <div class="col-md-6">
                  <input class="form-control mb-3" id="colFormLabel" value="<?php if (isset($Mostrar_dados->dados_usuario['Email'])) {echo $Mostrar_dados->dados_usuario['Email'];}?>" placeholder="Seu email">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="colFormLabel" class="col-sm col-form-label">Nova senha</label>
                </div>
                <div class="col-md-6">
                  <input class="form-control mb-3" id="colFormLabel" value="" name="Senha">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Telefone</label>
                </div>
                <div class="col-md-6">
                  <input class="form-control mb-3" id="colFormLabel" value="<?php if (isset($Mostrar_dados->dados_usuario['Telefone'])) {echo $Mostrar_dados->dados_usuario['Telefone'];}?>" placeholder="Ex: 3361 8244">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Celular</label>
                </div>
                <div class="col-md-6">
                  <input class="form-control mb-3" id="colFormLabel" value="<?php if (isset($Mostrar_dados->dados_usuario['Celular'])) {echo $Mostrar_dados->dados_usuario['Celular'];}?>" placeholder="Ex: 99961 8233">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Sexo</label>
                </div>
                <div class="col-md-6">

                  <div class="custom-control custom-radio custom-control-inline dados_usuarios mb-3">
                    <input type="radio" id="masculino" name="sexo" class="custom-control-input radio" value="Masculino" <?php if (isset($Mostrar_dados->dados_usuario['Sexo']) and ($Mostrar_dados->dados_usuario['Sexo'] == "Masculino")) {echo "checked=''";}?>>
                    <label class="custom-control-label" for="masculino">Masculino</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline dados_usuarios">
                    <input type="radio" id="feminino" name="sexo" class="custom-control-input radio" value="Feminino" <?php if (isset($Mostrar_dados->dados_usuario['Sexo']) and ($Mostrar_dados->dados_usuario['Sexo'] == "Feminino")) {echo "checked=''";}?>>
                    <label class="custom-control-label" for="feminino">Feminino</label>
                  </div>

                </div>
              </div>              

              <div class="row">
                <div class="col-md-12">
                  <label for="colFormLabel" class="col-sm col-form-label">Onde quero morar:</label>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Cidade</label>
                </div>
                <div class="col-md-6">
                  <select id="inputCity" class="form-control mb-3" name="cidade">

                    <?php foreach ($Mostrar_dados->resultado_cidade as $chave => $valor) { ?>

                    <option <?php if ($Mostrar_dados->resultado_cidade[$chave]['Nome_cidade'] == $_SESSION['dados']['Nome_cidade']) {echo "selected";}?> value="<?=$Mostrar_dados->resultado_cidade[$chave]['Id_cidade']?>"><?=utf8_encode($Mostrar_dados->resultado_cidade[$chave]['Nome_cidade'])?></option>

                    <?php } ?> 

                  </select>                
                </div> 
              </div>               

              <div class="row">
                <div class="col-md-6">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Estado</label>
                </div>

                <div class="col-md-6">

                 <select id="inputState" class="form-control mb-3" name="estado">

                  <?php while ($resultado = mysqli_fetch_array($Mostrar_dados->resultado_estado)) { ?>

                  <option <?php if ($resultado['Nome_estado'] == $_SESSION['dados']['Nome_estado']) {echo "selected";}?> value="<?=$resultado['Id_estado']?>"><?=utf8_encode($resultado['Nome_estado'])?></option>

                  <?php }?>

                </select>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="colFormLabel" class="col-sm mb-3 col-form-label">Data de nascimento</label>
              </div>
               <div style="resize: none;" class="col-md-6">
                
                  <?php 

                  $data_nascimento = explode ("-", $Mostrar_dados->dados_usuario['Data_nascimento']);

                  ?>
                  <select for="colFormLabel" class="form-group col-sm-2" name="dia" class="select" required="">

                    <option value="<?php if (isset($_POST['dia'])) { echo $_POST['dia'];} else { echo '';}?>"><?php if (isset($_POST['dia'])) { echo $_POST['dia'];} else { echo 'Dia';}?></option>

                    <?php for ($i = 1; $i <= 31; $i++) {?>
                    <option><?=$i?></option>
                    <?php } ?>

                  </select>

                  <select for="colFormLabel" class="form-group col-sm-2" name="mes" class="select" required="">
                    <option value="<?php if (isset($_POST['mes'])) { echo $_POST['mes'];} else { echo '';}?>"><?php if (isset($_POST['mes'])) { echo $_POST['mes'];} else { echo 'Mês';}?></option>

                    <option value="01" <?php if ($data_nascimento[1] == "01"){echo "selected";} ?>>01</option>
                    <option value="02" <?php if ($data_nascimento[1] == "02"){echo "selected";} ?>>02</option>
                    <option value="03" <?php if ($data_nascimento[1] == "03"){echo "selected";} ?>>03</option>
                    <option value="04" <?php if ($data_nascimento[1] == "04"){echo "selected";} ?>>04</option>
                    <option value="05" <?php if ($data_nascimento[1] == "05"){echo "selected";} ?>>05</option>
                    <option value="06" <?php if ($data_nascimento[1] == "06"){echo "selected";} ?>>06</option>
                    <option value="07" <?php if ($data_nascimento[1] == "07"){echo "selected";} ?>>07</option>
                    <option value="08" <?php if ($data_nascimento[1] == "08"){echo "selected";} ?>>08</option>
                    <option value="09" <?php if ($data_nascimento[1] == "09"){echo "selected";} ?>>09</option>
                    <option value="10" <?php if ($data_nascimento[1] == "10"){echo "selected";} ?>>10</option>
                    <option value="11" <?php if ($data_nascimento[1] == "11"){echo "selected";} ?>>11</option>
                    <option value="12" <?php if ($data_nascimento[1] == "12"){echo "selected";} ?>>12</option>
                  </select>


                  <select for="colFormLabel" class="form-group col-sm-2" name="ano" class="select" required="">

                    <option value="<?php if (isset($_POST['ano'])) { echo $_POST['ano'];} else { echo '';}?>"><?php if (isset($_POST['ano'])) { echo $_POST['ano'];} else { echo 'Ano';}?></option>
                    <?php for ($i = date('Y'); $i >= (date('Y') - 100); $i--) {?>
                    <option><?=$i?></option>
                    <?php } ?>

                  </select>
              

              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Descrição</label>
              </div>
              <div class="col-md-4">
                <textarea style="resize: none;" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Essa é a descrição que seu perfil mostrará nas buscas de perfil"><?php if (isset($Mostrar_dados->dados_usuario['Descricao'])) {echo $Mostrar_dados->dados_usuario['Descricao'];}?></textarea>
              </div>
            </div>
          </div>


          <!-- Filtros -->

          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class="row mb-4">                
              <div class="col-md-12">
                <label>Se não marcar nenhuma das opções será considerado que não se importa</label>
              </div>
            </div>

            <!-- Filtro Fuma -->
            <div class="row">                
              <div class="col-md-6">
                <label>Você fuma?</label>
              </div>
              <div class="col-md-6 mb-3">
               <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input radio" name="Fuma" id="fsim" value="1" <?php if (isset($_POST['Fuma']) and ($_POST['Fuma'] == "1")) {echo "checked=''";}?>>
                <label class="custom-control-label" for="fsim"><strong>Sim</strong></label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input radio" name="Fuma" id="fnao" value="0" <?php if (isset($_POST['Fuma']) and ($_POST['Fuma'] == "0")) {echo "checked=''";}?>>
                <label class="custom-control-label" for="fnao"><strong>Não</strong></label>
              </div>
            </div>
          </div>

          <!--  Filtro Aceita_fumar --> 
          <div class="row">
            <div class="col-md-6">
              <label>Aceita fumantes?</label>
            </div>
            <div class="col-md-6 mb-3">
             <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input radio" name="aceita_fumar" id="dsim" value="1" <?php if (isset($_POST['aceita_fumar']) and ($_POST['aceita_fumar'] == "1")) {echo "checked=''";}?>>
              <label class="custom-control-label" for="dsim"><strong>Sim</strong></label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input radio" name="aceita_fumar" id="dnao" value="0" <?php if (isset($_POST['aceita_fumar']) and ($_POST['aceita_fumar'] == "0")) {echo "checked=''";}?>>
              <label class="custom-control-label" for="dnao"><strong>Não</strong></label>
            </div>
          </div>
        </div>

        <!-- Bebe? -->
        <div class="row">
          <div class="col-md-6">
            <label>Você bebe?</label>
          </div>
          <div class="col-md-6 mb-3">
           <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input radio" name="bebe" id="tsim" value="1" <?php if (isset($_POST['bebe']) and ($_POST['bebe'] == "1")) {echo "checked=''";}?>>
            <label class="custom-control-label" for="tsim"><strong>Sim</strong></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input radio" name="bebe" id="tnao" value="0" <?php if (isset($_POST['bebe']) and ($_POST['bebe'] == "0")) {echo "checked=''";}?>>
            <label class="custom-control-label" for="tnao"><strong>Não</strong></label>
          </div>
        </div>
      </div>

      <!-- Aceita quem bebe? --> 
      <div class="row">
        <div class="col-md-6">
          <label>Aceita quem bebe?</label>
        </div>
        <div class="col-md-6 mb-3">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input radio" name="aceita_beber" id="asim" value="1" <?php if (isset($_POST['aceita_beber']) and ($_POST['aceita_beber'] == "1")) {echo "checked=''";}?>>
            <label class="custom-control-label" for="asim"><strong>Sim</strong></label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input radio" name="aceita_beber" id="anao" value="0" <?php if (isset($_POST['aceita_beber']) and ($_POST['aceita_beber'] == "0")) {echo "checked=''";}?>>
            <label class="custom-control-label" for="anao"><strong>Não</strong></label>
          </div>
        </div>
      </div>

      <!-- Tem animal? -->
      <div class="row">
        <div class="col-md-6">
          <label>Tem algum animal doméstico?</label>
        </div>
        <div class="col-md-6 mb-3">
         <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input radio" name="tem_animal" id="hsim" value="1" <?php if (isset($_POST['tem_animal']) and ($_POST['tem_animal'] == "1")) {echo "checked=''";}?>>
          <label class="custom-control-label" for="hsim"><strong>Sim</strong></label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input radio" name="tem_animal" id="hnao" value="0" <?php if (isset($_POST['tem_animal']) and ($_POST['tem_animal'] == "0")) {echo "checked=''";}?>>
          <label class="custom-control-label" for="hnao"><strong>Não</strong></label>
        </div>
      </div>
    </div>

    <!-- Aceita animais -->
    <div class="row">
      <div class="col-md-6">
        <label>Aceita animais?</label>
      </div>
      <div class="col-md-6 mb-3">
       <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input radio" name="aceita_animais" id="gsim" value="1" <?php if (isset($_POST['aceita_animais']) and ($_POST['aceita_animais'] == "1")) {echo "checked=''";}?>>
        <label class="custom-control-label" for="gsim"><strong>Sim</strong></label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input radio" name="aceita_animais" id="gnao" value="0" <?php if (isset($_POST['aceita_animais']) and ($_POST['aceita_animais'] == "0")) {echo "checked=''";}?>>
        <label class="custom-control-label" for="gnao"><strong>Não</strong></label>
      </div>
    </div>
  </div>

  <!-- Trabalha? -->
  <div class="row">
    <div class="col-md-6">
      <label>Trabalha?</label>
    </div>
    <div class="col-md-6 mb-3">
     <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input radio" name="trabalha" id="qsim" value="1" <?php if (isset($_POST['trabalha']) and ($_POST['trabalha'] == "1")) {echo "checked=''";}?>>
      <label class="custom-control-label" for="qsim"><strong>Sim</strong></label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input radio" name="trabalha" id="qnao" value="0" <?php if (isset($_POST['trabalha']) and ($_POST['trabalha'] == "0")) {echo "checked=''";}?>>
      <label class="custom-control-label" for="qnao"><strong>Não</strong></label>
    </div>
  </div>
</div>

<!-- Estuda? -->
<div class="row">
  <div class="col-md-6">
    <label>Estuda?</label>
  </div>
  <div class="col-md-6 mb-3">
   <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input radio" name="estuda" id="zsim" value="1" <?php if (isset($_POST['estuda']) and ($_POST['estuda'] == "1")) {echo "checked=''";}?>>
    <label class="custom-control-label" for="zsim"><strong>Sim</strong></label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input radio" name="estuda" id="znao" value="0" <?php if (isset($_POST['estuda']) and ($_POST['estuda'] == "0")) {echo "checked=''";}?>>
    <label class="custom-control-label" for="znao"><strong>Não</strong></label>
  </div>
</div>
</div>

<!-- Aceita gênero? -->
<div class="row">
  <div class="col-md-6">
    <label>Aceita morar com pessoas do sexo:</label>
  </div>
  <div class="col-md-4 mb-3">
   <div class="select_sexo">
    <select class="select custom-select custom-select" name="Sexo">
      <option selected>Escolha uma opção</option>
      <option value="Masculino" <?php if (isset($_POST['Sexo']) and ($_POST['Sexo'] == "Masculino")) {echo "selected=''";}?>>Masculino</option>
      <option value="Feminino" <?php if (isset($_POST['Sexo']) and ($_POST['Sexo'] == "Feminino")) {echo "selected=''";}?>>Feminino</option>
      <option value="NI" <?php if (isset($_POST['Sexo']) and ($_POST['Sexo'] == "NI")) {echo "selected=''";}?>>Não me importo</option>
    </select>
  </div>
</div>
</div>

<!-- Pagar até quanto? -->
<div class="row mb-3">
  <div class="col-md-6">
    <label>Até quanto quer pagar?</label>
  </div>
  <div class="col-md-6">
    <input id="Aceita_pagar" type="range" name="Aceita_pagar" 
    oninput="getElementById('Porcentagem').innerHTML = this.value;" 
    min="0" max="5000" value="<?php if (isset($_POST['Aceita_pagar'])) {echo $_POST['Aceita_pagar'];} else {echo 0;}?>" step="50" />
    <span id="Porcentagem"><?php if (isset($_POST['Aceita_pagar'])) {echo $_POST['Aceita_pagar'];} else {echo 0;}?></span><br><br>
  </div>
</div>                                        
</div>

</div>

<div class="row">
 <button type="submit" name="Enviar" class="btn btn-b-n">Salvar alterações</button>
</div>
</div>

</div>
</div>


<!-- Lista dos Match's -->

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-8">
  </ul>
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Match's</a>
    </li>
  </ul>
  <div class="row mt-5">
    <div class="col-md-6">
      <label>"Usuário banco de dados com tabela de like recebido"</label>
    </div>
    <div class="col-md-6">
      <a href="#">Analisar</a>
    </div>
  </div>

  <!--  classes do botão salvar alteracoes = d-none d-md-block -->

</div>         
</div>
</div>
</form>           
</div>
</section>

<!--/ footer Star /-->
<?php require_once "include/footer.php"; ?>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!--   <script type="text/javascript">
    var $range = document.querySelector('#Aceita_pagar'),
    $value = document.querySelector('span');
    $range.addEventListener('#Aceita_pagar', function() {
      $value.textContent = this.value;
    });
  </script> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="media/js/main.js"></script>

</body>
</html>