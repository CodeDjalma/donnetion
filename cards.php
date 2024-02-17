<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
$id_usuario = $_SESSION["id_usuario"];
require_once "./php/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <title>Parceiros</title>
    <link rel="stylesheet" href="./css/parceiros.css">
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
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="./css/sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/card.js"></script>
    <link rel="stylesheet" href="./css/cartao.css">
   
</head>

<?php include './menu.php'; //menu ?>

<body>
        <br>
        <br> 
        <br>
        <br>
        <span class="parceiros">
        <img src='./img/Donnetion.png' alt='Foto empresa' style='width: 700px; height: 500px;'>
        <center> 
</span>
     
          
          <h3>
        Aqui, você encontrará uma lista das ONGs e empresas que apoiamos e com as quais trabalhamos em conjunto para alcançar nossos objetivos.
         Todas as organizações listadas abaixo são de confiança e compartilham dos nossos valores e missão de fazer do mundo um lugar melhor. Temos orgulho de trabalhar com elas e de apoiá-las em suas iniciativas.</h3>
   
        <br>
        <br>
        <br>
        

        <center> <h2>Empresas Parceiras!</h2> </center>
        <br>
        <br>
        <br>
        <br>
        <div class="carousel">
  <div>
  <?php        
  $sql = "SELECT texto_empresa, foto, status_empresa FROM empresas LIMIT 1";
  $resultado = mysqli_query($conexao, $sql);
  $linha = mysqli_fetch_array($resultado);

  if ($linha && $linha['status_empresa'] == 2) {
      $nomeImagem1 = "./img_emp/" . $linha['foto'];
      echo "
          <img src='$nomeImagem1' alt='Foto empresa' style='width: 700px; height: 500px;'>
          <br></br>
          <p>$linha[texto_empresa]</p>
          <hr>
      ";
  }
?>


  <div>
  <?php        
  $sql = "SELECT texto_empresa, foto, status_empresa FROM empresas LIMIT 1 OFFSET 1"; // Correção no limite para obter a segunda linha
  $resultado = mysqli_query($conexao, $sql);
  $linha = mysqli_fetch_array($resultado);

  if ($linha && $linha['status_empresa'] == 2) {
      $nomeImagem2 = "./img_emp/" . $linha['foto'];
      echo "
          <img src='$nomeImagem2' alt='Foto empresa' style='width: 700px; height: 500px;'>
          <br></br>
          <p>$linha[texto_empresa]</p>
          <hr>
      ";
  }
?>
  </div>
