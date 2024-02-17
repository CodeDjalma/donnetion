<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
require_once "./php/conexao.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" pt-br>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donnetion</title>
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
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS do SweetAlert -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">

<!-- JavaScript do SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>

</head>
<body>
<?php
// Verifica se o ID do usuário está presente na sessão
if (isset($_SESSION['id_usuario'])) {
    // Usuário logado
    $nomeUsuario = $_SESSION['nome'];
} elseif (isset($_SESSION['id_empresa'])) {
    // Empresa logada
    $nomeEmpresa = $_SESSION['nome_empresa'];
}
?>
  <?php include './menu.php'; $foto = isset($_SESSION["foto"]) ? $_SESSION["foto"] : "";             //menu ?>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>

	<!-- Start Navbar -->
	
	<!-- End Navbar -->


    <!-- START HOME -->
    <section class="section header-bg h-100vh  d-flex" id="home">

        <div class="banner"> 

            <h1 class="header-name text-black  mb-0"> <span class="simple-text-rotate fw-bold">Bem-Vindo(a) ao Donnetion</span></h1>
            
            <h2> <span class="simple-text-rotate fw-bold">Agora doar ficou mais interessante!</span> </h2>

           


            <article>

     
             </article>

        </div>

        
    </section>
    <!-- END HOME -->

    <!-- START ABOUT -->
    <section class="section bg-light" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mt-3">
                        <img src="./img/Donnetion.png" alt="" class="img-fluid mx-auto d-block img-thumbnail">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3">
                        <h2><span class="fw-bold"></span></h2>
                        <h2 class="mt-4">Olá!  Somos o <span class="text-custom fw-bold">Donnetion.</span></h2>
                        <p class="text-muted mt-4">Bem vindo(a) ao Donnetion!, o site que te beneficia por fazer uma boa ação. </p>
                        <p class="text-muted mt-2">Um desconto dado por nossas empresas parceiras, é o que você ganha ao doar para as ONGs cadastradas dentro do site.</p>
                        <p class="text-muted mt-2">Ou seja, além de ajudar organizações não governamentais que tanto sofreram nessa pandemia você tambem sai ganhando por isso. Faça a diferença, seja a diferença, é o nosso lema. </p>
                        <div>
                            <ul class="mb-0 about-social list-inline mt-4">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

    <!-- START SERVICES -->
    <section class="section " id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Quem são os nossos <span class="fw-bold">Parceiros</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">Saiba a quem ajudamos e quem nos ajudam.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center align-self-center">
                <div class="col-lg align-items-center align-self-center">
                    <div class="text-center services-boxes rounded p-4 mt-4">
                        <div class="services-boxes-icon">
                            <i class="mbri-hearth  text-custom display-4"></i>
                        </div>
                        
                        <div class="">
                            <h5 class="mb-0">ONGs</h5>
                            <div class="services-title-border"></div>
                            <p class="text-muted mt-3">Organizações Não Governamentais espalhadas por todo o país.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-items-center align-self-center">
                    <div class="text-center services-boxes rounded p-4 mt-4">
                        <div class="services-boxes-icon">
                            <i class="mbri-briefcase text-custom display-4"></i>
                        </div>
                        <div class="">
                            <h5 class="mb-0">Empresas</h5>
                            <div class="services-title-border"></div>
                            <p class="text-muted mt-3">Instituições que dividem conosco o mesmo senso de solidariedade.</p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    <!-- END SERVICES -->

    <!-- START CTA -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="fw-bold">Gostaria de começar as doações?</h2>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-custom">Doar agora!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->

    
    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <br>
                        <br>
                        <br>
                        <h2><span class="fw-bold">Gostaria de ser uma de nossas ONGS parceiras? entre em contato via e-mail ou prencha os campos abaixo e aguarde nosso contato.</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">.</p>
                    </div>
                </div>
            </div> 
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="text-center">
                        <div>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <div>
                            <i class="mbri-letter text-custom h1"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 contact_detail-title fw-bold">Email</h5>
                            <p class="text-muted">Donnetion@gmail.com</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="form-kerri contact_form">
                        <form id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" placeholder="Nome da Ong..." aria-label="Primeiro nome">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Seu email...">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" placeholder="Quanto tempo atuam na área?" aria-label="Primeiro nome">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" placeholder="Telefone para contato (Opcional)" aria-label="Primeiro nome">
                                    </div>
                                </div>
                                <br>

                                <center> <h5>Escreva um texto autoexplicativo do projeto e qual a motivação para virar um de nossos parceiros.</h5></center>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Sua Mensagem"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end mt-2">

                            <input type="submit" id="submit" name="send" class="btn btn-custom text-uppercase" value="Enviar">

                            <div id="success-message" style="display: none;">
                                Enviado com sucesso!
                                </div>


                            </div>  
                                </div>
                            </div>
                        </form>
                        
                        <script>
  document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    // Exibe a mensagem de sucesso em uma janela no centro da tela
    Swal.fire({
      icon: 'success',
      title: 'Enviado com sucesso!',
      showConfirmButton: false,
      timer: 2000 // Tempo em milissegundos (2 segundos)
    }).then(function() {
      // Limpa os campos do formulário
      document.getElementById('contact-form').reset();
    });
  });
</script>
                    </div>  
                </div>
            </div>
        </div>
    </section>

    <!-- END CONTACT -->

    <!--START FOOTER-->
    <footer class="footer bg-light">
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
    

    <!-- Back To Top -->    
    <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>

    
   


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