 <!DOCTYPE html>
<html>
<head>
    <title>Conferir Locações</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Stilo.css">
    <link rel="stylesheet" type="text/css" href="Formulario.css">
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

 <h3 class="margin">Excluir sua locação?</h3>

 

 <form method="POST" action="" style="text-align: center;">
           
            <section>
                <div class="campo">
                    <label></label> <input type="hidden" name="cd_Locacao">
                </div>
            </section>

            <section id="Locacao">
                <div class="campo">
                  <label></label> <input type="hidden" name="dtLocacao" >
                    
                 </div> 
                 <div class="campo">
                    <label></label>  <input type="hidden" name="dtdevolucao" >
                 </div>   
            </section>

                

            <button class="bot" type="submit" name="excluir">Excluir</button>
        </form>
    </body>

    <?php
    include ("Confirma.php");
    ?>

    
   
