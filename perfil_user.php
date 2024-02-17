<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
// Verifica se o ID do usuário está presente na sessão
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}
require_once "./php/conexao.php";
$genero = $_SESSION["genero"];
$id_usuario = $_SESSION["id_usuario"];
$email_usuario= $_SESSION["email"];
$imagemPadrao = './img_user/perfil.jpg';

// Verifica se há uma foto de perfil definida para o usuário
if (isset($_SESSION["foto"]) && !empty($_SESSION["foto"])) {
  $foto = $_SESSION["foto"];
} else {
  $usuarioID = $_SESSION["id_usuario"]; 
  $sql = "SELECT foto FROM usuarios WHERE id_usuario = $usuarioID";
  $resultado = mysqli_query($conexao, $sql);

  if ($resultado && mysqli_num_rows($resultado) > 0) {
    $linha = mysqli_fetch_assoc($resultado);
    $nomeImagem = $linha['foto'];

    if (!empty($nomeImagem)) {
      $foto = "./img_user/" . $nomeImagem;
    } else {
      $foto = $imagemPadrao;
    }
  } else {
    $foto = $imagemPadrao;
  }
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
    <link rel="shortcut icon" href=".img\pote.png">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="./css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="./css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="./css/mobiriseicons.css"> 
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/color/default.css" id="option-color">
    <link rel="stylesheet" type="text/css" href="./css/sweetalert2.min.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Perfil</title>
</head>
<body>
<!-- Menu -->

<?php include './menu.php'; ?>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>
    
    <br>
    <br>
    <br>
    <center>
    <h3>
        <title>Meu Perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </h4>
</center>
    <body>
    <br>
    <br>
    <center> <h1>Meu Perfil</h1> </center>
    <center> <p> Aqui você poderá ler seus comentários, definir uma imagem de perfil e editar seus dados pessoais.</p> </center>
    <hr>

       
        <main>

      <center>  <section>
    <h2>Foto</h2>
    <div class="foto-perfil-container">
      <?php
if (!empty($foto)) {
    echo '<img src="' . $foto . '" alt="Foto de perfil" style="width: 300px; height: 300px;">';
} else {
    echo '<img src="caminho/para/imagem-padrao.jpg" alt="Imagem padrão" style="width: 300px; height: 300px;">';
}
?>

</div>

<form action="./php/processa_perfil.php" method="post" enctype="multipart/form-data">
  <br>
  <p>Selecione sua foto abaixo:</p>
  <input type="file" name="foto" accept="image/*" class="btn btn-primary">
  <center>
    <br>
      <button type="submit" value="Enviar" class="btn btn-primary" id="sendPhotoButton">Enviar Foto</button>
  </center>
</form>

</section>
      </center>
      <style>
  .left-button {
    float: left;
    margin-right: 10px;
  }

  .right-button {
    float: right;
    margin-right: 10px;
  }
</style>

<!-- Botão para abrir o modal de editar perfil -->
<button type="button" class="btn btn-primary left-button" data-bs-toggle="modal" data-bs-target="#editPerfilModal">
  Editar Perfil
</button>

<!-- botão para confirmar email -->
<button id="btn-confirmar-email" data-toggle="modal" data-target="#modal-email" class="btn btn-primary left-button">Confirmar E-mail</button>


<?php
$status = $_SESSION['status'];
$statusPredefinido = "3";
if ($status === $statusPredefinido) {

    echo '
        <button type="button" class="btn btn-primary right-button" data-bs-toggle="modal" data-bs-target="#editPerfilModal2">
            Aprovar Empresas
        </button>';
}
?>



<!-- botão para abrir meus cupons -->
<a href="./meucupom.php" class="btn btn-primary right-button">Meus Cupons</a>
<br>
<br>
<hr>

<!-- confirmar emp -->
<?php
$consulta = "SELECT id_empresa, nome_empresa, cnpj_empresa, email_empresa, area_empresa, texto_empresa, endereco_empresa, telefone_empresa, foto AS foto_emp FROM empresas";

// Executar a consulta SQL
$resultado = $conexao->query($consulta);

// Verificar se a consulta retornou algum resultado
if ($resultado->num_rows > 0) {
    // Percorrer os resultados e armazenar os dados em variáveis
    while ($row = $resultado->fetch_assoc()) {
        $nome_empresa = $row['nome_empresa'];
        $cnpj_empresa = $row['cnpj_empresa'];
        $email_empresa = $row['email_empresa'];
        $area_empresa = $row['area_empresa'];
        $texto_empresa = $row['texto_empresa'];
        $endereco_empresa = $row['endereco_empresa'];
        $telefone_empresa = $row['telefone_empresa'];
        $foto_emp = $row['foto_emp'];
        $id_empresa = $row['id_empresa'];
    }
  }
        else {
          echo "Nenhuma empresa encontrada.";
        }

        if (!empty($foto_emp)) {
          $caminhoFoto = 'img_emp/' . $foto_emp; // Caminho completo para a foto
          // Verificar se o arquivo existe
          if (file_exists($caminhoFoto)) {
              $foto_emp = $caminhoFoto; // Atualizar a variável $foto_emp com o caminho completo
          } else {
              $foto_emp = 'img_emp/foto_padrao.jpg'; // Caminho para uma foto padrão, caso o arquivo não exista
          }
      } else {
          $foto_emp = 'img_emp/foto_padrao.jpg'; // Caminho para uma foto padrão, caso o campo esteja vazio
      }if (!empty($foto_emp)) {
    $caminhoFoto = 'img_emp/' . $foto_emp; // Caminho completo para a foto
    // Verificar se o arquivo existe
    if (file_exists($caminhoFoto)) {
        $foto_emp = $caminhoFoto; // Atualizar a variável $foto_emp com o caminho completo
    } 
}
        ?>   
  <script src="./js/sweetalert2.min.js"></script>

<div class="modal fade" id="editPerfilModal2" tabindex="-1" aria-labelledby="editPerfilModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPerfilModalLabel2">Confirmar Empresa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" id="form-edit-perfil" data-id="<?php echo $id_empresa; ?>">
     
          <div class="mb-3">
            <label for="nome_empresa" class="form-label">Nome Empresa</label>
            <input type="text" name="nome_empresa" class="form-control" id="editCpf" readonly value="<?php echo $nome_empresa;?>">
          </div>

          <div class="mb-3">
            <label for="cnpj" class="form-label">Cnpj</label>
            <input type="text" name="cnpj" class="form-control" id="editCpf" readonly value="<?php echo $cnpj_empresa;?>">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" name="email" class="form-control" id="editCpf" readonly value="<?php echo $email_empresa;?>">
          </div>

          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="editCpf" readonly value="<?php echo $telefone_empresa?>">
          </div>

          <div class="mb-3">
            <label for="area" class="form-label">Área</label>
            <input type="text" name="area" class="form-control" id="editCpf" readonly value="<?php echo $area_empresa;?>">
          </div>

          <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" class="form-control" id="editCpf" readonly value="<?php echo $endereco_empresa;?>">
          </div>
          <div class="mb-3">
            <label for="texto" class="form-label">Texto</label>
            <input type="text" name="texto" class="form-control" id="editCpf" readonly value="<?php echo $texto_empresa;?>">
          </div>
          <br>
    


          <div class="mb-3">
            <center> <img src="<?php echo $foto_emp; ?>" alt="Foto de perfil" style="width: 300px; height: 300px; filter: grayscale(50%);"> </center>
          </div>
          <input type="hidden" name="id_empresa" value="<?php echo $id_empresa; ?>">
          <center>
          <button type="submit" class="btn btn-primary btn-aceitar" data-id="<?php echo $id_empresa; ?>">Aceitar</button>
          <button type="submit" class="btn btn-danger btn-recusar" data-id="<?php echo $id_empresa; ?>">Recusar</button>
        </center>
      </div>
</form>
    </div>
  </div>
</div>

<!-- JS da confirmação das empresas -->
<script>
$(document).ready(function() {
  $('.btn-aceitar').click(function(e) {
    e.preventDefault();
    var idEmpresa = $(this).data('id');
    var form = $('#form-edit-perfil');
    // Faça uma requisição AJAX para atualizar o status para 2 (aprovado)
    $.ajax({
      url: './php/confirmar_emp.php', // Nome do arquivo PHP modificado
      type: 'POST',
      data: {
        id: idEmpresa,
        status: 2
      },
      success: function(response) {
        // Exibe a notificação de sucesso
        Swal.fire({
          icon: 'success',
          title: 'Sucesso',
          text: response.message
        }).then(function() {
          location.reload(); // Atualiza a página após fechar a notificação
        });
      },
      error: function(xhr, status, error) {
        // Exibe a notificação de erro
        Swal.fire({
          icon: 'error',
          title: 'Erro',
          text: 'Erro ao atualizar o status'
        });
        console.log(xhr.responseText);
      }
    });
  });

  $('.btn-recusar').click(function(e) {
    e.preventDefault();
    var idEmpresa = $(this).data('id');
    // Faça uma requisição AJAX para atualizar o status para 0 (recusado)
    $.ajax({
      url: './php/confirmar_emp.php', // Nome do arquivo PHP modificado
      type: 'POST',
      data: {
        id: idEmpresa,
        status: 0
      },
      success: function(response) {
        // Exibe a notificação de recusa
        Swal.fire({
          icon: 'info',
          title: 'Recusado',
          text: 'Status atualizado para Recusado'
        }).then(function() {
          location.reload(); // Atualiza a página após fechar a notificação
        });
      },
      error: function(xhr, status, error) {
        // Exibe a notificação de erro
        Swal.fire({
          icon: 'error',
          title: 'Erro',
          text: 'Erro ao atualizar o status'
        });
        console.log(xhr.responseText);
      }
    });
  });
});



</script>



      <!-- Informações do perfil do usuário -->
      <div class="info-container">
       <b> Nome:</b> <?php echo $_SESSION["nome"];?> 
        <br>
        <br>
        <b> Data Nascimento:</b> <?php echo date('d/m/Y', strtotime($_SESSION["datnasc"]));?>
        <br>
        <br>
        <b> Genêro:</b> <?php if ($genero === 'm') {
             echo "Masculino";
             }elseif
                   ($genero === 'f'){
                    echo "Feminino";
             }elseif ($genero === 'o'){
                    echo "Outros";
             }
             ?>     
        <br>
        <br>
        <b>Telefone:</b> <?php echo $_SESSION["tel"];?>
        <br>
        <br>
        <b>E-mail:</b> <?php echo $_SESSION["email"];?>
        <br>
        <br>
        <b>Cpf:</b> <?php echo $_SESSION["cpf"];?> 
      </div>
      <br>
      <br>
 
                <h2>Seus Comentários</h2>
                <p>Comentários feito pelo user</p>
            </section>
            <hr>

            <!-- Botão de Desativar conta -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDesativarConta">Desativar Conta</button></br></br>
            


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
        <h5 class="modal-title" id="editPerfilModalLabel">Editar Perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" id="form-edit-perfil" onsubmit="validarFormulario(event);">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="editNome" placeholder="Nome completo" value="<?php echo $_SESSION["nome"];?>">
          </div>
          <div class="mb-3">
            <label for="datanasc" class="form-label">Data de Nascimento</label>
            <input type="text" name="datnasc" class="form-control" id="editDataNasc" data-original-value="<?php echo $_SESSION["datnasc"]; ?>" placeholder="dd/mm/aaaa" value="<?php echo date('d/m/Y', strtotime($_SESSION["datnasc"])); ?>">
          </div>
          <div class="mb-3">
            <label for="genero" class="form-label">Gênero</label>
            <select name="genero" class="form-select" id="editGenero">
              <option value="m" <?php if ($_SESSION['genero'] === 'm') echo 'selected'; ?>>Masculino</option>
              <option value="f" <?php if ($_SESSION['genero'] === 'f') echo 'selected'; ?>>Feminino</option>
              <option value="o" <?php if ($_SESSION['genero'] === 'o') echo 'selected'; ?>>Outros</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="tel" class="form-control" id="editTelefone" placeholder="Telefone" value="<?php echo $_SESSION["tel"];?>">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" id="editEmail" readonly  value="<?php echo $_SESSION["email"];?>">
          </div>
          <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control" id="editCpf" readonly value="<?php echo $_SESSION["cpf"];?>">
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

<!-- Modal de Sucesso para Desativar Conta -->
<div class="modal fade" id="modalSucessoDesativar" tabindex="-1" role="dialog" aria-labelledby="modalSucessoDesativarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="modalSucessoDesativarLabel">Conta Desativada</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sua conta foi desativada com sucesso.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-primary" id="btnFecharDesativar" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Confirmação de Desativação de Conta -->
<div class="modal fade" id="modalDesativarConta" tabindex="-1" role="dialog" aria-labelledby="modalDesativarContaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDesativarContaLabel">Confirmação</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Você tem certeza que deseja desativar sua conta? Esta ação é irreversível.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <button type="button" class="btn btn-danger" id="btnConfirmarDesativarConta">Sim</button>
      </div>
    </div>
  </div>
</div>

<!-- Janela Modal Confirma email-->
<div class="modal fade" id="modal-email" tabindex="-1" role="dialog" aria-labelledby="modal-email-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-email-label">Confirmação de E-mail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Mandamos um e-mail de confirmação para você. Verifique sua caixa de entrada.</p>
      </div>
    </div>
  </div>
</div>

<script>
  function desativarConta() {
    var formData = new FormData();
    formData.append("userId", <?php echo $_SESSION['id_usuario']; ?>);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/desativar.php", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          if (response.success) {
            $('#modalSucessoDesativar').modal('show'); // Abrir a janela modal de sucesso
            $('#modalDesativarConta').modal('hide'); // Fechar a janela modal de confirmação
          } else {
            alert(response.message);
          }
        } else {
          alert("Ocorreu um erro durante a requisição.");
        }
      }
    };
    xhr.send(formData);
  }

  document.getElementById("btnConfirmarDesativarConta").addEventListener("click", desativarConta);

  $(document).ready(function() {
    $('#modalSucessoDesativar').on('hidden.bs.modal', function() {
      window.location.href = './index.php'; // Redirecionar o usuário para a página desejada
    });

    $('#modalSucessoDesativar .close, #btnFecharDesativar').click(function() {
      window.location.href = './index.php'; // Redirecionar o usuário para a página desejada
    });

    $('#modalDesativarConta').on('hidden.bs.modal', function() {
      $(this).find('form')[0].reset(); // Limpa os campos do formulário ao fechar a janela modal
    });
  });
</script>

<script>
  // Quando o botão "Confirmar e-mail" for clicado
  document.getElementById('btn-confirmar-email').addEventListener('click', function() {
    // Exibir a janela modal
    $('#modal-email').modal('show');
    
    // Realizar uma requisição AJAX para enviar o e-mail
    $.ajax({
      url: './php/enviar_email.php', // Arquivo PHP que enviará o e-mail
      type: 'POST',
      success: function(response) {
        console.log(response); // Exibir a resposta do servidor no console
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText); // Exibir o erro no console
      }
    });
  });
</script>






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
