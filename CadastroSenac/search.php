<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
  <title>cadastro</title>
</head>
<body>

<div class="divForm">


  <form action="" method="POST">
  <div class="campoFoto">

  <h2>Cadastro do Perfil do Estudante</h2>

    <img class="update" src="IMG_20200913_121542.jpg">
  <div class="campoFoto">
    <div class="form-group">
      <input type="file"  id="exampleFormControlFile1">
    </div>
  </div>
  </div>
<!-- CPF , NOME -->
    <div class="form-group">
      <label for="formGroupExampleInput">CPF:</label>
      <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Nome:</label>
      <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>

    <!-- E-MAIL, TELEFONE , DATA DE NASCIMENTO -->

    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">E-mail</label>
      <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Telefone</label>
      <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Data de nascimento</label>
      <div class="input-group">
        <div class="input-group-prepend">
          
        </div>
        <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
        <div class="invalid-feedback">
          Por favor, escolha um nome de usuário.
        </div>
      </div>
    </div>
  </div>
  

    
    <!--  ENDEREÇO , BAIRRO-->
    
  <div class="row">
    <div class="col">
    <label for="formGroupExampleInput">Endreço</label>
    <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
    </div>
    <div class="col">
    <label for="formGroupExampleInput">Bairro</label>
    <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
    </div>
  </div>


<!-- ESCOLARIDADE , INSTITUIÇÃO -->
<br>
<div class="row">
      <div class="col">
      <label for="exampleFormControlSelect1">Nível de escolaridade</label>
      <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly> 
    
        
    </div>
      <div class="col">
        <label for="exampleFormControlSelect1">Estuda em outra instituição atualmente</label>
        <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
           
      </div>
</div>


<!--  -->
<br>
<div class="form-group">
    <label for="exampleFormControlInput1">Caso afirmativo, qual instituição</label>
    <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Qual o Curso?</label>
    <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
  </div>



<!--  -->
<br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Por qual motivo você escolheu se matricular em um curso do Senac RJ?
</label>
<input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">O que te levou a escolher este curso?</label>
    <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Você tem experiência na área profissional do curso?</label>
    <input class="form-control" type="text" placeholder="Input só de leitura, aqui... " rows="3" readonly>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Qual são suas expectativas após a conclusão do curso?Exemplo de textarea</label>
    <input class="form-control" type="text" placeholder="Input só de leitura, aqui..." readonly>
  </div>
    


  <button type="submit" class="btn btn-primary">Salvar Cadastro</button>
  <button type="resert" class="btn btn-primary">Limpar tela</button>

    
</form>

     
</div>


</body>
</html>
