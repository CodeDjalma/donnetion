<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
	<title>Cadastro</title>
	<link rel="stylesheet" href="./css/cad.css">
    <link rel="shortcut icon" href=".img\pote.png">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/color/default.css" id="option-color">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
	


	
	
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
	<h1>Crie seu cadastro</h1>
	<h3>Use nossa plataforma de forma segura e protegida</h3>
	
	<form method="post" action="./php/processa.php" id="cadastro" name="cadastro" onsubmit="return validar() && validarRecaptcha()">
		<label for="nome">
			<span>Nome completo:</span>
			<input type="text" id="nome" name="nome" required>
		</label>
			<span id="nome-error" class="error-message"></span>

        <label for="cpf">
			<span>CPF:</span>
			<input type="text" id="cpf" name="cpf" placeholder="___.___.___-__" required>
		</label>
			<span id="cpf-error" class="error-message"></span>

		<label for="datnasc">
			<span>Data de nascimento: </span>
			<input type="text" id="datnasc" name="datnasc" placeholder="__/__/____" required>
		</label>
		<span id="datanasc-error" class="error-message"></span>

		<label for="genero">Gênero:</label>
			<select id="genero" name="genero">
			  <option value="">Selecione...</option>
			  <option value="m">Masculino</option>
			  <option value="f">Feminino</option>
			  <option value="o">Outros</option>
			</select>
			
		<label>
		<span id="genero-error" class="error-message"></span>
			<span>Telefone:</span>
			<input type="text" id="tel" name="tel" placeholder="00-0000-00000" required> 
		</label>
			<span id="tel-error" class="error-message"></span>
	
		<label for="email">
			<span>E-mail:</span>
			<input type="text" id="email" name="email" required></label>
			<span id="email-error" class="error-message"></span>

		<label for="senha">
			<span>Senha:</span>
			<input type="password" id="senha" name="senha" required></label>
			<span id="senha-error" class="error-message"></span>

			<label for="senhaconf">
				<span>Confime sua senha:</span>
				<input type="password" id="senhaconf" name="senhaconf" required></label>
				<span id="senhaconf-error" class="error-message"></span>

				<div class="g-recaptcha" data-sitekey="6Le0dAQmAAAAAGoCWpUt_5ISmlScDJXHp0oQN_s-"></div>

				
   
    <span><hr>Ao criar o seu cadastro, você aceita a <a href="./politica.php" target="_blank">política de privacidade da Donnetion</a><hr>
</span>
</label>



			<label>
    			<input type="submit" value="Cadastrar" class="submit-button" onclick="validar()">
			</label>
				<div id="erroCadastro"></div>
		
		<br>
		</form>
		<div id="msgCadSucesso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-center">
                <h5 class="modal-title" id="visulUsuarioModalLabel"> Usuário cadastrado com sucesso!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Seja bem-vindo, agora faça login e continue usando nossa plataforma
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
		
			
	</main>

	<br>
	<br>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="./js/script.js"></script>
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
</body>
</html>