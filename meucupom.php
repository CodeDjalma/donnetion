<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
// Verifica se o ID do usuário está presente na sessão
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}
require_once "./php/conexao.php";

$id_usuario = $_SESSION['id_usuario'];

$query = "SELECT cupom FROM doacoes WHERE id_usuario = $id_usuario";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {
    $row = mysqli_fetch_assoc($resultado);
    $cupom = $row['cupom'];
} else {
    $cupom = "Erro ao obter o cupom";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/meucupom.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="./css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="./css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="./css/mobiriseicons.css"> 
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/color/default.css" id="option-color">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Cupom</title>
</head>
<body>
    <?php include './menu.php'; //menu ?>
    <br>
    <br>
    <br>
    <br>    
    
    <a href="./perfil_user.php" class="btn btn-primary right-button">Voltar</a>  
    <h1> Aqui você encontrará seus cupons de desconto!</h1>


    <section>   
        <div class="ticket-container">
            <div class="ticket">
                 <h2 class="ticket-title">Ticket de Desconto</h2>
                 <p class="ticket-description">Aproveite o desconto na sua próxima compra!</p>
                 <p class="ticket-code">Cupom: <?php echo $cupom; ?></p>
            </div>
        </div>
    </section>
</body>
</html>
