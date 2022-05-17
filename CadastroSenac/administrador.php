<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link rel="stylesheet" href="css/main.css">
    <title>Plataforma ||</title>
</head>
<body>
<header class="menu">
    <div class="headerDiv">
        <img class="divImg" src="img/1200px-Senac_logo.svg.png" alt="Logo do Senac">
    </div>
    <div class="headerDiv"></div>
    <div class="headerDiv">
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg>

      </a>
        <a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg></a>
          
         
    </div>
</header>

<div class="search">
    <label class="col">Pesquisa Usuário</label>
    <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Pesquisa usuário">
</div>



<main>
    
    <div class="mainDiv">
       
        <a href="index.php"><img class="mainIcon" src="img/search.png" alt="Área de busca"></a>
        <h2>BUSCAR</h2>
    </div>
    <div class="mainDiv">
        <a href="Cadastrar.php"><img class="mainIcon" src="img/add.png" alt="Área de adicionar"></a>
        <h2>ADICIONAR</h2>
    </div>
    <div class="mainDiv">
        <a href="Cadastrar.php"><img class="mainIcon" src="img/edit.png" alt="Área de editar"></a>
        <h2>EDITAR</h2>
    </div>
   
</main>
<main>
<div class="mainDiv">
        <a href="#"><img class="mainIcon" src="img/pie-chart (1).png" alt="Área de gráfico de cadastros"></a>
        <h2>GRAFICO</h2>
    </div>

    <div class="mainDiv">
        <a href="#"><img class="mainIcon" src="img/timer.png" alt="Área de log de registro"></a>
        <h2>LOG</h2>
    </div>
    <div class="mainDiv">
        <a href="#"><img class="mainIcon" src="img/setting.png" alt="Área de configuração da página"></a>
        <h2>CONFIGURAÇÃO</h2>
    </div>
</main>
    <?php 
    include("footer.php") // footer
    ?>
</body>
</html>
