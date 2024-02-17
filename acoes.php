<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
require_once "./php/conexao.php";

?>


<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <title>Ações</title>
    <head>
      <meta charset="UTF-8">
      <title>Ações</title>
      <link rel="stylesheet" href="./css/menu.css">
      <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="./css/materialdesignicons.min.css">
      <link rel="stylesheet" type="text/css" href="./css/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="./css/animate.min.css">
      <link rel="stylesheet" type="text/css" href="./css/magnific-popup.css">
      <link rel="stylesheet" type="text/css" href="./css/mobiriseicons.css"> 
      <link rel="stylesheet" type="text/css" href="./css/style.css">
      <link rel="stylesheet" type="text/css" href="./css/color/default.css" id="option-color">
      <link rel="stylesheet" href="./css/acoes.css">
      <link rel="stylesheet" href="./js/carrossel.js">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     
      <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    </head>

  </head>
  <body>
  <br>
  <br>
    
  <?php include './menu.php'; ?>


    <br>
    <br>
    <br>
    <main>

      <h1>Quais são as ações tomadas por nós?</h1>
        <br>
       
      
       

       <center> <p> Aqui estão algumas das ações que nossas ONGS realizam com objetivo de ajudar a comunidade:</p> </center>
       <br>
       <div class="boxes-icon">
            <i class="mbri-hearth  text-custom display-4"></i>
        </div>
       
        <br> 

       <figure class="icon-cards mt-3">
  <div class="icon-cards__content">
    <div class="icon-cards__item d-flex align-items-center justify-content-center"><img  class="fundo" src="./img/verde.jpg" ></div>
    <div class="icon-cards__item d-flex align-items-center justify-content-center"><img  class="fundo" src="./img/verde2.jpg" ></div>
    <div class="icon-cards__item d-flex align-items-center justify-content-center"><img  class="fundo" src="./img/verde3.jpg" ></div>
  </div>
</figure>

<br>
<hr>
       <p class="carta"> "Somos gratos por ter a oportunidade de ajudar aqueles que mais precisam. 
        E é com essa motivação que seguimos em frente, trabalhando diariamente para tornar o mundo um lugar melhor. 
        Ao longo dos anos, tivemos a honra de trabalhar com várias ONGs incríveis, cada uma com sua própria missão e propósito. 
        Desde a arrecadação de fundos para a compra de materiais escolares para crianças carentes até a doação de alimentos para famílias que sofrem com a fome, cada ação que realizamos nos aproxima um pouco mais de nosso objetivo de tornar o mundo um lugar mais justo e solidário. 
        E é por isso que continuamos trabalhando incansavelmente para arrecadar fundos, encontrar novas formas de ajudar e ampliar nosso alcance." -<span> Família Donnetion </span></p>
        <hr>
      
   <br>
   
   <br>
</main>
   <br>
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
  </body>
</html>
