<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
	<title>Cadastro</title>
	<link rel="stylesheet" href="./css/empresa.css">

    <link rel="shortcut icon" href=".img\pote.png">
    <link rel="stylesheet"t type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="ext/css" href="./css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/color/default.css" id="option-color">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
                
        </header>
		<br><br>
	<main>
	<div>
	<img src="./img/logotipo2.png">
		</div>
	<h1>Seja um dos nossos parceiros!</h1>
	
	<form method="post" action="./php/processa_empresa.php" id="cadastro" name="cadastro"  enctype="multipart/form-data" onsubmit="return validar() && validarRecaptcha()">
		<label for="nome_empresa">
			<span>Nome:</span>
			<input type="text" id="nome_empresa" name="nome_empresa" required></label>
			<span id="nome-error" class="error-message"></span>

        <label for="cnpj_empresa">
			<span>CNPJ:</span>
			<input type="text" id="cnpj_empresa" name="cnpj_empresa" placeholder="__.___.___/____-__" required>
			<span id="cnpj-error" class="error-message"></span>

		<label for="area_empresa">
			<span>Area de atuação: </span>
			<input type="text" id="area_empresa" name="area_empresa" required></label>

		<label for="texto_empresa">
			<span>Texto de apresentação:</span>
			<input type="text" id="texto_empresa" name="texto_empresa"  required> 
		</label>
		
		<label for="endereco_empresa">
			<span>Endereço:</span>
			<input type="text" id="endereco_empresa" name="endereco_empresa" required> 
		</label>

		<label for="telefone_empresa">
			<span>telefone:</span>
			<input type="text" id="telefone_empresa" name="telefone_empresa" placeholder="00-0000-00000" required> 
		</label>
		<span id="tel-error" class="error-message"></span>
		
		<label for="foto_empresa">
			<span>Foto da empresa:</span>
			 <input type="file"  id="foto" name="foto" class="upload-input" required></label>

		<label for="email_empresa">
			<span>E-mail:</span>
			<input type="text" id="email_empresa" name="email_empresa" required></label>
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
		<label><input type="submit" value="Cadastrar" onclick="validar()"></label>
		<div id="erroCadastro"></div>


		<br>
		</form>
		<div id="msgCadSucesso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-center">
                <h5 class="modal-title" id="visulUsuarioModalLabel"> Empresa cadastrada com sucesso!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Seja bem-vindo a nossa plataforma!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
	
			
	</main>
</form>
	</main>

	<br>
	<br>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="./js/empresa.js"></script>
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
