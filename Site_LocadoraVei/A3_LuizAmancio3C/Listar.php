<!DOCTYPE html>
<html>
<head>
	<title>Conferir Locações</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Stilo.css">
	 <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<nav style="background-color: #FFD700" class ="navbar navbar-expand-lg navbar-light margin">
		<div class="container-fluid">
    <a class="navbar-brand" href="Index.php">
    	<img src="img/logo.png" width="150" height="120">
    </a>


    <div class = "collapse navbar-collapse">
    	<ul class="navbar-nav">
    		<li class="nav-item">
    			<a class="nav-link" href="#modelos">Confira suas locações</a>
            </li>
              	</ul>
    </div>
    </nav>

    	<div class = "container-fluid listar text-center margin">
            <h3 class="margin">Locações</h3>
            <?php
            include("Confirma.php");



            	$sql = "SELECT * FROM locacao";
            	$res = $conn->query($sql);
            	$qtd = $res->num_rows;

                if ($qtd > 0) {
                    print "<p class='alert alert-primary'>Encontramos <b>$qtd</b> resultado(s) </p>";
                }
                

            	if ($qtd > 0) {
            		print "<table class='table table-hover'>";
            		print "<tr>";
            			print "<th>#</th>";
            			print "<th>Data da locação</th>";
            			print "<th>Data da devolução</th>";
            			print "<th>Placa do veículo</th>";
            			print "<th>Cpf do locatário</th>";
            			print "<th>Ações</th>";
            			print "</tr>";
            		while ($row = $res->fetch_object()) {
            			print "<tr>";
            			print "<td>".$row->cd_Locacao."</td>";
            			print "<td>".$row->dtLocacao."</td>";
            			print "<td>".$row->dtdevolucao."</td>";
            			print "<td>".$row->Carro_placa."</td>";
            			print "<td>".$row->Cliente_cpf."</td>";
            			print "<td>

                                <a class='btn btn-success' href='editar.php?cd_Locacao=".$row->cd_Locacao."'>Alterar horário</a>

            					<a class='btn btn-danger' href='excluir.php?Cliente_cpf=".$row->Cliente_cpf."'>Excluir</a>
            				   </td>";
            			print "</tr>";
            		}
            		print "</table>";
            	}
            	else{
            		print "<p class='alert alert-danger'>Não encontramos resultados 😟</p>";
            	}


            	


            ?>

</body>
</html>