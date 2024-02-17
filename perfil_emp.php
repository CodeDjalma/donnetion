<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();



// Verifica se o ID do usuário está presente na sessão
if (!isset($_SESSION['id_empresa'])) {
    header("Location: login.php");
    exit();
}
$genero = $_SESSION["genero"];
$codigo= "";


require_once "./php/conexao.php";
$id_empresa = $_SESSION["id_empresa"];
//$codigo = $_SESSION["codigo"]; 

// Obtém a foto de perfil da empresa do banco de dados
$usuarioID = $_SESSION["id_empresa"]; 
$sql = "SELECT foto FROM empresas WHERE id_empresa = $usuarioID";
$resultado = mysqli_query($conexao, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $linha = mysqli_fetch_assoc($resultado);
    $nomeImagem = $linha['foto'];

    if (!empty($nomeImagem)) {
        $foto = "./img_emp/" . $nomeImagem;
    } else {
        $foto = ""; // Defina como uma string vazia caso não queira usar uma imagem padrão
    }
} else {
    $foto = ""; // Defina como uma string vazia caso não queira usar uma imagem padrão
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="description" content="Premium Responsive Bootstrap 5 Personal Template" />
    <meta name="keywords" content="bootstrap 5, premium, cv, personal, Portfolio, multipurpose" />
    <meta name="author" content="SRBThemes" />
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/perfil_empresa.css">
    <link rel="shortcut icon" href=".img\pote.png">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="./css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="./css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="./css/mobiriseicons.css"> 
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/color/default.css" id="option-color">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Perfil</title>
</head>

<?php include './menu.php'; //menu ?>
<body>


    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>
    

    <br>
    <br>
    <br>
    <h3>
        <title>Perfil Empresa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </h4>
    <body>
    <br>
    <br>
    <center> <h1>Meu Perfil</h1> </center>
    <center> <p> Aqui você poderá alterar seus cupons de desconto e a imagem de sua empresa.</p> </center>
    <hr>

       
        <main>
        <section>
    <center> <h2>Imagem</h2>
    <div class="foto-perfil-container">
    <img src="<?php echo $foto; ?>" alt="Foto de perfil" style="width: 300px; height: 300px; filter: grayscale(50%);">
    </div> </center>

    <center>
    <form action="./php/processa_perfil_emp.php" method="post" enctype="multipart/form-data">
  <br>
  <p>Selecione sua foto abaixo:</p>
  <input type="file" name="foto" accept="image/*" class="btn btn-primary">
  <center>
    <br>
      <button type="submit" value="Enviar" class="btn btn-primary" id="sendPhotoButton">Enviar Foto</button>
  </center>
</center>
</form>
</section>
      <br>
      <br>
<!-- Botão para abrir o modal de editar perfil -->
<button type="button" class="btn btn-primary left-button" data-bs-toggle="modal" data-bs-target="#editPerfilModal">
  Atualizar Cupom
  <br>
</button>



      <!-- Informações do perfil da empresa -->
      <div class="info-container">
  <b>Nome:</b> <?php echo $_SESSION["nome_empresa"];?>
  <br><br>
  <?php if (empty($_SESSION["codigo"])): ?>
    <b>Cupom: </b> Nenhum cupom encontrado
  <?php else: ?>
    <b>Cupom:</b> <?php echo $_SESSION["codigo"];?>
  <?php endif; ?>
  <br><br>
  <b>Telefone:</b> <?php echo $_SESSION["telefone_empresa"];?>
  <br><br>
  <b>E-mail:</b> <?php echo $_SESSION["email_empresa"];?>
  <br><br>
  <b>Cnpj:</b> <?php echo $_SESSION["cnpj_empresa"];?>
  <br><br>
  <b>Mensagem Exibida:</b> <?php echo $_SESSION["texto_empresa"];?>
  <br><br>
</div>


  <hr>

           


        </main>
            <!--START FOOTER-->
            <footer class="footer bg-classe">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div class="text-center text-white footer-alt">
                            <ul class="list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            </ul>
                            <p class="copyright_content mb-0 mt-3"> 2023 &copy; Donnetion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--END FOOTER-->
        
<!-- Modal de Edição do perfil -->
<div class="modal fade" id="editPerfilModal" tabindex="-1" aria-labelledby="editPerfilModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPerfilModalLabel">Atualizar Cupom</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" id="form-edit-perfil" action="./php/editar_emp.php">

          <div class="mb-3">
            <label for="cupom" class="form-label">Cupom</label>
            <input type="text" name="codigo" class="form-control" id="codigo" placeholder="Insira Seu Cupom De Desconto" value="<?php echo isset($_SESSION["codigo"]) ? $_SESSION["codigo"] : '';?>">
          </div>

          <div class="mb-3">
            <label for="validade" class="form-label">Validade</label>
            <input type="text" name="validade" class="form-control" id="validade" placeholder="Data de validade do cupom" value="<?php echo isset($_SESSION["validade"]) ? $_SESSION["validade"] : '';?>">
          </div>

          <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade de usos</label>
            <input type="text" name="quantidade" class="form-control" id="quantidade" placeholder="Quantidade de usos" value="<?php echo isset($_SESSION["quantidade"]) ? $_SESSION["quantidade"] : '';?>">
          </div>

          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Sucesso -->
<div class="modal fade" id="modalSucesso" tabindex="-1" role="dialog" aria-labelledby="modalSucessoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  bg-success">
        <h5 class="modal-title" id="modalSucessoLabel">Pronto!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Perfil atualizado com sucesso!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary  bg-primary" id="btnSalvarFechar" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>








        <!-- Back To Top -->    
        <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- Javascript do perfil -->
        <script src="./js/perfil.js"></script>

        <!--All Javascript -->
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/jquery.min.js"></script>

        <!-- Text Rotate -->
        <script src="./js/jquery.simple-text-rotator.js"></script>

        <!-- Owl Carousel -->
        <script src="./js/owl.carousel.min.js"></script>

        <!-- Switcher Js -->
        <script src="./js/switcher.js"></script> 

        <!-- Work Filter -->
        <script src="./js/isotope.js"></script>

        <!-- Magnific Popup Js -->
        <script src="./js/jquery.magnific-popup.min.js"></script>

        <!-- Custom Js -->
        <script src="./js/custom.js"></script>
        <script>
            $(".simple-text-rotate").textrotator({
                animation: "fade",
                speed: 3500
            });
        </script>
    </body>
    </html>
