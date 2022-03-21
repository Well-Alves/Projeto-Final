<!doctype html>
<html lang="pt-BR">
  <head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Projetos - Wellington Alves</title>
  </head>
  <body class="bg-light text-dark">
  	<header>
  		<div class="visually-hidden visually-hidden-focusable col-12" id="barra_acessibilidade">
          <ul  id="atalhos">
            <li><a href="#navbarNavAltMarkup" accesskey="1">Ir para menu [1]</a></li>
            <li><a href="#conteudo" accesskey="2">Ir para os Projetos [2]</a></li>
          </ul>   
        </div>  


    	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	  		<div class="container-fluid">
	    		<a class="navbar-brand" href="index.php">
	      			<img src="images/logo.png" alt="Logomarca do Site (letra W)" width="46" height="39">
	    		</a>
	    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      			<span class="navbar-toggler-icon"></span>
	    		</button>
	    		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      			<div class="navbar-nav">
	        			<a class="nav-link" href="index.php">Home</a>
	        			<a class="nav-link active" aria-current="page" href="projetos.php">Projetos<span class="visually-hidden">(Página atual)</span></a>
	        			<a class="nav-link" href="sobre.php">Sobre</a>
	        			<a class="nav-link" href="contato.php">Contato</a>
	      			</div>
	    		</div>
	  		</div>
			</nav>
    </header>
		<main class="container mx-auto mt-1 w-90" id="conteudo">
			<div class="col-lg-6 col-md-8 mx-auto text-center">
				<br><br>
        <h1 class="fw-light">Meus Projetos</h1>
        <p class="lead text-muted">Imagens e breves explicações sobre meus projetos realizados até o momento.</p>
      </div>

			<div class="album py-5 bg-light">
    		<div class="container">
		      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		        <div class="col">
		          <div class="card shadow-sm">
		            <img src="images/estoque.png" alt="Imagem exemplo do programa gerenciador de estoque">
		            <div class="card-body">
		              <p class="card-text">Este é o meu primeiro projeto na faculdade, na materia de algoritmos, é um gerenciador de estoque (que ainda pretendo finalizar conforme for obtendo mais conhecimento na materia.</p>
		            </div>
		          </div>
		        </div>
		        <div class="col">
		          <div class="card shadow-sm">
		            <img src="images/site.png" alt="Imagem exemplo do proprio site">
		            <div class="card-body">
		              <p class="card-text">Este é o meu segundo projeto na faculdade, na materia de Desenvolvimento web front-end, um diste utilizando HTML, CSS, e JS (que também pretendo finalizar conforme for obtendo mais conhecimento na materia.</p>
		            </div>
		          </div>
		        </div>
		        <div class="col">
		          <div class="card shadow-sm">
		            <img src="images/bd.png" alt="Imagem exemplo da construção do banco de dados">
		            <div class="card-body">
		              <p class="card-text">Este é o meu terceiro projeto na faculdade, na materia de Banco de dados, é o inicio do meu banco de dados que ainda está em desenvolvimento</p>
		            </div>
		          </div>
		        </div>
		      </div>  
		    </div>
		  </div>
		</main>
	    <footer class="row bg-dark bg-gradient text-light text-start">
        <div class="container mx-auto mt-1 w-90 col-12">
          <p><br>&emsp; Copyright © 2022 - Wellington Alves</p>
        </div>
	    </footer>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
