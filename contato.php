<!doctype html>
<html lang="pt-BR">
  <head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contato - Wellington Alves</title>
  </head>

  <body class="bg-light text-dark">
  	<header>
  		<div class="visually-hidden visually-hidden-focusable col-12" id="barra_acessibilidade">
          <ul  id="atalhos">
            <li><a href="#navbarNavAltMarkup" accesskey="1">Ir para menu [1]</a></li>
            <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
          </ul>   
        </div>  


    	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	  		<div class="container-fluid">
	    		<a class="navbar-brand" href="index.php">
	      			<img src="images/logo.png" alt="" width="46" height="39">
	    		</a>
	    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      			<span class="navbar-toggler-icon"></span>
	    		</button>
	    		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      			<div class="navbar-nav">
	        			<a class="nav-link" href="index.php">Home</a>
	        			<a class="nav-link" href="projetos.php">Projetos</a>
	        			<a class="nav-link" href="sobre.php">Sobre</a>
	        			<a class="nav-link active" aria-current="page" href="#">Contato<span class="visually-hidden">(Página atual)</span></a>
	      			</div>
	    		</div>
	  		</div>
			</nav>
    </header>


	<main class="container mx-auto mt-1 w-90">
	  <h2 id="formulario">Formulário de Contato</h2>
	          <br>

	          <form class="needs-validation" novalidate>

	            <div class="form-row">
	              <label for="nome" class="col-sm-2 col-form-label">Nome*</label><br>
	              <div class="col-sm-10">
	                <input type="text" class="form-control" id="nome" placeholder="Digite seu Nome"  required>
	                <div class="invalid-feedback">
	                  Campo Nome obrigatório!
	                </div>
	              </div>
	            </div>
	          <br>
	          <div class="form-row">
	            <label for="email" class="col-sm-2 col-form-label">E-Mail*</label><br>
	            <div class="col-sm-10">
	              <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail (ex: aaa@aaa.com)"  required>
	              <div class="invalid-feedback">
	                Campo E-Mail obrigatório no formato de email (aaa@aaa.com)!
	              </div> 
	            </div>
	          </div>
	          <br>
	          <div class="form-row">
	            <label for="tel" class="col-sm-2 col-form-label">Telefone*</label><br>
	            <div class="col-sm-10">
	              <input type="tel" class="form-control" id="tel" placeholder="Digite seu Telefone (ex: (00) 99999-9999)"  required>
	              <div class="invalid-feedback">
	                Campo Telefone obrigatório!
	              </div> 
	            </div>
	          </div>
	          <br>
	          <div class="form-row">
	            <label for="mensagem" class="col-sm-2 col-form-label">Mensagem*</label><br>
	            <div class="col-sm-10">
	              <textarea class="form-control" id="mensagem" rows="4" placeholder="Digite sua mensagem" required></textarea>
	              <div class="invalid-feedback">
	                Campo Mensagem obrigatório!
	              </div>
	              <p class="cinza_claro">* Campos obrigatórios</p>
	            </div> 
	          </div>
	          <br>      
	          <div class="center">
	            <button type="submit" class="btn btn-primary my-1">Enviar</button>  
	          </div>
	        </form>
		</main>

	    

	    <footer class="row bg-dark bg-gradient text-light text-start">
	      <div class="container mx-auto mt-1 w-90 col-12">
	        <p><br>&emsp; Copyright © 2022 - Wellington Alves</p>
	      </div>
	    </footer>
	     <script src="js/script.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
  </body>
</html>
