<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resert.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Cadastro </title>
</head>
<body>

<header>
<h1> Cadastro do Perfil do Estudante </h1>
</header>



<main>
<form action="" >

<div class="imagemDiv">
<img class="imagem" src="1586969992913-perfilsemfoto.jpg"><br>
<button type=""> Escolher Foto </button>

</div>

<label>CPF</label><br>
<input type="text" name="" value="" placeholder="CPF" required>
<br>
<label>Nome</label><br>
<input type="text"  name="" value="" placeholder="Nome Completo" required><br><br>

<div class="grupo1">
<label class="label1" >E-mail</label><br>
<input type="email" class="area1" name="" value="" placeholder="E-mail" required><br>
<label class="label1">telefone</label><br>
<input type="phone" class="area1" name="" value="" placeholder="Nome Completo" required><br>
<label class="label1">Data de nascimento</label><br>
<input type="date" class="area1" value="" placeholder="Nome Completo" required><br>

</div>
<br>

<div class="">
<label class="">Endereço</label><br>
<input  class="" type="text" name="endereco" value="" placeholder="Endereço" required><br>
<label class="" >bairro</label><br>
<input  class="" type="text" name="bairro" value="" placeholder="Bairro" required>
<br>
</div>

<label>Nível de escolaridade</label>
             <select name="idEscolaridade" id="">
             <option value="0">Escolha uma opção</option>
            <option value="1">Ensino fundamental</option>
              <option value="2">Ensino médio incompleto</option>
              <option value="3">Ensinor médio Completo</option>
              <option value="4">Ensino superior incompleto</option>
              <option value="5">Ensino superior completo</option>
        </select>

<label>Estuda em outra instituição atualmente</label>
<input type="radio"  name="sim">Sim</input>
<input type="radio" name="">Nao</input>
<br>

<label>Caso afirmativo, qual instituição?</label>
<input type="text" name="instituição" value="" placeholder="Informe a Instituição" required>
<br>
<label>Qual o Curso?</label>
<input type="text" name="curso" value="" placeholder="Informe o curso realizado" required>
<br><br><br>

<label>Por qual motivo você escolheu se matricular em um curso do Senac RJ?</label>
<br><br>
<textarea name="mensagem" id="mensagem" class="input-padrao" cols="42" rows="5" placeholder="Informe o motivo?"></textarea>
<br><br>

<label>O que te levou a escolher este curso?</label>
<br><br>
<textarea name="mensagem" id="mensagem" class="input-padrao" cols="42" rows="5" placeholder="Informe o motivo?"></textarea>
<br><br>

<label>Você tem experiência na área profissional do curso?</label><br>
<textarea name="mensagem" id="mensagem" class="input-padrao" cols="42" rows="5" placeholder="Informe a sua experiência?" ></textarea>
<br><br>

<label>Qual são suas expectativas após a conclusão do curso?</label><br>
<textarea name="mensagem" id="mensagem" class="input-padrao" cols="42" rows="5" placeholder="Informe a sua experiência?" ></textarea><br><br>

<button type="submit">Salvar Cadastro</button>


<button type="resert">Limpar Tela</button>



</form>



</main>


    
</body>
</html>