<?php 
session_start();
if (isset($_SESSION['id_usuario'])) {
  header("Location: index.php");
  exit();
} elseif (isset($_SESSION['id_empresa'])) {
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="./css/cad.css">
    <link rel="shortcut icon" href=".img\pote.png">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/color/default.css" id="option-color">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
	
	
	
	
</head>
<body>
	
<header>
        <nav class="nav-bar">
            <div class="logo">
            <a href="./index.php">
                <img src="./img/Donnetion novo1 @.png" alt="Logo do projeto" width="80" height="80"> 
             </a>
            </div>
            <div class="nav-list">
                
            </div>
        </header>
		<br><br>

	<main>
		<div>
			<img src="./img/logotipo2.png">
		</div>
	<h1>Login</h1>
	<form method="post" action="./php/loginprocessa.php" id="login" onsubmit="return validar()">
	<label for="email">
			<span>E-mail:</span>
			<input type="text" id="email" name="email" required></label>
			<span id="email-error" class="error-message"></span>

		<label for="senha">
			<span>Senha:</span>
			<input type="password" id="senha" name="senha" required></label>
			<span id="senha-error" class="error-message"></span>
            <p><a href="#" data-toggle="modal" data-target="#modalRecuperarSenha">Esqueceu sua senha?</a></p>

	
            <input type="submit" value="Logar" class="submit-button" onclick="validar()"></label>
	</form>
	<br>
	</main>
	<br><br><br><br><br><br>
	<footer class="footer bg-socafofo">
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
	<script src="./js/loginscript.js"></script>
   
    <!-- Modal de Conta Desativada -->
<div class="modal fade" id="modalContaDesativada" tabindex="-1" role="dialog" aria-labelledby="modalContaDesativadaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="modalContaDesativadaLabel">Conta Desativada</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sua conta foi desativada. Entre em contato com o suporte para mais informações.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-primary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script>
    // Verificar se o parâmetro "erro" está presente na URL
    const urlParams = new URLSearchParams(window.location.search);
    const erro = urlParams.get('erro');

    // Verificar se o erro é "desativada" e exibir a janela modal correspondente
    if (erro === 'desativada') {
        $('#modalContaDesativada').modal('show');
    }

    // Fechar a janela modal ao clicar no botão "Fechar" ou no botão "X"
    $('#modalContaDesativada').on('hidden.bs.modal', function () {
        window.location.href = 'login.php'; // Redirecionar para a página de login
    });

    // Fechar a janela modal ao clicar no botão "Fechar"
    $('#modalContaDesativada .modal-footer button').click(function () {
        $('#modalContaDesativada').modal('hide');
    });
    
    // Fechar a janela modal ao clicar no botão "X"
    $('#modalContaDesativada .modal-header button').click(function () {
        $('#modalContaDesativada').modal('hide');
    });
</script>




   <!-- Modal de aguardando aprovação -->
   <div class="modal fade" id="modalAguardando" tabindex="-1" role="dialog" aria-labelledby="modalAguardandoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="modalAguardandoLabel">Aviso.</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sua conta foi registrada com éxito. Aguarde a liberação de nossa equipe.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-primary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script>
   
      // Verificar se o erro é "aprovacao" e exibir a janela modal correspondente
      if (erro === 'aprovacao') {
          $('#modalAguardando').modal('show');
         
      }

    // Fechar a janela modal ao clicar no botão "Fechar" ou no botão "X"
    $('#modalAguardando').on('hidden.bs.modal', function () {
        window.location.href = 'login.php'; // Redirecionar para a página de login
    });

    // Fechar a janela modal ao clicar no botão "Fechar"
    $('#modalAguardando .modal-footer button').click(function () {
        $('#modalAguardando').modal('hide');
    });
    
    // Fechar a janela modal ao clicar no botão "X"
    $('#modalAguardando .modal-header button').click(function () {
        $('#modalAguardando').modal('hide');
    });
</script>

<!-- Janela modal de recuperação de senha -->
<div class="modal fade" id="modalRecuperarSenha" tabindex="-1" role="dialog" aria-labelledby="modalRecuperarSenhaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalRecuperarSenhaLabel">Recuperação de Senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulário de recuperação de senha -->
        <form method="post" action="recuperar_senha.php">
          <div class="form-group">
            <label for="emailRecuperarSenha" >E-mail:</label>
            <input type="email" class="form-control" id="emailRecuperarSenha" name="emailRecuperarSenha" placeholder="Digite seu E-mail cadstrado" required>
          </div>
          <button type="submit" class="btn btn-primary">Enviar E-mail de Recuperação</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
function verificarEmailExistente() {
  var email = document.getElementById("emailRecuperarSenha").value;

  // Fazer uma requisição AJAX para verificar se o email existe
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "recuperar_senha.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var resposta = xhr.responseText;
      if (resposta === "existe") {
        // Email existe na base de dados
        alert("Um email de recuperação será enviado. Verifique sua caixa de entrada");
      } else {
        // Email não existe na base de dados
        alert("Email não cadastrado.");
      }
    }
  };
  xhr.send("email=" + email);
}
</script>


</body>
</html>