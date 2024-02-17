<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
require_once "./php/conexao.php";
$id_usuario = isset($_SESSION["id_usuario"]) ? $_SESSION["id_usuario"] : null;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Parceiros</title>
    <link rel="stylesheet" href="./css/parceiros.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/cards.css">
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
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="./css/sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/card.js"></script>
    <link rel="stylesheet" href="./css/cartao.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="./js/cleave.min.js"></script>


</head>

<?php include './menu.php'; //menu ?>

<body>
    <br>
    <br>
    <br>
    <br>
    <span class="parceiros">
        <center> <img src='./img/Donnetion novo1 @.png' alt='Foto empresa' style='width: 200px; height: 200px;'>
        </center>
    </span>


    <h3>
        Aqui, você encontrará uma lista das ONGs e empresas que apoiamos e com as quais trabalhamos em conjunto para
        alcançar nossos objetivos.
        Todas as organizações listadas abaixo são de confiança e compartilham dos nossos valores e missão de fazer do
        mundo um lugar melhor. Temos orgulho de trabalhar com elas e de apoiá-las em suas iniciativas.</h3>

    <br>
    <br>
    <br>


    <center>
        <h2>Empresas Parceiras!</h2>
    </center>
    <br>
    <br>
    <br>
    <div class="text-center">
        <div class="row justify-content-center"> <!-- Adicione a classe "justify-content-center" na div "row" -->
            <div class="col-3">
                <div class="card">
                    <div class="img1" style="background: none;">
                        <?php
                        $sql1 = "SELECT texto_empresa, foto, status_empresa FROM empresas LIMIT 1 OFFSET 0";
                        $resultado1 = mysqli_query($conexao, $sql1);
                        $linha1 = mysqli_fetch_array($resultado1);

                        if ($linha1 && $linha1['status_empresa'] == 2) {
                            $nomeImagem1 = "./img_emp/" . $linha1['foto'];
                            echo "<img src='$nomeImagem1' alt='Foto empresa' style='width: 100%; height: 100%; object-fit: cover;'>";
                        }
                        ?>
                    </div>
                    <div class="content">
                        <span class="title">Empresa 1</span>
                        <?php
                        if ($linha1 && $linha1['status_empresa'] == 2) {
                            echo "<p class='desc'>$linha1[texto_empresa]</p>";
                        }
                        ?>
                        <br>
                    </div>
                    <div>
                        <div class="arrow">
                            <span>&#8673;</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="col-3">
                <div class="card">
                    <div class="img1" style="background: none;">
                        <?php
                        $sql2 = "SELECT texto_empresa, foto, status_empresa FROM empresas LIMIT 1 OFFSET 1";
                        $resultado2 = mysqli_query($conexao, $sql2);
                        $linha2 = mysqli_fetch_array($resultado2);

                        if ($linha2 && $linha2['status_empresa'] == 2) {
                            $nomeImagem2 = "./img_emp/" . $linha2['foto'];
                            echo "<img src='$nomeImagem2' alt='Foto empresa' style='width: 100%; height: 100%; object-fit: cover;'>";
                        }
                        ?>
                    </div>
                    <div class="content">
                        <span class="title">Empresa 2</span>
                        <?php
                        if ($linha2 && $linha2['status_empresa'] == 2) {
                            echo "<p class='desc'>$linha2[texto_empresa]</p>";
                        }
                        ?>
                        <br>
                    </div>
                    <div class="arrow">
                        <span>&#8673;</span>
                    </div>
                </div>
            </div>


            <center>
                <h2>Ongs</h2>
            </center>
            <br>
            <br>
            <br>
            <br>

            <div class="col-3">
                <div class="card">
                    <div class="img1" style="background: none;">
                        <img src='./img/ongacao.png' alt='Foto empresa'
                            style='width: 560px; height: 200px; object-fit: cover;'>
                    </div>
                    <div class="content">
                        <span class="title">ONG Alimentação</span>
                        <p class="desc">ONG tem como objetivo combater a fome e a desnutrição em regiões carentes. Ela
                            busca arrecadar doações de alimentos e recursos financeiros para a compra de alimentos
                            básicos, como arroz, feijão, macarrão, entre outros. A alimentAção também realiza campanhas
                            de conscientização sobre a importância de uma alimentação saudável e balanceada, além de
                            promover oficinas culinárias para ensinar a preparar refeições nutritivas e acessíveis.
                        </p>
                        <button onclick="openModal()">FAÇA UMA DOAÇÃO</button>

                        <br>
                    </div>
                    <div class="arrow">
                        <span>&#8673;</span>
                    </div>
                </div>
            </div>
            <br>

            <div class="col-3">
                <div class="card">
                    <div class="img1" style="background: none;">
                        <img src='./img/chefesolidario.png' alt='Foto empresa'
                            style='width: 500px; height: 200px; object-fit: cover;'>
                    </div>
                    <div class="content">
                        <span class="title">Chefe Solidário</span>
                        <p class="desc">ONG tem como objetivo combater a fome e a desnutrição em regiões carentes. Ela
                            busca arrecadar doações de alimentos e recursos financeiros para a compra de alimentos
                            básicos, como arroz, feijão, macarrão, entre outros. A alimentAção também realiza campanhas
                            de conscientização sobre a importância de uma alimentação saudável e balanceada, além de
                            promover oficinas culinárias para ensinar a preparar refeições nutritivas e acessíveis.
                            <button onclick="openModal()">FAÇA UMA DOAÇÃO</button>

                            <br>
                    </div>
                    <div class="arrow">
                        <span>&#8673;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>







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

            <form id="form" action="./php/pagamento.php" method="post"
                onsubmit="event.preventDefault(); openModalPagamento();">
                <h4>Número do cartão*</h4>
                <input type="text" id="number" name="number" placeholder="Ex. 2233 4344 1332 2332">

                <h4>Nome no cartão* </h4>
                <input type="text" name="name" id="nome-cartao" placeholder="Ex. Silas S.">

                <h4>Mês/Ano (mm/aaaa)* </h4>
                <input type="datetime" name="expiry" placeholder="12/2022">

                <h4>CVV </h4>
                <input type="text" name="cvc" id="CVV" placeholder="725">

                <h4>Valor do pagamento* </h4>
                <select name="valor" id="valor-pagamento">
                    <option value="10">R$ 10,00</option>
                    <option value="20">R$ 20,00</option>
                    <option value="30">R$ 30,00</option>
                    <option value="custom">Outro Valor</option>
                </select>
                <input type="text" name="custom_valor" id="custom-valor-pagamento"  placeholder="Digite o valor"
                    style="display: none;">

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
            request.onload = function () {
                if (request.status === 200) {
                    // Exibe a notificação de sucesso
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Pagamento realizado com sucesso!'
                    }).then(function () {
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

<script>
  document.getElementById("valor-pagamento").addEventListener("change", function() {
    var customValorInput = document.getElementById("custom-valor-pagamento");
    if (this.value === "custom") {
      customValorInput.style.display = "block";
    } else {
      customValorInput.style.display = "none";
    }
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var customValorInput = document.getElementById('custom-valor-pagamento');

    customValorInput.addEventListener('input', function(e) {
      // Remove qualquer caractere não numérico
      var cleanedValue = this.value.replace(/[^0-9]/g, '');

      // Formata o valor com o símbolo "R$" e separadores de milhares e decimais
      var formattedValue = formatCurrency(cleanedValue);

      // Atualiza o valor no campo de texto
      this.value = formattedValue;
    });

    function formatCurrency(value) {
      // Adiciona o símbolo "R$" ao valor
      var formattedValue = 'R$ ';

      // Verifica se o valor é válido
      if (value.length > 0) {
        // Remove zeros à esquerda
        value = value.replace(/^0+/, '');

        // Adiciona separadores de milhares
        var integerValue = value.slice(0, -2);
        var decimalValue = value.slice(-2);
        formattedValue += integerValue.replace(/\B(?=(\d{3})+(?!\d))/g, '.') + ',' + decimalValue;
      } else {
        formattedValue += '0,00';
      }

      return formattedValue;
    }
  });
</script>


    <hr>
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