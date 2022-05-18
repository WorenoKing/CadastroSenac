<?php 
  include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
<!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Área de Login</title>
</head>
<body>

    <div class="loginDiv">


    <div class="formimg">
        <img class="formImg" src="img/1200px-Senac_logo.svg.png" width="130px" alt="Logo do Senac">
        <h2>Login de Aluno</h2>
        </div>
        <hr>
     

    <form class="loginForm" action="" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                <label for="exampleFormControlInput1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="123456">
                esqueceu a senha? <a href="#">clique aqui </a>
            </div>

            <div class="formButton"><button type="submit" class="btn btn-primary">Entrar</button></div>
    </form>
    </div> 

    <!-- FOOTER -->
    <?php 
    include("footer.php")
    ?>
     
</body>
</html>