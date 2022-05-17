<?php 
  include("header.php")

?>

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

    <img class="update" src="IMG_20200913_121542.jpg" alt="área da foto do aluno">
  <div class="campoFoto">
    <div class="form-group">
      <input type="file"  id="exampleFormControlFile1">
    </div>
  </div>
  </div>
<!-- CPF , NOME -->
    <div class="form-group">
      <label for="formGroupExampleInput">CPF:</label>
      <input type="number" name="cpf" name="" class="form-control" id="formGroupExampleInput" placeholder="CPF">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Nome:</label>
      <input type="text" name="nome" class="form-control" id="formGroupExampleInput2" placeholder="Nome completo">
    </div>

    <!-- E-MAIL, TELEFONE , DATA DE NASCIMENTO -->

    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">E-mail</label>
      <input type="text" name="email" class="form-control" id="validationCustom01" placeholder="Nome" value="" required>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Telefone</label>
      <input type="text" name="telefone" class="form-control" id="validationCustom02" placeholder="Telefone" value="Telefone" required>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Data de nascimento</label>
      <div class="input-group">
        <div class="input-group-prepend">
          
        </div>
        <input type="date" name="dataNacimento" class="form-control" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
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
      <input type="text" name="endreco" class="form-control" placeholder="Nome">
    </div>
    <div class="col">
    <label for="formGroupExampleInput">Bairro</label>
      <input type="text" name="bairro" class="form-control" placeholder="Sobrenome">
    </div>
  </div>


<!-- ESCOLARIDADE , INSTITUIÇÃO -->
<br>
<div class="row">
      <div class="col">
      <label for="exampleFormControlSelect1">Nível de escolaridade</label>
      <select class="form-control" name="nivelEscolaridade" id="exampleFormControlSelect1"> <!-- DUVIDA AONDE COLOCAR O NAME="" -->
    
          <option>ensino fundametal inconpleto</option>
          <option>ensino fundametal completo</option>
          <option>ensino médio incompleto</option>
          <option>ensino médio completo</option>
          <option>ensino superior incompleto</option>
          <option>ensino superior completo</option>
      </select>
    </div>
      <div class="col">
        <label for="exampleFormControlSelect1">Estuda em outra instituição atualmente</label>
        <select class="form-control" name="instituicao" id="exampleFormControlSelect1">
            <option>Técnico</option>
            <option>Universidade</option>
            <option>Faculdade</option>
            <option>Centro Universitário</option>
            <option>Centro de Educação Tecnológica</option>
            <option>Institutos Federais</option>
        </select>
      </div>
</div>


<!--  -->
<br>
<div class="form-group">
    <label for="exampleFormControlInput1">Caso afirmativo, qual instituição</label>
    <input type="text" name="nameInstituicao" class="form-control" id="exampleFormControlInput1" placeholder="informe a Instituição">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Qual o Curso?</label>
    <input type="text" name="curso" class="form-control" id="exampleFormControlInput1" placeholder="informe a Instituição">
  </div>

<!--  -->

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Por qual motivo você escolheu se matricular em um curso do Senac RJ?
</label>
    <textarea class="form-control" name="textarea1" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">O que te levou a escolher este curso?</label>
    <textarea class="form-control" name="textarea2" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Você tem experiência na área profissional do curso?</label>
    <textarea class="form-control" name="textarea3" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Qual são suas expectativas após a conclusão do curso?Exemplo de textarea</label>
    <textarea class="form-control" name="textarea4" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    


  <button type="submit" class="btn btn-primary">Salvar Cadastro</button>
  <button type="resert" class="btn btn-primary">Limpar tela</button>

    
</form>

     
</div>
<?php 
    include("footer.php")
    ?>

</body>
</html>