</div>

      
      <script type="text/javascript">
        $(document).ready(function(){
          $('.carousel').slick({
            autoplay: false,
            autoplaySpeed: 2000,
            arrows: false,
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1
          });
        });
      </script>



        <center> <h2>Ongs!</h2> </center>
        <br>
        <br>
        <br>
        <br>
  <div class='row'>
       <div class="col-3">
            <div class="card">
                <div class="img">
             
                </div>

                <div class="content">
                    <span class="title">Ong Alimentação</span>
                    <p class="desc">ONG que tem como objetivo combater a fome e a desnutrição em regiões carentes. Ela busca arrecadar doações de alimentos e recursos financeiros para a compra de alimentos básicos, como arroz, feijão, macarrão, entre outros. A alimentAção também realiza campanhas de conscientização sobre a importância de uma alimentação saudável e balanceada, além de promover oficinas culinárias para ensinar a preparar refeições nutritivas e acessíveis.</p>
                    <br> 
                    
                    <button onclick="openModal()">FAÇA UMA DOAÇÃO</button>
                </div>
                
                <div class="arrow">
                    <span>&#8673;</span>
                </div>
               
            </div>
        </div>


        <div class="col-6">
            <div class="card">
                <div class="img2">
             
                </div>

                <div class="content">
                    <span class="title">Ong Chefe Solidário</span>
                    <p class="desc">essa ONG tem como objetivo promover a inclusão social por meio da gastronomia. Ela busca capacitar jovens de baixa renda e em situação de vulnerabilidade para se tornarem chefs de cozinha, oferecendo cursos gratuitos de culinária e gastronomia. Além disso, a Chef Solidário realiza eventos gastronômicos para arrecadar recursos financeiros e promover a inclusão social por meio da culinária, unindo pessoas de diferentes classes sociais em torno de uma mesa.</p>
                    <br> 
                    
                    <button onclick="openModal()">FAÇA UMA DOAÇÃO</button>
                </div>
                
                <div class="arrow">
                    <span>&#8673;</span>
                </div>
               
            </div>
        </div>
  </div>
        
        
      
          
          
        <br>
        
        <!-- Botão para abrir o modal -->

    <script src="./js/sweetalert2.min.js"></script>
    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img src="./img/logotipo2.png">

            <div id="main-container"></div>
            <div class='card-wrapper'></div>

            <form id="form" action="./php/pagamento.php" method="post" onsubmit="event.preventDefault(); openModalPagamento();">
                <h2>Número do cartão*</h2>
                <input type="text" id="number" name="number" placeholder="Ex. 2233 4344 1332 2332">

                <h2>Nome no cartão* </h2>
                <input type="text" name="name" id="nome-cartao" placeholder="Ex. Silas S.">

                <h2>Mês/Ano (mm/aaaa)* </h2>
                <input type="datetime" name="expiry" placeholder="12/2022">

                <h2>CVV </h2>
                <input type="text" name="cvc" id="CVV" placeholder="725">

                <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">

                <?php
                require_once "./php/conexao.php";

                // Consulta SQL para obter o código da empresa
                $query = "SELECT codigo FROM vouchers LIMIT 1";
                $resultado = mysqli_query($conexao, $query);

                if ($resultado && mysqli_num_rows($resultado) > 0) {
                    $linha = mysqli_fetch_assoc($resultado);
                    $codigoEmpresa = $linha['codigo'];

                    // Exibe o código da empresa como um campo oculto
                    echo "<input type='hidden' name='codigo_empresa' value='$codigoEmpresa'>";
                    echo "<br><br>Código da empresa: $codigoEmpresa";
                } else {
                    echo "Código da empresa não encontrado.";
                }
                ?>

                <br><br>
                <button id="btnEnviar" onclick="openModalPagamento()">PAGAR</button>
            </form>
        </div>
    </div>

    <!-- Segundo Modal -->
    <div id="myModalPagamento" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModalPagamento()">&times;</span>
            <p>PAGAMENTO REALIZADO COM SUCESSO!</p>
        </div>
    </div>

    <!-- Script JavaScript -->
    <script>
       var card = new Card({
  form: 'form',
  container: '.card-wrapper',
  placeholders: {
    number: '**** **** **** ****',
    name: '(Seu Nome)',
    expiry: '**/****',
    cvc: '***'
  }
});

function openModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "block";
}

function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}

function openModalPagamento() {
  var form = document.getElementById("form");
  var formData = new FormData(form);

  var request = new XMLHttpRequest();
  request.open("POST", "./php/pagamento.php");
  request.onload = function() {
    if (request.status === 200) {
      // Exibe a notificação de sucesso
      Swal.fire({
        icon: 'success',
        title: 'Sucesso',
        text: 'Pagamento realizado com sucesso!'
      }).then(function() {
        closeModal(); // Fecha o modal de pagamento após fechar a notificação
      });
    } else {
      // Exibe a notificação de erro
      Swal.fire({
        icon: 'error',
        title: 'Erro',
        text: 'Erro ao processar o pagamento. Por favor, tente novamente.'
      });
    }
  };
  request.send(formData);
  event.preventDefault();
}

function closeModalPagamento() {
  var modal = document.getElementById("myModalPagamento");
  modal.style.display = "none";
}

    </script>
      
        <hr>
      </div>

        <div>
        <img src="./img/chefesolidario.png" height="500" width="700">
        <br>
        <p>essa ONG tem como objetivo promover a inclusão social por meio da gastronomia. Ela busca capacitar jovens de baixa renda e em situação de vulnerabilidade para se tornarem chefs de cozinha, oferecendo cursos gratuitos de culinária e gastronomia. Além disso, a Chef Solidário realiza eventos gastronômicos para arrecadar recursos financeiros e promover a inclusão social por meio da culinária, unindo pessoas de diferentes classes sociais em torno de uma mesa.</p>
        <hr>
      </div>
      </div>
      
     
      








      <br>
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
