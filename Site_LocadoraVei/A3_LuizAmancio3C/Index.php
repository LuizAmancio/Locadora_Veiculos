<!DOCTYPE html>
<html>
<head>
	<title>Projeto A3 - Dw2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Stilo.css">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<?php
include("conexao.php");
?>
<body style="background-color: lightgreen">
	<nav style="background-color: #FFD700" class ="navbar navbar-expand-lg navbar-light margin">
		<div class="container-fluid">
    <a class="navbar-brand" href="Index.php">
    	<img src="img/logo.png" width="150" height="120">
    </a> 

    <div class = "collapse navbar-collapse">
    	<ul class="navbar-nav">
    		<li class="nav-item">
    			<a class="nav-link" href="#funcionamos">Como funcionamos</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="#Locacao">Realizar Locação</a>
    		</li>
    		<li class="nav-item">
    			<a  class="nav-link" href="Listar.php">Conferir locações</a>
    		</li>

    	</ul>
    </div>

</nav>

    <section id="funcionamos">
    	<div class = "container-fluid funcionamos text-center margin">
			<h3 class="margin">Como Funcionamos?</h3>
			<img src="img/funcionamos.jfif" class="rounded-circle" width="500" height="450">
			
			<div class="container">
				<div class="row">
					<div class="col-lg-4" style="padding-top: 20px;">
						<h3> Disponibilizamos várias opções de veículos <br> escolha a opção que mais te agrade.</h3>		
					</div>
					<div class="col-lg-4" style="padding-top: 20px;">
						<h3> Datas e Horários de devolução flexiveis. <br> Além de serviço de apoio 24hrs em todo Brasil.</h3>
					</div>
					<div class="col-lg-4" style="padding-top: 20px;">
						<h3> Pelo preço mais baixo <br> do mercado !!!
					</div>
				</div>
			</div>
		</div>
    </section>

    <section id="Locacao">
    	<div class="container-fluid Locacao text-center margin">
    		<h3 class="margin"> <b>Locações</b></h3>
    		<h4><b> Marcas </b>
    			<h6> <b>Escolha para dar continuidade na Locação! </b></h6></h4><br><br> 


    		<center><div class="card-group" style="width: 45rem;">
  				<div class="card">
   					<img class="card-img-top" src="img/Ford.jfif" alt="Card image cap">
    			<div class="card-body">
     					<h5 style="text-align: center;" class="card-title">Ford</h5>
    			<a href="Ford.php" target="_blank" class="btn btn-primary">Veja modelos</a>
    			</div>
  			</div>
  			
  			
  				<div class="card">
   					<img class="card-img-top" src="img/Chevrolet.jfif" alt="Card image cap" height="180">
    			<div class="card-body">
     					<h5 style="text-align: center;" class="card-title">Chevrolet</h5>
    			<a href="Chevrolet.php" target="_blank" class="btn btn-primary">Veja modelos</a>
    			</div>
    		</div>

    			
  					<div class="card">
   					<img class="card-img-top" src="img/Reanault.jfif" alt="Card image cap">
    			<div class="card-body">
     					<h5 style="text-align: center;" class="card-title">Renault</h5>
    			<a href="Renault.php" target="_blank" class="btn btn-primary">Veja modelos</a>
    			</div>
  			</div>		

</div>
    	</div>

   <footer class=" container-fluid text-center bg-footer margin">
    <p>Desenvolvido por Luiz Amancio</p>
  </footer>

   <div class="container">
     <div class="row">
       <div class="col mt-5">
          <?
          include("conexao.php");
          include("Confirma.php");
          

      switch (@$_REQUEST["page"]) {
        case "Listar":
          include("Listar.php");
          break;
          case "editar":
          include("editar.php");
          break;
        
        default:
          print "Bem vindo!!"
          break;
      }
    ?>
       </div>
     </div>
   </div>

</body>
</html>