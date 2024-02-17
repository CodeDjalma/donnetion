<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
require_once "./php/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/.css">
    <link rel="stylesheet"href="./css/tutorial.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
   
    <title>Tutorial</title>
</head>
<body>
    <?php include './menu.php'; //menu ?>

<br>
<br>
   <center> <h2> Como funciona para doar?</h2> </center>

    <main>

    <div class="container">

        <div class="texto">
        <p>A linha de funcionamento do site seguirá da seguinte forma: na página principal do site haverá um catálogo/lista separados em dois blocos, um abrange as organizações parceiras e no outro engloba empresas que contribuem com o projeto, com isso os usuários que acessarem terão duas formas de contribuir de acordo com sua escolha, em sua causa ou empresa de preferência, após  realizar sua doação, ele estará ganhando descontos, produtos ou serviços online a depender do acordo e disponibilidade feita com as empresas, também será disponibilizado seções no website sobre as  instituições, contendo informações importantes e formas de acesso para seus respectivos sites oficiais para maior credibilidade. Para que isso seja possível, serão feitas parcerias com empresas sérias e consolidadas no mercado que compactuam com nossa causa, além disso, terá parceiras também com diversas Ongs que já trabalham combatendo a fome em nosso país, este projeto não se trata de uma Ong em específico na qual irá ser focada apenas em pessoas em situação de pobreza e fome, Ongs com diversas causas sociais também poderão ser introduzidas. O Donnetion, intermediário, entre as pessoas que querem fazer a doações e ganhar descontos nas mais diversas empresas, que estão alinhadas com o site, a empresa na qual apoiar a causa e disponibiliza os descontos para os doadores, por fim, mas não menos importante as Ongs que já fazem o trabalho de combate à fome, que serão as beneficiadas com as doações feitas em nosso website com intuito de fortalecer ainda mais o trabalho das mesmas.</p>
        </div>
        <div class="imagem">
            <img src="./img/interrogacion.png">
        </div>
    </div>
</main>

</body>
</html>
