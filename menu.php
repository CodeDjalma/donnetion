<?php
date_default_timezone_set('America/Sao_Paulo');
require_once "./php/conexao.php";
$imagemPadrao = './img_user/perfil.jpg';



if (isset($_SESSION["foto"]) && !empty($_SESSION["foto"])) {
    $foto = $_SESSION["foto"];
  } elseif (isset($_SESSION["id_usuario"])) {
    $nomeUsuario = $_SESSION['nome'];
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
  } elseif (isset($_SESSION["id_empresa"])) {
    $nomeEmpresa = $_SESSION['nome_empresa'];
    $empresaID = $_SESSION["id_empresa"]; 
    $sql = "SELECT foto FROM empresas WHERE id_empresa = $empresaID";
    $resultado = mysqli_query($conexao, $sql);
  
    if ($resultado && mysqli_num_rows($resultado) > 0) {
      $linha = mysqli_fetch_assoc($resultado);
      $nomeImagem = $linha['foto'];
  
      if (!empty($nomeImagem)) {
        $foto = "./img_emp/" . $nomeImagem;
      } 
    }
  }
?>




<!-- Menu -->
<header class="header">
    <a href="./index.php" class="header__logo">
        <img src="./img/Donnetion novo1 @.png" width="80" height="80">
    </a>
    <img src="./img/logotipo2.png" alt="" width="190">
    <i class='bx bx-menu header__toggle' id="header-toggle" color="white"></i>

    <nav class="nav" id="nav-menu">
        <div class="nav__content bd-grid">
            <?php if (isset($_SESSION['id_usuario'])) { ?>
                <a href="perfil_user.php" class="nav__perfil">
                    <div class="nav__img">
                    <img src="<?php echo $foto; ?>" alt="Foto de perfil">
                    </div>
                    <div>
                        <span class="nav__name"><?php echo $nomeUsuario; ?></span>
                    </div>
                </a>
            <?php } elseif (isset($_SESSION['id_empresa'])) { ?>
                <a href="perfil_emp.php" class="nav__perfil">
                    <div class="nav__img">
                    <img src="<?php echo $foto; ?>" alt="Foto de perfil">
                    </div>
                    <div>
                        <span class="nav__name"><?php echo $nomeEmpresa; ?></span>
                    </div>
                </a>
            <?php } ?>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="./index.php" class="nav__link active">Home</a></li>

                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link">Sobre <i class='bx bx-chevron-down dropdown__icon'></i></a>
                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="sobre.php" class="nav__link">Sobre Nós</a></li>
                            <li class="dropdown__item"><a href="tutorial.php" class="nav__link">Como Doar?</a></li>
                        </ul>
                    </li>

                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link">Doação <i class='bx bx-chevron-down dropdown__icon'></i></a>
                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="acoes.php" class="nav__link">Ações</a></li>
                            <li class="dropdown__item"><a href="parceiros.php" class="nav__link">Doar</a></li>
                            
                        </ul>
                    </li>

                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link dropdown__link">Cadastre-se <i class='bx bx-chevron-down dropdown__icon'></i></a>
                        <ul class="dropdown__menu">
                            <li class="dropdown__item"><a href="cad.php" class="nav__link">Pessoa Fisica</a></li>
                            <li class="dropdown__item"><a href="empresa.php" class="nav__link">Pessoa Juridica</a></li>
                        </ul>
                    </li>

                    <?php if (isset($_SESSION['id_usuario']) || isset($_SESSION['id_empresa'])) { ?>
                        <li class="nav__button"><a href="./php/logout.php" class="nav__login">Sair</a></li>
                    <?php } else { ?>
                        <li class="nav__button"><a href="login.php" class="nav__login">Entrar</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

        <!--===== MAIN JS (É DO MENU) =====-->
        <script src="js/mains.js"></script>


